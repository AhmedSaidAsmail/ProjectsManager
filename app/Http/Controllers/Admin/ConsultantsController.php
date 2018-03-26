<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Models\Consultant;
use Illuminate\Support\Facades\DB;

class ConsultantsController extends Controller
{
    private $_path = "/documents/consultants/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultants = Consultant::all();
        return view('Admin.consultantsIndex', ['consultants' => $consultants]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.consultantsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:consultants',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $data = $request->all();
        try {
            $info = collectData(['request' => $request, 'table' => 'consultant_details', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'consultant_documents', 'path' => $this->_path]);
            $consultant = Consultant::create($data);
            $consultant->information()->create($info);
            $consultant->documents()->createMany($documents);

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('consultants.index')->with('danger', $e->getMessage());
        }
        return redirect()->route('consultants.index')->with('success', "Consultants has been inserted");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultant=Consultant::find($id);
        return view('Admin.consultantsShow',['consultant'=>$consultant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultant = Consultant::find($id);
        return view('Admin.consultantsEdit', ['consultant' => $consultant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $consultant = Consultant::find($id);
        $this->validateEmail($request, $consultant);
        try {
            $info = collectData(['request' => $request, 'table' => 'consultant_informations', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'consultant_documents', 'path' => $this->_path, 'primaryKey' => 'document_id']);
            $consultant->update($request->all());
            $consultant->information()->update($info);
            sync($consultant, 'documents', $documents);

        } catch (Exception $e) {
            return redirect()->route('consultants.index')->with('danger', $e->getMessage());

        }
        return redirect()->route('consultants.index')->with('success', 'The data has been updated');
    }

    private function validateEmail(Request $request, Consultant $consultant)
    {
        if ($request->email !== $consultant->email) {
            return $this->validate($request, [
                'email' => 'required|max:255|unique:consultants|email',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultant = Consultant::find($id);
        $consultant->delete();
        return redirect()->route('consultants.index')->with('danger', 'the owner has been deleted');
    }

    public function active($id)
    {
        $consultant = Consultant::find($id);
        $consultant->update(['active' => 1]);
        return redirect()->back();

    }

    public function inactive($id)
    {
        $consultant = Consultant::find($id);
        $consultant->update(['active' => 0]);
        return redirect()->back();
    }

    public function showPasswordForm($id)
    {
        $consultant = Consultant::find($id);
        return view('Admin.consultantsChangePassword', ['consultant' => $consultant]);
    }

    public function changePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);
        $consultant = Consultant::find($id);
        $data = $request->all();
        try {
            $consultant->update(['password' => bcrypt($data['password'])]);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->route('consultants.index')->with('success', 'password has been changed');
    }
}

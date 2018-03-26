<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Models\Contractor;
use Illuminate\Support\Facades\DB;

class ContractorsController extends Controller
{
    private $_path = "/documents/contractors/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractors = Contractor::all();
        return view('Admin.contractorsIndex', ['contractors' => $contractors]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.contractorsCreate');
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
            'email' => 'required|max:255|email|unique:contractors',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'emergency_phone' => 'required|max:255'
        ]);
        $data = $request->all();
        try {
            $info = collectData(['request' => $request, 'table' => 'contractor_informations', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'contractor_documents', 'path' => $this->_path]);
            $contractor = Contractor::create($data);
            $contractor->information()->create($info);
            $contractor->documents()->createMany($documents);

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('contractors.index')->with('danger', $e->getMessage());
        }
        return redirect()->route('contractors.index')->with('success', "Contractors has been inserted");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractor = Contractor::find($id);
        return view('Admin.contractorsShow', ['contractor' => $contractor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractor = Contractor::find($id);
        return view('Admin.contractorsEdit', ['contractor' => $contractor]);
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
            'emergency_phone' => 'required|max:255'
        ]);
        $contractor = Contractor::find($id);
        $this->validateEmail($request, $contractor);
        try {
            $info = collectData(['request' => $request, 'table' => 'contractor_informations', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'contractor_documents', 'path' => $this->_path, 'primaryKey' => 'document_id']);
            $contractor->update($request->all());
            $contractor->information()->update($info);
            sync($contractor, 'documents', $documents);

        } catch (Exception $e) {
            return redirect()->route('contractors.index')->with('danger', $e->getMessage());

        }
        return redirect()->route('contractors.index')->with('success', 'The data has been updated');
    }

    private function validateEmail(Request $request, Contractor $contractor)
    {
        if ($request->email !== $contractor->email) {
            return $this->validate($request, [
                'email' => 'required|max:255|unique:contractors|email',
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
        $contractor = Contractor::find($id);
        $contractor->delete();
        return redirect()->route('contractors.index')->with('danger', 'the owner has been deleted');
    }

    public function active($id)
    {
        $contractor = Contractor::find($id);
        $contractor->update(['active' => 1]);
        return redirect()->back();

    }

    public function inactive($id)
    {
        $contractor = Contractor::find($id);
        $contractor->update(['active' => 0]);
        return redirect()->back();
    }

    public function showPasswordForm($id)
    {
        $contractor = Contractor::find($id);
        return view('Admin.contractorsChangePassword', ['contractor' => $contractor]);
    }

    public function changePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);
        $contractor = Contractor::find($id);
        $data = $request->all();
        try {
            $contractor->update(['password' => bcrypt($data['password'])]);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->route('contractors.index')->with('success', 'password has been changed');
    }

    public function getEngineers(Request $request)
    {
        $contractor = Contractor::find($request->id);
        $engineers = $contractor->engineers;
        return view('Admin.Layouts.contractorsGetEngineers', ['engineers' => $engineers, 'contractor' => $contractor]);
    }
}

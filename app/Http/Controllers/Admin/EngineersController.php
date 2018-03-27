<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Models\Engineer;
use Illuminate\Support\Facades\DB;

class EngineersController extends Controller
{
    private $_path = "/documents/engineers/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineers = Engineer::all();
        return view('Admin.engineersIndex', ['engineers' => $engineers]);

    }

    public function contractorEngineers()
    {
        $engineers = Engineer::where('contractor_id', '!=', null)->get();
        return view('Admin.engineersIndex', ['engineers' => $engineers,'relatedTo'=>'contractor']);
    }

    public function consultantEngineers()
    {
        $engineers = Engineer::where('consultant_id', '!=', null)->get();
        return view('Admin.engineersIndex', ['engineers' => $engineers,'relatedTo'=>'consultant']);
    }

    public function ownersEngineers()
    {
        $engineers = Engineer::where('owner_id', '!=', null)->get();
        return view('Admin.engineersIndex', ['engineers' => $engineers,'relatedTo'=>'owner']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.engineersCreate');
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
            'email' => 'required|max:255|email|unique:engineers',
            'phone' => 'required|max:255',
        ]);
        $data = $request->all();
        try {
            $info = collectData(['request' => $request, 'table' => 'engineer_details', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'engineer_documents', 'path' => $this->_path]);
            $engineer = Engineer::create($data);
            $engineer->information()->create($info);
            $engineer->documents()->createMany($documents);

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('engineers.index')->with('danger', $e->getMessage());
        }
        return redirect()->route('engineers.index')->with('success', "Engineers has been inserted");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $engineer = Engineer::find($id);
        return view('Admin.engineersShow', ['engineer' => $engineer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engineer = Engineer::find($id);
        return view('Admin.engineersEdit', ['engineer' => $engineer]);
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
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $engineer = Engineer::find($id);
        $this->validateEmail($request, $engineer);
        try {
            $info = collectData(['request' => $request, 'table' => 'engineer_informations', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'engineer_documents', 'path' => $this->_path, 'primaryKey' => 'document_id']);
            $engineer->update($request->all());
            $engineer->information()->update($info);
            sync($engineer, 'documents', $documents);

        } catch (Exception $e) {
            return redirect()->route('engineers.index')->with('danger', $e->getMessage());

        }
        return redirect()->route('engineers.index')->with('success', 'The data has been updated');
    }

    private function validateEmail(Request $request, Engineer $engineer)
    {
        if ($request->email !== $engineer->email) {
            return $this->validate($request, [
                'email' => 'required|max:255|unique:engineers|email',
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
        $engineer = Engineer::find($id);
        $engineer->delete();
        return redirect()->route('engineers.index')->with('danger', 'the owner has been deleted');
    }

    public function active($id)
    {
        $engineer = Engineer::find($id);
        $engineer->update(['active' => 1]);
        return redirect()->back();

    }

    public function inactive($id)
    {
        $engineer = Engineer::find($id);
        $engineer->update(['active' => 0]);
        return redirect()->back();
    }

    public function showPasswordForm($id)
    {
        $engineer = Engineer::find($id);
        return view('Admin.engineersChangePassword', ['engineer' => $engineer]);
    }

    public function changePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);
        $engineer = Engineer::find($id);
        $data = $request->all();
        try {
            $engineer->update(['password' => bcrypt($data['password'])]);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->route('engineers.index')->with('success', 'password has been changed');
    }

    public function getBelong(Request $request)
    {
        $class = ucfirst($request->belongsTo);
        $belong = "\App\Models\\$class";
        $data = call_user_func_array(array($belong, "all"), array());
        return view('Admin.Layouts.getBelongs', ['users' => $data]);

    }
}

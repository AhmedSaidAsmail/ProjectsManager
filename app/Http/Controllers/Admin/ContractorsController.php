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
            return redirect()->route('contractors.index')->with('danger',$e->getMessage());
        }
        return redirect()->route('contractors.index')->with('success',"Contractors has been inserted");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

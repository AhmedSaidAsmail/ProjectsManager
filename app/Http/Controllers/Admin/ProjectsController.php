<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Engineer;
use App\Models\Owner;
use App\Models\Contractor;
use Exception;

class ProjectsController extends Controller
{
    private $_path = "/documents/projects/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultantEngineers = Engineer::where('consultant_id', '!=', null)->get();
        $owners = Owner::all();
        $contractors = Contractor::all();
        return view('Admin.projectsCreate', [
            'consultantEngineers' => $consultantEngineers,
            'owners' => $owners,
            'contractors' => $contractors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        $data = $request->all();
        try {
            $consultantCrew = collectData(['request' => $request, 'table' => 'consultants_crews', 'path' => $this->_path]);
            $contractorCrew = collectData(['request' => $request, 'table' => 'contractors_crews', 'path' => $this->_path]);
            $ownerCrew = collectData(['request' => $request, 'table' => 'owners_crews', 'path' => $this->_path]);
            $quantity = collectData(['request' => $request, 'table' => 'project_quantities', 'path' => $this->_path], 'flatten');
            $documents = collectData(['request' => $request, 'table' => 'project_documents', 'path' => $this->_path]);
            $project = Project::create($data);
            $project->consultantEngineers()->createMany($consultantCrew);
            $project->contractorEngineers()->createMany($contractorCrew);
            $project->ownerEngineers()->createMany($ownerCrew);
            $project->quantity()->create($quantity);
            $project->documents()->createMany($documents);
        } catch (Exception $e) {
            return redirect()->route('projects.index')->with('fail', $e->getMessage());
        }
        return redirect()->route('projects.index')->with('success', 'Project has been successfully created');
    }

    private function validateRequest(Request $request)
    {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'sort' => 'required|max:255',
            'distance' => 'integer',
            'contractor_id' => 'exists:contractors,id',
            'owner_id' => 'exists:owners,id',
            'contract_no' => 'required|integer',
            'contract_value' => 'required|integer',
            'contract_period' => 'required|integer',
            'city' => 'required|max:255',
            'steps' => 'required|integer',
            'buildings_num' => 'required|integer'

        ]);

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
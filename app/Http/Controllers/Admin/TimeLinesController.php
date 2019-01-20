<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Src\CheckParentChildsRelation\CheckRelations;
use Illuminate\Http\Request;
use App\Models\TimeLine;
use App\Models\Project;
use RuntimeException;

class TimeLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeLines = TimeLine::all();
        return view('Admin/timeLinesAll', ['timeLines' => $timeLines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $timeLines = TimeLine::all();
        return view('Admin/timeLinesCreate', ['projects' => $projects, 'timeLines' => $timeLines]);
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
            'project_id' => 'integer|required|min:1',
            'name' => 'required'
        ]);
        $timeLine = new TimeLine();
        try {
            (new CheckRelations($request->all(), 'parent', 'project_id', $timeLine))->check();
            $timeLine->create($request->all());
            return redirect()->route('time-lines.index');
        } catch (RuntimeException $ex) {
            return $ex->getMessage();
        }

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

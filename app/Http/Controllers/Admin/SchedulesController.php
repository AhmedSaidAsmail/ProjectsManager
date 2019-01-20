<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class SchedulesController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $this->validation($attributes);
        try {
            Schedule::create($attributes);
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->back()->with('success', 'The Schedule has been inserted to database successfully');


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
//        $update = ['actual_starting_date' => "2019-01-01"];
//        $schedule = Schedule::find($id);
//        $schedule->update($update);
//        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->all();
        $update = [$attributes['attribute'] => $attributes['value']];
        try {
            $schedule = Schedule::find($id);
            $schedule->update($update);
            $project = Project::find($attributes['project_id']);
            return view('Admin.Layouts._schedule_table', ['project' => $project]);
        } catch (\Exception $e) {
            return $e->getMessage();
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
        //
    }

    private function validation(array $attributes)
    {
        return Validator::make($attributes, [
            'project_id' => 'required|exists:projects,id',
            'activity_id' => 'required',
            'related_to' => 'nullable|exists:schedules,activity_id',
            'sort' => 'required',
            'default_duration' => 'integer|required',
            'planed_starting_date' => 'nullable|date',
            'activity_name' => 'required'
        ])->validate();

    }
}

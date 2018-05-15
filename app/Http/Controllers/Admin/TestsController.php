<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Src\Filter;
use Exception;

class TestsController extends Controller
{
    private $_path = "/documents/projects/tests/";

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $filter = new Filter($request, 'tests');
            return view('Admin.Layouts.AjaxResponse.projectTest', ['tests' => $filter->results()]);
        }
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
        $this->validate($request, [
            'project_id' => 'required|integer',
            'sort' => 'required',
            'description' => 'required',
            'document' => 'required|file'
        ]);
        $data = $request->all();
        try {
            $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            Test::create($data);
            consultantEngineersNotification($data['project_id']);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Test has been created');
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
        $test = Test::find($id);
        return view('ProjectItems.tests', ['test' => $test]);
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
            'project_id' => 'required|integer',
            'sort' => 'required',
            'description' => 'required',
            'document' => 'file'
        ]);
        $data = $request->all();
        $test = Test::find($id);
        try {
            if (isset($data['document']) && !is_null($data['document'])) {
                $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            }
            $test->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Test has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function getAccordingToDate(Request $request)
    {
        $dateFrom = $request->dateFrom;
        $dateTo = $request->dateTo;
        $project_id = $request->projectId;
        $tests = Test::where('project_id', '=', $project_id)->where('date', '>=', $dateFrom)->where('date', '<=', $dateTo)->get();
        return view('ProjectItems.AjaxResponse.reportTests', ['tests' => $tests]);

    }
}

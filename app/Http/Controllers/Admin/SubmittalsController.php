<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Submittal;
use App\Src\Filter;
use Exception;

class SubmittalsController extends Controller
{
    private $_path = "/documents/projects/submittals/";

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $filter = new Filter($request, 'submittals');
            return view('Admin.Layouts.AjaxResponse.projectSubmittals', ['submittals' => $filter->results()]);
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
            'number' => 'integer|required',
            'related_item' => 'required',
            'description' => 'required',
            'document' => 'required|file'
        ]);
        $data = $request->all();

        try {
            $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            Submittal::create($data);
            consultantEngineersNotification($data['project_id']);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Submittal has been created');
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
        $submittal = Submittal::find($id);
        return view('ProjectItems.submittals', ['submittal' => $submittal]);
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
            'number' => 'integer|required',
            'related_item' => 'required',
            'description' => 'required',
            'document' => 'file'
        ]);
        $submittal = Submittal::find($id);
        $data = $request->all();
        try {
            if (isset($data['document']) && !is_null($data['document'])) {
                $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            }
            $submittal->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Submittal has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submittal = Submittal::find($id);
        $submittal->delete();
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
        $submittals = Submittal::where('project_id', '=', $project_id)->where('date', '>=', $dateFrom)->where('date', '<=', $dateTo)->get();
        return view('ProjectItems.AjaxResponse.reportSubmittals', ['submittals' => $submittals]);

    }
}

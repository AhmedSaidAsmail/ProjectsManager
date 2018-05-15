<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Request as ProjectRequests;
use App\Src\Filter;
use Exception;

class RequestsController extends Controller
{
    private $_path = "/documents/projects/requests/";

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $filter = new Filter($request, 'requests');
            return view('Admin.Layouts.AjaxResponse.projectRequest', ['requests' => $filter->results()]);
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
            'code' => 'required',
            'related_item' => 'required',
            'description' => 'required',
            'document' => 'required|file'
        ]);
        $data = $request->all();
        try {
            $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            ProjectRequests::create($data);
            consultantEngineersNotification($data['project_id']);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Request has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request = ProjectRequests::find($id);
        return view('ProjectItems.requests', ['request' => $request]);

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
            'code' => 'required',
            'related_item' => 'required',
            'description' => 'required',
            'document' => 'file'
        ]);
        $data = $request->all();
        $projectRequest = ProjectRequests::find($id);
        try {
            if (isset($data['document']) && !is_null($data['document'])) {
                $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            }
            $projectRequest->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Request has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projectRequest = ProjectRequests::find($id);
        $projectRequest->delete();
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
        $projectRequests = ProjectRequests::where('project_id', '=', $project_id)->where('date', '>=', $dateFrom)->where('date', '<=', $dateTo)->get();
        return view('ProjectItems.AjaxResponse.reportRequests', ['requests' => $projectRequests]);

    }
}

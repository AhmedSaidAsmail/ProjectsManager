<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender;
use App\Src\Filter;

class TendersController extends Controller
{
    private $_path = "/documents/projects/tenders/";

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $filter = new Filter($request, 'tenders');
            return view('Admin.Layouts.AjaxResponse.projectTenders', ['tenders' => $filter->results()]);
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
            Tender::create($data);
            consultantEngineersNotification($data['project_id']);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Tender Drawing has been created');
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
        $tender = Tender::find($id);
        return view('ProjectItems.tenders', ['tender' => $tender]);
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
        $tender = Tender::find($id);
        try {
            if (isset($data['document']) && !is_null($data['document'])) {
                $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            }
            $tender->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Tender Drawing has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tender = Tender::find($id);
        $tender->delete();
        return redirect()->back();
    }
}

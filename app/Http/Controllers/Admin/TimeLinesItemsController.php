<?php

namespace App\Http\Controllers\Admin;

use App\Models\TimeLinesItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeLinesItemsController extends Controller
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
        $this->validate($request, [
            'time_line_id' => 'required',
            'activity_id' => 'required',
            'activity_name' => 'required',
            'original' => 'required',
            'starting_date' => 'date|required',
            'ending_date' => 'date|required'
        ]);
        try {
            $timeLine = new TimeLinesItems();
            $timeLine->create($request->all());
        } catch (\RuntimeException $ex) {
            return redirect()->back()->with('fail', $ex->getMessage());
        }
        return redirect()->back()->with('success', 'TimeLine has been created');
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

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Owner;
use Exception;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('Admin.ownersIndex', ['owners' => $owners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ownersCreate');
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
            'email' => 'required|max:255|unique:owners|email',
            'password' => 'required|confirmed'
        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        try {
            Owner::create($data);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->route('owners.index')->with('success', 'Owner has been created');
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
        $owner = Owner::findorFail($id);
        return view('Admin.ownersEdit', ['owner' => $owner]);
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
        $owner = Owner::findorFail($id);
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $this->validateEmail($request, $owner);
        $data = $request->all();
        try {
            $owner->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->route('owners.index')->with('success', 'Owner has been updated');
    }

    private function validateEmail(Request $request, Owner $owner)
    {
        if ($request->email !== $owner->email) {
            return $this->validate($request, [
                'email' => 'required|max:255|unique:owners|email',
            ]);
        }
    }


    /**
     * Show the form to change password
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword($id)
    {
        $owner = Owner::findorFail($id);
        return view('Admin.ownersChangePassword', ['owner' => $owner]);
    }

    public function updatePassword(Request $request, $id)
    {
        $owner = Owner::findorFail($id);
        $this->validate($request, [
            'password' => 'required|confirmed'
        ]);
        $data = $request->all();
        try {
            $owner->update(['password'=>bcrypt($data['password'])]);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());
        }
        return redirect()->route('owners.index')->with('success', 'password has been changed');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Owner::findorFail($id);
        $owner->delete();
        return redirect()->route('owners.index')->with('danger', 'the owner has been deleted');
    }
    public function getEngineers(Request $request){
        $owner = Owner::find($request->id);
        $engineers=$owner->engineers;
        return view('Admin.Layouts.ownersGetEngineers',['engineers'=>$engineers,'owner'=>$owner]);
    }
    public function active($id)
    {
        $owner = Owner::find($id);
        $owner->update(['active' => 1]);
        return redirect()->back();

    }

    public function inactive($id)
    {
        $owner = Owner::find($id);
        $owner->update(['active' => 0]);
        return redirect()->back();
    }
}

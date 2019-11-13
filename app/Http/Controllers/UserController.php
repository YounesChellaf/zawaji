<?php

namespace App\Http\Controllers;

use App\Image;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin_layouts.user');
    }

    public function show_users_role(){
        return view('dashboard.admin_layouts.user-role');
    }

    public function showProfile($id){
        $user = User::find($id);
        return view('dashboard.admin_layouts.profile')->withUser($user);
    }

    public function updateProfile($id,Request $request){
        if ($request->post()){
            $user = User::find($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->address = $request->address;
            $user->phone_number = $request->phone_number;

            if ($request->file('photo')){
                $photo = $request->file('photo');
                $destpath = 'assets/images/avatar';
                $file_name = $photo->getClientOriginalName();
                $photo->move($destpath,$file_name);
                $image = Image::create([
                    'path' => $file_name
                ]);
                $user->image_id = $image->id;
            }
            $user->save();
            return redirect()->back();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function bann($id){
        $user = User::find($id);
        $user->status = 'banned';
        $user->active = false;
        $user->save();
        return view('dashboard.admin_layouts.user');
    }
    public function activate($id){
        $user = User::find($id);
        $user->status = 'approved';
        $user->active = true;
        $user->save();
        return view('dashboard.admin_layouts.user');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

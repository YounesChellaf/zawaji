<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){
        return view('dashboard.admin_layouts.social-links');
    }
    public function create(Request $request){
        //
    }
    public function update(Request $request, $id){
        //
    }
}

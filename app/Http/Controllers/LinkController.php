<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){
        return view('dashboard.admin_layouts.social-links');
    }
    public function create(Request $request){
        //
    }
    public function facebookUpdate(Request $request, $id){
        $facebook = Link::find($id);
        $facebook->facebook = $request->link;
        $facebook->save();
        return redirect()->back();
    }
    public function instgramUpdate(Request $request, $id){
        $facebook = Link::find($id);
        $facebook->instgram = $request->link;
        $facebook->save();
        return redirect()->back();
    }
    public function youtubeUpdate(Request $request, $id){
        $facebook = Link::find($id);
        $facebook->youtube = $request->link;
        $facebook->save();
        return redirect()->back();
    }
    public function twitterUpdate(Request $request, $id){
        $facebook = Link::find($id);
        $facebook->twitter = $request->link;
        $facebook->save();
        return redirect()->back();
    }

}

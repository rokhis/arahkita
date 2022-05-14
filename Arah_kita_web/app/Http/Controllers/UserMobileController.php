<?php

namespace App\Http\Controllers;

use App\Models\User_Mobile;
use Illuminate\Http\Request;

class UserMobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_mobile = User_Mobile::all();
        return view('user.index', compact('user_mobile'));
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
     * @param  \App\Models\User_Mobile  $user_Mobile
     * @return \Illuminate\Http\Response
     */
    public function show(User_Mobile $user_Mobile)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @param  \App\Models\User_Mobile  $user_Mobile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User_Mobile::find($id);
        return view('user.view', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_Mobile  $user_Mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_Mobile $user_Mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user_Mobile = User_Mobile::find($id);
        $user_Mobile->delete();

        return redirect()->route('user.index');
    }
}

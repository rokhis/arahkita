<?php

namespace App\Http\Controllers;

use App\Models\User_Mobile;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserMobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('admin');
        if ($request->has('search')) {
            $user_mobile = User_Mobile::where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')->get();
        } else {
            $user_mobile = User_Mobile::all();
        }
        return view('user.index', compact('user_mobile', 'request'));
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
        $this->authorize('admin');
        $user_mobile = User_Mobile::find($id);
        return view('user.view', compact('user_mobile'));
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
        $this->authorize('admin');
        $user_Mobile = User_Mobile::find($id);
        $user_Mobile->delete();
        Alert::toast('Data berhasil dihapus', 'success');
        return redirect()->route('user.index');
    }
}

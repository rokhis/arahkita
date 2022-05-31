<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('superadmin');
        if ($request->has('search')) {
            $user = User::where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('is_admin', 'like', '%' . $request->search . '%')->get();
        } else {
            $user = User::all();
        }
        return view('admin.index', compact('user', 'request'));
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
        // $this->authorize('superadmin');
        // $user = User::find($id);
        // return view('admin.edit', compact('user'));
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
        // $validate = $request->validate([
        //     'nama' => 'required|max:255',
        //     'username' => 'required|min:3|max:20',
        //     'email' => 'required|email:dns',
        //     'is_admin' => 'required',


        // ]);



        // $user = User::find($id);
        // $user->update($validate);

        // Alert::toast('Data berhasil di update', 'success');

        // return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->authorize('superadmin');
        $user = User::find($id);
        $user->delete();
        Alert::toast('Data berhasil dihapus', 'success');
        return back();
    }
}

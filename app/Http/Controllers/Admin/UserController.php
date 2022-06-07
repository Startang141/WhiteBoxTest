<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\level;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $level = level::all();
        return view('admin.users.create',['level'=>$level]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Email'=>'required',
            'Address'=>'required',
            'Phone_number'=>'required',
            'Gender'=>'required',
            'Image'=>'required',
            'Level_id',
        ]);

        if($request->file('Image')){
            $image_name=$request->file('Image')->store('images','public');
        }

        $user = new user;
        $user->name = $request->get('Name');
        $user->email = $request->get('Email');
        $user->address = $request->get('Address');
        $user->phone_number = $request->get('Phone_number');
        $user->gender = $request->get('Gender');
        $user->image = $image_name;
        //fungsi eloquent untuk menambahkan data
        $level = new level;
        $level->id = $request->get('level');

        $user->level()->associate($level);
        $user->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.users.index')
        ->with('success','Pelanggan Berhasil Ditambahakan');
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
        $item = user::where('id', $id)->first();
        $level = level::all();
        return view('admin.users.edit', compact('item','level'));
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
        $request->validate([
            'Name'=>'required',
            'Email'=>'required',
            'Address'=>'required',
            'Phone_number'=>'required',
            'Gender'=>'required',
            'Image'=>'required',
            'Level_id',
        ]);

        $user = new User;
        $user->name = $request->get('Name');
        $user->email = $request->get('Email');
        $user->address = $request->get('Address');
        $user->phone_number = $request->get('Phone_number');
        $user->gender = $request->get('Gender');
        if($user->image && file_exists(storage_path('app/public/'. $user->image))) {
                Storage::delete('public/' . $delete->image);
            }
        //fungsi eloquent untuk menambahkan data
        $level = new level;
        $level->id = $request->get('Level');

        $user->level()->associate($level);
        $user->save();

        return redirect()->route('admin.users.index')
        ->with('success','Pelanggan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.users.index')
                    ->with('success', 'Berhasi menghapus');
    }
}
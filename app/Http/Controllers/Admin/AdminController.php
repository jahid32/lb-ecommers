<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    function dashboard(){
        return view('admin.admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index')->with('users', $users);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'min:6', 'max:14'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'phone', 'min:10',  'max:11', 'unique:users'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
      ]);
      
      $user = new User();
      $user->name = request('name');
      $user->username = request('username');
      $user->email = request('email');
      $user->phone = request('phone');
      $user->password = request('password');
      $user->role_id = 2;
      $user->save();
      return redirect()->route('admin.users.index')->with('success', 'User Create Successfully');
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
        $user = User::find($id);
        return view('admin.edit',compact('user'));
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
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'phone', 'min:10',  'max:11'],
          ]);
          User::where('id', $id)
            ->update(['name' => $request->name,'phone' => $request->phone]);
          
          return redirect()->route('admin.users.index')->with('success', 'User Create Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('admin.users.index')->with('success', 'User Deleted Successfully');

    }
}

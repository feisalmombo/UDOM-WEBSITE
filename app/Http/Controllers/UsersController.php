<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest('updated_at')->paginate(10); 
        return view('Dashboard.Users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [ 
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required'
        ]);

       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->save();
       $request->session()->flash('msg-success', 'User has been Added Successful');
       return redirect ('/users');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
     $user = User::findOrFail($user->id);
     return view('Dashboard.Users.show', compact('user'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::findOrFail($user->id);
        return view ('Dashboard.Users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [ 
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $request->session()->flash('msg-success', 'User has been Updated Successful');
        return redirect ('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::findOrFail($user->id);
        $user->delete();
        return back();
    }
    public function is_admin(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);
        if($user->is_admin == false){
            $user->is_admin = true;
            $user->updated_at = Carbon::now();
            $user->save();
            $request->session()->flash('msg-success', 'Is Admin Successful');
            return back();
        }else{
            $user->is_admin = false;
            $user->updated_at = Carbon::now();
            $user->save();
            $request->session()->flash('msg-success', 'Is Normal User Successful');
            return back();
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function getlogin()
    {
        return view('auth.login');
    }
    public function postlogin()
    {
         $inputs = request()->except([ '_token' ]);
        if(auth()->attempt($inputs)) {
            return redirect()->intended('/');
        }else{
            abort(401);
        }
    }

     public function logout(){
        auth()->logout();
        return redirect('/');
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
     public function register()
     {
        return view('auth.register');
     }

    public function store(Request $request)
    {
        $name = request('name');
        $username = request('username');
        $password = bcrypt(request('password'));
        $status = request('status');

    DB::table('users')->insert([
        'name' => $name,
        'username' => $username,
        'password' => $password,
        'status' => $status

    ]);
        $users = DB::table('users')
        ->paginate(5);
        
        return redirect('/');
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

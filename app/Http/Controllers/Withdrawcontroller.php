<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Withdrawcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdraw = DB::table('withdrawal')
        ->get();
        return view('withdraw.index', compact('withdraw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('withdraw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'username' => 'required',
            'balance' => 'required',
            'bankwithdrawal' => 'required',
            'accountnumberwithdrawal' => 'required',
            'accountnamewithdrawal' => 'required',
            'datetime' => 'required',
            'channelwithdraw' => 'required',
            'tel' => 'required',
            'opinion' => 'required'
         ];

         $datas = request()->except([ '_token' ]);
         $this->validate($request,$rules);

        try{
        
            DB::table('withdrawal')
            ->insert($datas);
            return redirect('/dollawithdraw');
             } catch (Exception $w) {
                 abor(500);
             }
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
        $withdraw = DB::table('withdrawal')
        ->where('id', $id)
        ->first();

        return view('withdraw.edit' , compact('withdraw'));
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
        $datas = request()->except(['_token','_method']);
        

        DB::table('withdrawal')
            ->where('id', $id)
            ->update($datas);
            return redirect('/dollawithdraw');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $rules =[
             'username' => 'required|min:5',
             'balance' => 'required|max:8',
            'bankdeposit' => 'required',
            'accountnumberdeposit' => 'required',
            'accontnamedeposit' => 'required',
            'datetime' => 'required',
            'channeldeposit' => 'required',
            'tel' => 'required|max:10',
             'opinion' => 'required'
         ];//ตัวแปรเรียกเอาไปเทียบค่า


    public function index()
    {
        $deposit = DB::table('deposit')
        ->get();
        return view('deposit.index', compact('deposit'));
        //return 'dolla';
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deposit.create');
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
             'username' => 'required|min:5',
             'balance' => 'required|max:8',
            'bankdeposit' => 'required',
            'accountnumberdeposit' => 'required',
            'accontnamedeposit' => 'required',
            'datetime' => 'required',
            'channeldeposit' => 'required',
            'tel' => 'required|max:10',
             'opinion' => 'required'
         ];

           $datas = request()->except([ '_token' ]);
          $this->validate($request,$rules);

         try{
        
            DB::table('deposit')
            ->insert($datas);

             return redirect('/dolladeposit');
             } catch (Exception $d) {
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
        $deposit = DB::table('deposit') 
        ->where('id', $id)
        ->first();

        return view('deposit.edit',compact('deposit'));
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
        $this->validate($request, $this->rules);

        DB::table('deposit')
            ->where('id', $id)
            ->update($datas);
            return redirect('/dolladeposit');
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

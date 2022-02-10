<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Unit;
use App\Models\User;
class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id=auth()->user()->id;
        $unit=User::find($user_id)->unit;
        //$supply=User::find($user_id)->supply;
        //print_r($unit);
        return view('agrihub.manage-unit')->with("unit",$unit)->with('unit2',$unit);
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
        
        $this->validate($request,[
            'name'=>'required',
         
        ]);
            $data=$request->all();
            $data['user_id']=auth()->user()->id;
            $result=Unit::create($data);
            if($result)
            {
                $messagev="Successful Added'";
                return redirect('manage/unit')->with('messagev',$messagev);
            }
            else
            {
                $messager="Failed to add new unit measure";
                return redirect('manage/unit')->with('messagev',$messager);
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
        $this->validate($request,[
            'name'=>'required',
           
        ]); 
       
        $data=Unit::find($id);
        $result=$request->all();
        $data->update($result);
        if($data)
        {
            $messagev="Success Updated'";
            return redirect('manage/unit')->with('messagev',$messagev);
        }
        else
        {
            $messager="Sorry Failed to update";
            return redirect('manage/unit')->with('messager',$messager);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data=Unit::find($id);
        $data->delete();
        if($data)
        {
            $messagev="Success Deleted'";
            return redirect('manage/unit')->with('messagev',$messagev);
        }
    }
}

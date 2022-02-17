<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Hash;

class UserController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function register_post(Request $request)
    {
        //new user
        $tab = new Users;

        //validate email
        $user_data = $tab->where('Email',$request->input('Email',''))->first();
        if (!empty($user_data)){
            echo '<script>alert("Email already exists");location="'.$_SERVER['HTTP_REFERER'].'"</script>';exit;
        }
        $tab->First_Name = $request->input('First_Name','');
        $tab->Last_Name = $request->input('Last_Name','');
        $tab->Email = $request->input('Email','');
        $tab->Date_of_Birth = $request->input('Date_of_Birth','');
        $tab->Phone_Number = $request->input('Phone_Number','');
        $tab->Address = $request->input('Address','');
        $tab->Password = Hash::make($request->input('Password',''));

        //dd($request->all())
        if($tab->save()){
            $request->flashExcept('_token','Password');
            echo '<script>alert("Added successfully");location="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }else{
            echo '<script>alert("Failed to add!");location="'.$_SERVER['HTTP_REFERER'].'"</script>';
        }
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

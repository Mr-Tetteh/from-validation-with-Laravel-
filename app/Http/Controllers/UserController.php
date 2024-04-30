<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\table;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //*****CREATE*****//
//        DB::table('users')->insert([
//
//            'name'=>'Sarah',
//            'email'=>'sarah@gmail.com',
//            'password'=> Hash::make('IloveDaniel')
//    ]);
//        return redirect('/');

        //**********Reading*******//
//        $users = DB::table('users')->get();
//        dd($users);


        //**************Update******//
//
//        DB::table('users')->where('id', 11)->update([
//           'created_at'=> Carbon::now(),
//            'updated_at' =>Carbon::now()
//        ]);


//        redirect('/');


        //**DELEte***///

//        DB::table('users')->where('id', 13)->delete();

        $time = Carbon::now();
        $users = Storage::json('public/users.json');
        foreach ($users as $user) {
            DB::table('users')->insert([
               'name'=>$user['name'],
                'email'=>$user['email'],
                'password'=>Hash::make($user['email']),
                'created_at'=>$time->addHours(3),
                'updated_at'=>$time->addHours(3)

            ]);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

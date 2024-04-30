<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index(Request $request)
    {
        $session = $request->session()->get('name');
//        return view('welcome');
        return session()->all();
    }

    public function set(Request $request)
    {
        $query = $request->query();
        session($query);

        session(['cars'=>['BMW', 'Mercedes', 'Range Over', 'Lamborghini']]);

//        session()->push('cars', 'Toyota');

//        $cars = ['BMW', 'Mercedes', 'Range Over', 'Lamborghini'];
//        session(['cars'=>collect($cars)]);
        return "sessions are set";
    }

    public function delete()
    {
        session()->forget('cars');
session()->put('cars', array_diff(session()->get('cars'), ['over']));

//        $car = session("cars")->search('over');
//        session()->forget($car);

        return 'forgotten';
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function test(Request $request)
    {

        $body_mass = substr($request->kg / (($request->cm / 100) * ($request->cm / 100)), 0, 5);
        $weight = null;
        $perfect_weight = 22 * ($request->cm / 100) * ($request->cm / 100);
        $suggested_calories = null;
        $page = null;

        if($request->defaultExampleRadios == 'male') {
            $suggested_calories = ($request->kg*10) + (($request->cm)*6.25) - ($request->age*5) + 5;
        }else{
            $suggested_calories = ($request->kg*10) + (($request->cm)*6.25) - ($request->age*5) - 161;
        }

        if($body_mass <=  18.5){
            $weight = 'Underweight';
            $page = 'gain_weight';
        }else if ($body_mass <=  24.9) {
            $weight = 'Normal';
            $page = 'sports';
        }else if ($body_mass <=  29.9) {
            $weight = 'Overweight';
            $page = 'diet';
        }else if ($body_mass <=  34.9) {
            $weight = 'Obesity first degree';
            $page = 'diet';
        }else if ($body_mass <=  39.9) {
            $weight = 'Obesity second degree';
            $page = 'diet';
        }else{
            $weight = 'Excessive obesity';
            $page = 'diet';
        }

        return view('result')->with([
            'body_mass' => $body_mass,
            'weight' => $weight,
            'perfect_weight' => $perfect_weight,
            'suggested_calories' => ($suggested_calories * 1.5),
            'page' => $page,
        ]);
    }

    public function index()
    {
        return view('home');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        return view('contact');
    }

    public function food()
    {
        $items = Food::all();
        return view('food')->with([
            'items' => $items,
        ]);
    }

    public function sports()
    {
        return view('sports');
    }

    public function Healthy_Guide()
    {
        return view('Healthy_Guide');
    }

    public function keep_weight()
    {
        return view('keep_weight');
    }

    public function Healthy_Food()
    {
        return view('Healthy_Food');
    }

    public function restaurants()
    {
        return view('restaurants');
    }

    public function events()
    {
        return view('events');
    }

    public function diet()
    {
        return view('diet');
    }

    // public function Diet_Plans()
    // {
    //     return view('Diet_Plans');
    // }

    public function not_found()
    {
        return view('404');
    }

    public function gain_weight()
    {
        return view('gain_weight');
    }

    public function bmi()
    {
        return view('bmi');
    }

    public function search(Request $request)
    {
        $items = Food::all();

        $food = Food::where('id', '=', $request->food)->get();

        $result = ($food[0]->calories/100) * $request->grams;

        return view('food')->with([
            'calories' => $food[0]->calories ?? null,
            'items' => $items ?? null,
            'result' => $result ?? null,
            'grams' => $request->grams ?? null,
            'selected' => $food[0]->name ?? 'Begal',
            'selected_id' => $food[0]->id ?? null,
        ]);
    }
    public function messages(Request $request)
    {
        $message = Message::create($request->all());

        Session::flash('message', 'The message has been sent successfully');
        Session::flash('alert-class', 'alert alert-success');

        return redirect()->route('contact');
    }

}

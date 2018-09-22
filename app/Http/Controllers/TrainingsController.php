<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Training;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class TrainingsController extends Controller
{
    public $if = false;
    use AuthenticatesUsers;

    public function index()
    {
        if (Auth::check()) {
            $name = Auth::user()->name;
            return view("trainings.index", compact("name"));
        }

        return view("trainings.index");
    }

    public function show()
    {
        $trainings = Training::all();
        if (Auth::check()) {
            $name = Auth::user()->name;
            return view("trainings.show", compact("trainings", "name"));
        }

        return view("trainings.show", compact("trainings"));
    }

    public function training($id)
    {
        $training = DB::table("trainings")->find($id);
        $if = false;
        if (Auth::check()) {
            $name = Auth::user()->name;
            $if = false;
            return view("trainings.training", compact("training", "name", "if"));
        }

        return view("trainings.training", compact("training", "if"));
    }


    public function store($id)
    {
        $training = DB::table("trainings")->find($id);
        $if = true;
        if (Auth::check()) {
            $name = Auth::user()->name;
            $user_id = Auth::user()->id;
            //kui dd($name), siis saan õige tulemuse aga kui tabelisse
            //user_id lisan, siis tabelisse ilmub "0".
            if (isset($name)) {
                DB::table("registrations")
                    ->insert(["user_id" => $user_id,
                        "training_id" => $id]);

                return view("trainings.training", compact("training", "name", "if"));
            }
            return view("trainings.training", compact("training"));


        }

    }
}

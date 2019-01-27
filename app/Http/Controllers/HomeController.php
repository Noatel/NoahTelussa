<?php

namespace App\Http\Controllers;

use App\Age;
use App\Http\Requests;
use App\Project;
use Carbon\Carbon;

class HomeController extends Controller {
    public function index () {

        $projects = Project::all();
        $projects = $projects->shuffle();

        $projects->all();
        $birth= Carbon::createFromDate(1997, 1, 17, 'Europe/Amsterdam');
        $now = Carbon::now();

        $age = $birth->diffInYears($now);



        return view('indexOld', compact('projects','age'));
    }

    public function getPage ($page) {
        switch($page)
        {

            case "over":
                $birth= Carbon::createFromDate(1997, 1, 17, 'Europe/Amsterdam');
                $now = Carbon::now();

                $age = $birth->diffInYears($now);

                $view = view("over",compact('age'))->render();

                return response()->json(['html'=>$view]);
                break;
            case "projects":
                $projects = Project::all();
                $projects = $projects->shuffle();

                $projects->all();

                $view = view("projects",compact('projects'))->render();

                return response()->json(['html'=>$view]);

                break;
        }

    }
    public function old () {

        $projects = Project::all();
        $projects = $projects->shuffle();

        $projects->all();

        $birth= Carbon::createFromDate(1997, 1, 17, 'Europe/Amsterdam');
        $now = Carbon::now();

        $age = $birth->diffInYears($now);


        return view('indexOld', compact('projects','age'));
    }
    public function table () {



        return view('table');
    }
}

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



        return view('old.index', compact('projects','age'));
    }

    public function getPage ($page) {
        switch($page)
        {

            case "over":
                $birth= Carbon::createFromDate(1997, 1, 17, 'Europe/Amsterdam');
                $now = Carbon::now();

                $age = $birth->diffInYears($now);

                $view = view("old.over",compact('age'))->render();

                return response()->json(['html'=>$view]);
                break;
            case "projects":
                $projects = Project::all();
                $projects = $projects->shuffle();

                $projects->all();

                $view = view("old.projects",compact('projects'))->render();
                return response()->json(['html'=>$view]);

                break;
            case "socialMedia":




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


        return view('old.indexOld', compact('projects','age'));
    }
    public function table () {



        return view('old.table');
    }
}

<?php

namespace App\Http\Controllers;

use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Maatwebsite\Excel\Excel;

class IndexController extends Controller
{
    public function index () {

        $projects = Project::all();
        $projects = $projects->shuffle();

        $projects->all();
        $birth= Carbon::createFromDate(1997, 1, 17, 'Europe/Amsterdam');
        $now = Carbon::now();

        $age = $birth->diffInYears($now);

        return view('index',compact("projects","age"));
    }
    public function projects () {

        $projects = Project::all();

        $projects->all();


        return view('projects',compact("projects"));
    }


    public function nameChange(){

      
    }



}

<?php

namespace App\Http\Controllers;

use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

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
}

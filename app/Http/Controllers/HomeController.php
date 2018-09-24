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


return view('home', compact('projects','age'));
}
}

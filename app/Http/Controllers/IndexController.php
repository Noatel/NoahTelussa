<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index () {

        $projects = Project::all();
        $projects = $projects->shuffle();

        $projects->all();

        return view('index',compact("projects"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Project;
use App\Service;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(StoreProject $request)
    {

        $user = Auth::user();
        $project = $user->projects()->create($request->all());

        foreach ($request->services as $service)
        {
            $project->services()->attach($service);
        }
        return redirect('/projects');
    }

    public function show()
    {
        $user = Auth::user();
        $projects = Project::with('services')->where('user_id',$user->id)->get(); //to eager load so that minimum number of quries run
        $services = array();
        foreach ($projects as $project)
        {
            $service = $project->services()->get();
            array_push($services,$service);

        }
        return view('show' , compact('projects','services'));

    }
}

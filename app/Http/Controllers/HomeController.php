<?php

namespace App\Http\Controllers;
use App\Client;
use App\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\Project as ProjectResource;
use App\Http\Resources\client as ClientResource;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public $dapartments =['Solution','Marketing','Creative'];

    public function __construct()
    {
//        $this->middleware('auth');
    }


    /* show All Project */
    public function index()
    {
        $projects= Project::orderBy('id','desc')->paginate(3);

        return new ProjectCollection($projects);
//
//        $projects = Project::with('clients')->toArray();
//        return array_reverse($projects);
//        return view('admin.projects.index',['projects' => $projects]);
    }

    public function getAllProjects()
    {
//        $projects= Project::orderBy('id','desc')->paginate(3);
        $projects= Project::orderBy('id','desc')->get();
        return  ProjectResource::collection($projects);
    }

    public function getAllClients()
    {
        $clients = Client::all();
        return  ClientResource::collection($clients);
    }

    //show a single Project
    public function show(Project $project)
    {
        return new ProjectResource($project);
    }






}

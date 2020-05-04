<?php

namespace App\Http\Controllers\Admin;
use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\Project as ProjectResource;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $dapartments =[
        'Digital Solutions Department',
        'Creative Department',
        'Digital Marketing Department',
      ];

    public function __construct()
    {
        $this->middleware('auth');
    }


    /* show All Project */

    public function index()
    {
        $projects = Project::with('clients')->get();
        return  ProjectResource::collection($projects);
//        return view('admin.projects.index',['projects' => $projects]);
    }

    //show a single Project
    public function show(Project $project)
    {
//        return $project->getMedia('project');

        return view('admin.projects.show',
            [
                'project' => $project
            ]
        );
    }

    // show a view to create a new project
    public function create()
    {
        $clients=Client::all();
        return view('admin.projects.create',['clients'=>$clients,'departments'=>$this->dapartments]);
    }


    // save the new project
    public function store(ProjectRequest $request){
        $project   =  new Project();
        $project->name=  $request->name;
        $project->description=  $request->description;
        $project->department=  $request->department;
        $project->industry=  $request->industry;
        $project->work_we_delivered=  $request->work_we_delivered;
        $project->date_start=  $request->dateStart;
        $project->date_end=  $request->dateEnd;
        $project->save();
        if($request->has('client')){
            $project->clients()->attach($request->client);
        }
            $project->addMedia($request->thumbnail)->toMediaCollection('thumbnail_project');

//
//        foreach ($request->project_photos as $photo) {
//            $project->addMedia($photo)->toMediaCollection('project_photos');
//        }

        return response()->json('The project was added successfully');
//        return redirect(route('projects.index'));
    }


    // show a view to edit project
    public function edit(Project $project){
        $clients=Client::all();
        $thumbnails_projects=$project->getMedia('thumbnails_projects');
        $project_photos=$project->getMedia('project_photos');

        return view('admin.projects.edit',[
            'project'=> $project,
            'thumbnails_projects'=>$thumbnails_projects,
            'project_photos'=>$project_photos,
            'clients'=>  $clients,
            'departments'=>$this->dapartments]);
    }



    // persist the edited project
    public function update(Project $project){

        // validation
//        $this->validateProjectInput();
            $project->update([
                'name'  =>\request('name'),
                'description'  =>\request('description'),
                'department'  =>\request('department'),
                'industry'  =>\request('industry'),
                'work_we_delivered'  =>\request('work_we_delivered'),
                'date_start'  =>\request('dateStart'),
                'date_end'  =>\request('dateEnd')
            ]);

        if(\request()->has('thumbnails')){
            foreach (\request()->thumbnails as $photo) {
                $project->addMedia($photo)->toMediaCollection('projects');
            }
        }

        if(\request()->has('clients')) {
            $project->clients()->detach(\request()->clients);
            $project->clients()->attach(\request()->clients);
        }
        return new ProjectResource($project);

        return response()->json('successfully updated');
        return redirect(route('projects.index'));

    }


    // Delete Project
    public function delete(Project $project){
        $project->delete();
        return response()->json('successfully deleted');
        return redirect(route('projects.index'));

    }


//    public function validateProjectInput(){
//        return \request()->validate([
//
//            'name'=>'required',
//            'description' =>'required',
//            'thumbnails'=>'required',
//            'dateStart'=>'required',
//            'dateEnd'=>'required',
//            'clients'=>'required',
//            'department'=>'required'
//
//        ]);
//
//    }
}

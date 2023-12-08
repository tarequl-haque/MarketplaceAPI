<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
use Throwable;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
      
            $project = Project::all();

            return response()->json(['project', $project]);
    }

   
    public function store(Request $request){

        try {

            $project = new Project();

            $project->project_id = $request->project_id;
            $project->owner_id = $request->owner_id;
            $project->title = $request->title;
            $project->published_date = $request->published_date;
            $project->deadline = $request->deadline;
            $project->short_explanation = $request->short_explanation;
            $project->state = $request->state;
            $project->bid = $request->bid;
            $project->techset_id = $request->techset_id ;
            $project->files_array_id = $request->files_array_id;

            $project->save();

            return response()->json(['project', compact('project')]);

        } catch (Throwable $e) {
                
            return response()->json(["400"=>"Bad request, data no tiene formato especificado."]);
        } 
    }


    public function show($project_id)
    {
        $project = Project::first('project_id');

        return response()->json(['project', $project]);
    }
  

    public function update(Request $request, $project_id){
        
        try{

            $project = Project::where('id', '=', $project_id)->first();
            $project->owner_id = $request->owner_id;
            $project->title = $request->title;
            $project->published_date = $request->published_date;
            $project->deadline = $request->deadline;
            $project->short_explanation = $request->short_explanation;
            $project->state = $request->state;
            $project->bid = $request->bid;
            $project->techset_id = $request->techset_id ;
            $project->files_array_id = $request->files_array_id;

            return response()->json(['project', compact('project')]);

        } catch (Throwable $e) {
    
            return response()->json(["400"=>"Bad request,data no tienen el formato especificado."]);
        }
    }

    public function destroy($project_id){
        
        try{
         
            Project::where('$project_id', '=',$project_id)->delete();

            return response()->json("Project ".$project_id." deleted.",200);

        } catch (Throwable $e) {
            
            return response()->json(["404"=>"Resource not found, estos datos no tienen el formato especificado."]);
        }
        
    }
}

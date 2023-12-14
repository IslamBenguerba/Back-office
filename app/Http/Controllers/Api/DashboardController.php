<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_technology;
use App\Models\Technology;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        // $project = Project::all();
        $query = Project::with(['category','technologies']);
        $project = $query->paginate();
        return response()->json([$project]);
    }

    public function show($id)
    {
        // $project = Project::findOrFail($id);
        $project = Project::with(['category','technologies'])->find($id);
        // $technologia = Project_technology::where('project_id',$project->id)->get();
        // $project::with(['category','technologies']);
        // $project::with(['category']);
        // $data['project'] = $project;
        // $data['technologies'] = $project->technologies();
       

        // $comic = Comic::findOrFail($id);
        return response()->json(['results' => $project]);
    }
}

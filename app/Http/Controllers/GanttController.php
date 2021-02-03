<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Link;

use Illuminate\Http\Request;

class GanttController extends Controller
{
    //
    public function get(){
        $tasks = Task::orderBy('sortorder')->get();
        $links = Link::all();
 
        return response()->json([
            "data" => $tasks,
            "links" => $links
        ]);
    }
}

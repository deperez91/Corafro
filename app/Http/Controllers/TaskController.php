<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use app\Http\Request\TaskRequest;

class TaskController extends Controller
{
    public function store(TaskRequest $request){
        $request->user()->tasks()->create([
            'name'=>$request->name,
        ]);
        
    }
}

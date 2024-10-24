<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    
    function index(){
        return Task::all();
        //return Task::limit(2)->get();
        // return Task::where('status', 'completed')->get();
        // return Task::whereStatus('completed')->count();
       // return Task::find(8);
       // return Task::findOrFail(80);
      // return Task::orderBy('id', 'desc')->get();
         
    }
    function doSomething(){
        //  Task::create([
        //     'title'=>"Thsi is a sample task",
        //     'description'=>"Thsi is a sample task",
        //     'due_date'=>'2021-01-01'
        //  ]);
        // 
        Task::insert([

            [
                'title'=>fake()->sentence(6),
                'description'=>fake()->sentence(20),
                'due_date'=>now()->addDays(rand(1,10))
            ],
            [
                'title'=>fake()->sentence(6),
                'description'=>fake()->sentence(20),
                'due_date'=>now()->addDays(rand(1,10))
            ]
        
        
            ]);

        //Task::find(5)->update(['status'=>'completed']);
         return "Done";
    }
    // function show(Request $request, $id){
    //     return Task::find($id); 
    // }
    function show(Request $request, Task $task){  
        return $task; 
    }
} 
<?php

namespace Database\Seeders;

use App\Models\Task;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        Task::truncate();
        for($i=0;$i<10;$i++){ 
        Task::create([
            'title'=>fake()->sentence(6),
            'description'=>fake()->sentence(20),
            'due_date'=>now()->addDays(rand(1,10))
        ]);
        }
    }
} 

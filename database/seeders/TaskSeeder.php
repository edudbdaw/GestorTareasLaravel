<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task1 = new Task();
        $task1 -> title = 'Task1';
        $task1->description = 'Description';
        $task1->user_id = 1;
        $task1->save();
    }
}

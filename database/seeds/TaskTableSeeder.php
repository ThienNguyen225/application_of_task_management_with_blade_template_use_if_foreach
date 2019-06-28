<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->name = 'Nguyễn Thiên';
        $task->age = 26;
        $task->phone = 0353377104;
        $task->address = 'Quảng Trị';
        $task->email = 'boynguyen.225@gmail.com';
        $task->save();

        $task = new Task();
        $task->name = 'Vũ Văn Mạnh';
        $task->age = 20;
        $task->phone = 03134314314;
        $task->address = 'Hải Dương';
        $task->email = 'boynguyen.225@gmail.com';
        $task->save();


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => 'Test Task',
            'content' => 'タスクをテスト入力',
            'genre_id' => null,
            'owner_id' => 1,
            'rrule' => null,
            'start_at' => '2025-09-01 09:00:00',
            'end_at' => '2025-09-07 09:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

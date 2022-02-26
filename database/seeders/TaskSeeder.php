<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Task::create([
            'log' => "abc123",
            'employee_name' => 'Abu',
            'type_of_report' => 'REPAIR AT IBS',
            'branch' => 'SELANGOR',
            'issue' => 'Printer Rosak',
            'status' => false
        ]);
    }
}

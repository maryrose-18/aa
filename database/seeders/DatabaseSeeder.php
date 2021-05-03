<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           trn_teacherSeeder::class,
           trn_evaluationSeeder::class,
           trn_time_tableSeeder::class,
           trn_teacher_roleSeeder::class 

        ]);
    }
}

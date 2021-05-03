<?php

namespace Database\Seeders;

use App\Models\TrnTeacherRole;
use Illuminate\Database\Seeder;

class trn_teacher_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = 
        [
            [
                'trn_teacher_id'    =>      110250,
                'role'              =>      '1',
                'created_at'        =>      '2020-01-17 08:29:55'
            ],
            [
                'trn_teacher_id'    =>      110250,
                'role'              =>      '2',
                'created_at'        =>      '2020-01-17 09:02:01'
            ],
            [
                'trn_teacher_id'    =>      110250,
                'role'              =>      '3',
                'created_at'        =>      '2020-01-17 09:02:09'
            ],
            [
                'trn_teacher_id'    =>      110011,
                'role'              =>      '1',
                'created_at'        =>      '2020-01-17 09:02:27'
            ],
            [
                'trn_teacher_id'    =>      110030,
                'role'              =>      '1',
                'created_at'        =>      '2020-01-17 09:02:37'
            ],
            [
                'trn_teacher_id'    =>      110030,
                'role'              =>      '2',
                'created_at'        =>      '2020-01-17 09:02:45'
            ],
            [
                'trn_teacher_id'    =>      110023,
                'role'              =>      '1',
                'created_at'        =>      '2020-01-17 09:02:57'
            ],
            [
                'trn_teacher_id'    =>      110033,
                'role'              =>      '3',
                'created_at'        =>      '2020-01-17 09:03:11'
            ]
        ];

        $count = count($data);
        for($i=0; $i<$count; $i++)
        {
            TrnTeacherRole::insert([
                'trn_teacher_id'            => $data[$i]['trn_teacher_id'],
                'role'                      => $data[$i]['role'],
                'created_at'                => $data[$i]['created_at'],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\TrnEvaluation;
use Illuminate\Database\Seeder;

class trn_evaluationSeeder extends Seeder
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
                'teacher_id'        =>      110250,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-11 17:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'               
            ],
            [
                'teacher_id'        =>      110250,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-11 16:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'             
            ],
            [
                'teacher_id'        =>      110250,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-10 16:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110011,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-10 17:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110011,
                'result'            =>      '2',
                'lesson_datetime'   =>      '2020-01-10 21:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110011,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-10 23:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110030,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-10 21:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110030,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-10 20:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110030,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-10 19:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110023,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-07 17:00:00',
                'created_at'        =>      '2020-01-17 09:00:34' 
            ],
            [
                'teacher_id'        =>      110023,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-06 17:00:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110023,
                'result'            =>      '2',
                'lesson_datetime'   =>      '2020-01-08 16:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110033,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-07 15:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110033,
                'result'            =>      '2',
                'lesson_datetime'   =>      '2020-01-06 16:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ],
            [
                'teacher_id'        =>      110033,
                'result'            =>      '1',
                'lesson_datetime'   =>      '2020-01-07 10:30:00',
                'created_at'        =>      '2020-01-17 09:00:34'
            ]
        ];

        $count = count($data);
        for($i=0; $i<$count; $i++)
        {
            TrnEvaluation::insert([
                'trn_teacher_id'            => $data[$i]['teacher_id'],
                'result'                    => $data[$i]['result'],
                'lesson_datetime'           => $data[$i]['lesson_datetime'],
                'created_at'                => $data[$i]['created_at'],
            ]);
        }
    }
}

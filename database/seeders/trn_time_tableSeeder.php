<?php

namespace Database\Seeders;

use App\Models\TrnTimeTable;
use Illuminate\Database\Seeder;

class trn_time_tableSeeder extends Seeder
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
                'lesson_datetime'   =>      '2020-01-11 17:00:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110250,
                'lesson_datetime'   =>      '2020-01-11 16:30:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110250,
                'lesson_datetime'   =>      '2020-01-10 16:00:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110011,
                'lesson_datetime'   =>      '2020-01-10 17:00:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110011,
                'lesson_datetime'   =>      '2020-01-10 21:00:00',
                'status'            =>      '2'
            ],
            [
                'trn_teacher_id'    =>      110011,
                'lesson_datetime'   =>      '2020-01-10 23:00:00',
                'status'            =>      '3'
            ],
            [
                'trn_teacher_id'    =>      110030,
                'lesson_datetime'   =>      '2020-01-10 21:30:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110030,
                'lesson_datetime'   =>      '2020-01-10 20:00:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110030,
                'lesson_datetime'   =>      '2020-01-10 19:30:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110023,
                'lesson_datetime'   =>      '2020-01-07 17:00:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110023,
                'lesson_datetime'   =>      '2020-01-06 17:00:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110023,
                'lesson_datetime'   =>      '2020-01-08 16:30:00',
                'status'            =>      '2'
            ],
            [
                'trn_teacher_id'    =>      110033,
                'lesson_datetime'   =>      '2020-01-07 15:30:00',
                'status'            =>      '1'
            ],
            [
                'trn_teacher_id'    =>      110033,
                'lesson_datetime'   =>      '2020-01-06 16:30:00',
                'status'            =>      '2'
            ],
            [
                'trn_teacher_id'    =>      110033,
                'lesson_datetime'   =>      '2020-01-07 10:30:00',
                'status'            =>      '1'
            ]
        ];


        $count = count($data);
        for($i=0; $i<$count; $i++)
        {
            TrnTimeTable::insert([
                'trn_teacher_id'            => $data[$i]['trn_teacher_id'],
                'lesson_datetime'           => $data[$i]['lesson_datetime'],
                'status'                    => $data[$i]['status'],
            ]);
        }
    }
}

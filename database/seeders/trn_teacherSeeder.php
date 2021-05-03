<?php

namespace Database\Seeders;

use App\Models\TrnTeacher;
use Illuminate\Database\Seeder;

class trn_teacherSeeder extends Seeder
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
                'id'            =>      110250,
                'nickname'      =>      'John D',
                'status'        =>      '1',
                'created_at'    =>      '2020-01-16 19:02:18'
            ],
            [
                'id'            =>      110023,
                'nickname'      =>      'Mike',
                'status'        =>      '0',
                'created_at'    =>      '2020-01-16 19:03:25'
            ],
            [
                'id'            =>      110011,
                'nickname'      =>      'Luca',
                'status'        =>      '1',
                'created_at'    =>      '2020-01-16 19:04:10'
            ],
            [
                'id'            =>      110033,
                'nickname'      =>      'Scottie',
                'status'        =>      '2',
                'created_at'    =>      '2020-01-17 08:10:23'
            ],
            [
                'id'            =>      110030,
                'nickname'      =>      'Steph C',
                'status'        =>      '1',
                'created_at'    =>      '2020-01-17 08:12:24'
            ]
        ];

        $count = count($data);
        for($i=0; $i<$count; $i++)
        {
            TrnTeacher::insert([
                'id'               => $data[$i]['id'],
                'nickname'         => $data[$i]['nickname'],
                'status'           => $data[$i]['status'],
                'created_at'       => $data[$i]['created_at']
            ]);
        }
        
    }
}



// SELECT concat('T00000',a.id),a.nickname,GROUP_CONCAT(b.role),
// CASE 
// 	WHEN a.status = 0 THEN 'Discontinued'
// 	WHEN a.status = 1 THEN 'Active'
//     ELSE 'Deactivated'
// END as Status,
// CASE 
// 	WHEN b.role = 1 THEN 'Trainer'
//     WHEN b.role	= 2 THEN 'Assessor'
//     ELSE 'Staff'
// END as Roles
// FROM `trn_teachers` a
// LEFT JOIN `trn_teacher_roles` b
// ON a.id = b.trn_teacher_id  
// ORDER BY `a`.`nickname` ASC
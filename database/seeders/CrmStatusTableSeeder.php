<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2022-06-03 06:23:13',
                'updated_at' => '2022-06-03 06:23:13',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2022-06-03 06:23:13',
                'updated_at' => '2022-06-03 06:23:13',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2022-06-03 06:23:13',
                'updated_at' => '2022-06-03 06:23:13',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}

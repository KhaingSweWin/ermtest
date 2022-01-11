<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Passport;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Passport::create(
            [
                'code'=>'OM0988876',
                'city'=>'Ygn',
                'start_date'=>Carbon::parse('2021-01-01'),
                'expired_date'=>Carbon::parse('2025-01-01'),
                'student_id'=>1
            ]
            );
            Passport::create(
                [
                    'code'=>'OM0988876',
                    'city'=>'Ygn',
                    'start_date'=>Carbon::parse('2021-01-01'),
                    'expired_date'=>Carbon::parse('2025-01-01'),
                    'student_id'=>2
                ]
                );
                Passport::create(
                    [
                        'code'=>'OM0988876',
                        'city'=>'Ygn',
                        'start_date'=>Carbon::parse('2021-01-01'),
                        'expired_date'=>Carbon::parse('2025-01-01'),
                        'student_id'=>3
                    ]
                    );
    }
}

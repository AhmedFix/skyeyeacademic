<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $services = [
            ['Courses', 'service_1.png'],
            ['Consultants', 'service_2.png'],
            ['Certificate', 'service_3.png'],
        ];

        foreach ($services as $service) {

            Service::create([
                'name' => $service[0],
                'image' => $service[1], 
            ]);

        }//end of foreach

    }//end of run

}//end of seeder

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

use App\Models\contact;



class contactsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=1;$i<=100;$i++)
        {
            $data=new contact;
            $data->name=$faker->name;
            $data->email=$faker->email;
            $data->message=$faker->text;
            $data->save();
            
        }
    }
}

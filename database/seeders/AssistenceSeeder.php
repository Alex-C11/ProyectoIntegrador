<?php

namespace Database\Seeders;

use App\Models\Assistence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assistence=Assistence::factory(5)->create();
    }
}

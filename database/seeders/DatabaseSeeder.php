<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(PeopleSeeder::class);
        $this->call(FamilySeeder::class);
        $this->call(StandSeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(AssociateSeeder::class);
        $this->call(AssociationSeeder::class);
        $this->call(DebitSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(AssistenceSeeder::class);




        $this->call(PaymentSeeder::class);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PetSeeder::class);
        $this->call(MedicalHistorySeeder::class);
        $this->call(VetsCitySeeder::class);
        $this->call(VetsSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}

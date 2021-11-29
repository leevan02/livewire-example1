<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TeacherSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);

    }
}

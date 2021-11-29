<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),

            'email' => $this->faker->unique()->safeEmail(),
            'dob' => $this->faker->date(),
            'class_id' => 0,
            'subject_choice_id' => 0,
            'pnumber_id' => 0,

            'class_id' => 0,


            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ];
    }
}

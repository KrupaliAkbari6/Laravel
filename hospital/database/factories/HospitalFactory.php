<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->string('Name');
        // $table->string('Moblileno');
        // $table->longText('Disease');
        // $table->longText('Medicines');
        // $table->string('slug');


        $name=fake()->name();
        $slug=$name." - ".rand();
        return [
            'Name'=>$name,
            'Moblileno'=>fake()->phoneNumber,
            'Disease'=>fake()->sentences(3,true),
            'Medicines'=>fake()->sentences(5,true),
            'slug'=>str::slug($slug)
        ];
    }
}



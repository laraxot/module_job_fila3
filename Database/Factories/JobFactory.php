<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Support\Str;
use Modules\Job\Models\Job;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model>
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
       

        return [
             //30     Access to an undefined property Faker\Generator::$randomNumber. 
            // 'id' => $this->faker->randomNumber,
            'queue' => $this->faker->word,
            'payload' => $this->faker->text,
            'attempts' => $this->faker->boolean,
            //'reserved_at' => $this->faker->randomNumber,
            //'available_at' => $this->faker->randomNumber,
            //'created_at' => $this->faker->randomNumber
        ];
    }
}
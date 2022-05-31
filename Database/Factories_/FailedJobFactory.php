<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Support\Str;
use Modules\Job\Models\FailedJob;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class FailedJobFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Model> 
     */
    protected $model = FailedJob::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
       

        return [
            // 29     Access to an undefined property Faker\Generator::$randomNumber.         
            //'id' => $this->faker->randomNumber,
            'uuid' => $this->faker->uuid,
            'connection' => $this->faker->text,
            'queue' => $this->faker->text,
            'payload' => $this->faker->text,
            'exception' => $this->faker->text,
            'failed_at' => $this->faker->dateTime
        ];
    }
}
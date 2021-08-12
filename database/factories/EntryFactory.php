<?php

namespace Database\Factories;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device' => $this->faker->word,
            'title' => $this->faker->words(5, true),
            'commands' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'notes' => $this->faker->sentence(),
            'tags' => $this->faker->words(3, true),
        ];
    }
}
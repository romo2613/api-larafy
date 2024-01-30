<?php

namespace Database\Factories\Album;

use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => fake()->sentence(6, true),
            'public'        => mt_rand(0,1),
            'total_length'  => fake()->dateTimeBetween(
                new DateTime('01:30'),
                new DateTime('16:00')
            )->format('H:i'),
            'user_id'       => mt_rand(1, User::count()),
            'cover_path'    => fake()->image('public/storage/images'),
            'type'          => fake()->randomElement([
                'playlist',
                'album',
                'single',
                'EP'
            ])
        ];
    }
}

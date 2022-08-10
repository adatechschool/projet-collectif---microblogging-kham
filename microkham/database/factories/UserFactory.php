<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'biography'=> $this->faker->text(50),
            'profil_url' => $this->faker->randomElement([
                                                    'https://stickershop.line-scdn.net/sticonshop/v1/sticon/622c3c1a4b44607037713df4/iPhone/004.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/509009738/android/sticker.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/49468945/android/sticker.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/509009718/android/sticker.png',
                                                    'https://stickershop.line-scdn.net/sticonshop/v1/sticon/622c3c1a4b44607037713df4/iPhone/030.png',
                                                    'https://stickershop.line-scdn.net/sticonshop/v1/sticon/622c3c1a4b44607037713df4/iPhone/017.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/509009732/android/sticker.png',
                                                    'https://stickershop.line-scdn.net/sticonshop/v1/sticon/6291dbbd1ae368611a46e37f/iPhone/004.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/489049907/android/sticker.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/414071418/iPhone/sticker@2x.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/426171893/android/sticker.png',
                                                    'https://stickershop.line-scdn.net/stickershop/v1/sticker/414071428/iPhone/sticker@2x.png'
                                                  ]),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

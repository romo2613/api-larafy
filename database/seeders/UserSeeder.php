<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use App\Helpers\Helper;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name'          => 'Javier',
            'surname'       => 'Romero Jódar',
            'email'         => 'admin@larafy.com',
            'password'      => bcrypt('12345678'),
            'country_id'    => config('countries.spain'),
            'email_verified_at' => Carbon::now(),
            'remember_token' => Helper::randomCode(10),
        ]);

        $user->assignRole('super-admin');

        User::factory(50)->create();
    }
}

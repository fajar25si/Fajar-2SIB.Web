<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatePelangganUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pelanggan::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'birthday' => '1990-01-01',
            'gender' => 'Male',
            'email' => 'john.doe@example.com',
            'phone' => '123-456-7890',
        ]);
    }
}


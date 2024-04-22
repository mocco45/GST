<?php

namespace Database\Seeders;

use App\Models\staff;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'John@gmail.com',
            'title' => 'admin',
            'contact' => +255755241708,
            'password' => Hash::make('password')
        ]);

        $staffs = collect([
            [
                'name' => 'Renata S. Bitumbiko',
                'title' => 'Principal Librarian',
                'contact' => 0756726147,
            ],
            [
                'name' => 'Ernest N. Luhoko',
                'title' => 'Principal Librarian',
                'contact' => 0755650570,
            ],
            [
                'name' => 'Annabela C. Lwambugwe',
                'title' => 'Senior Librarian',
                'contact' => 0717254104,  
            ],
            [
                'name' => 'Nicodemus I. Lulu',
                'title' => 'Assistant Librarian',
                'contact' => '0786463296'
            ]
        ]);

        $staffs->each(function ($staff){
            staff::insert($staff);
        });
    }
}

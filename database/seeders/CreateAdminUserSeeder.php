<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //===============================================================

         // Creating Super Admin
         $superAdmin = User::create([
            'name' => 'UrinboyDev', 
            'email' => 'superadmin@urinboydev.uz',
            'password' => Hash::make('superadmin@1196')
        ]);
        $superAdmin->assignRole('Super Admin');


        // Creating Admin
        $admin = User::create([
            'name' => 'Admin', 
            'email' => 'admin@urinboydev.uz',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('Admin');

        // Creating Teacher
        $teacher = User::create([
            'name' => 'Teacher', 
            'email' => 'teacher@urinboydev.uz',
            'password' => Hash::make('teacher')
        ]);
        $teacher->assignRole('Teacher');

        // Creating Student
        $student = User::create([
            'name' => 'Student', 
            'email' => 'student@urinboydev.uz',
            'password' => Hash::make('student')
        ]);
        $student->assignRole('Student');

        // Creating User
        $user = User::create([
            'name' => 'User', 
            'email' => 'user@urinboydev.uz',
            'password' => Hash::make('user')
        ]);
        $user->assignRole('User');


    }
}

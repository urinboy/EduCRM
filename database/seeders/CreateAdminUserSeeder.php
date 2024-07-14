<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name' => 'UrinboyDev', 
            'email' => 'admin@urinboydev.uz',
            'password' => bcrypt('12344321')
        ]);
        
        $adminRole = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $adminRole->syncPermissions($permissions);
        $admin->assignRole([$adminRole->id]);

        // Teacher        
        $teacher = User::create([
            'name' => 'Teacher', 
            'email' => 'teacher@urinboydev.uz',
            'password' => bcrypt('teacher')
        ]);

        $teacherRole = Role::create(['name' => 'Teacher']);
        $teacher->assignRole([$teacherRole->id]);

        // Student
        $student = User::create([
            'name' => 'Student', 
            'email' => 'student@urinboydev.uz',
            'password' => bcrypt('student')
        ]);

        $studentRole = Role::create(['name' => 'Student']);
        $student->assignRole([$studentRole->id]);

        // User
        $user = User::create([
            'name' => 'Student', 
            'email' => 'user@urinboydev.uz',
            'password' => bcrypt('user')
        ]);

        $userRole = Role::create(['name' => 'User']);
        $user->assignRole([$studentRole->id]);

    }
}

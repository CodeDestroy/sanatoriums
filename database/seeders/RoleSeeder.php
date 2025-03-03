<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $developer = new Role();
        $developer->name = 'Developer';
        $developer->slug = 'developer';
        $developer->save();

        
        $admin = new Role();
        $admin->name = 'Admin';
        $admin->slug = 'admin';
        $admin->save();

        $manager = new Role();
        $manager->name = 'Manager';
        $manager->slug = 'manager';
        $manager->save();
        
        $user = new Role();
        $user->name = 'User';
        $user->slug = 'user';
        $user->save();
    }
}

<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
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
        $developer = Role::where('slug','developer')->first();
        $admin = Role::where('slug','admin')->first();
        $manager = Role::where('slug', 'manager')->first();
        $user = Role::where('slug', 'user')->first();
        $createTasks = Permission::where('slug','create-events')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();
        $viewEvents = Permission::where('slug','view-events')->first();
        $user1 = new User();
        $user1->name = 'Андрей';
        $user1->secondName = 'Новичихин';
        $user1->phone = '89518531985';
        $user1->email = 'andrei_novichihin@mail.ru';
        $user1->password = Hash::make('123');
        $user1->save();
        $user1->roles()->attach($developer);
        $user1->permissions()->attach($createTasks);
        $user1->permissions()->attach($manageUsers);
        $user1->permissions()->attach($viewEvents);
        
        $user2 = new User();
        $user2->name = 'Admin';
        $user2->secondName = 'Admin';
        $user2->email = 'admin@test.com';
        $user2->password = Hash::make('123');
        $user2->save();
        $user2->roles()->attach($admin);
        $user2->permissions()->attach($manageUsers);
        $user2->permissions()->attach($createTasks);
        $user2->permissions()->attach($viewEvents);

        $user3 = new User();
        $user3->name = 'Manager';
        $user3->secondName = 'Manager';
        $user3->email = 'manager@test.com';
        $user3->password = Hash::make('123');
        $user3->save();
        $user3->roles()->attach($manager);
        $user3->permissions()->attach($manageUsers);
        $user3->permissions()->attach($viewEvents);
        
        $user4 = new User();
        $user4->name = 'Test';
        $user4->secondName = 'Test';
        $user4->email = 'test@test.com';
        $user4->password = Hash::make('123');
        $user4->save();
        $user4->roles()->attach($user);
        $user4->permissions()->attach($viewEvents);
    }
}

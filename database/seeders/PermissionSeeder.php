<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manageUser = new Permission();
        $manageUser->name = 'Create events';
        $manageUser->slug = 'create-events';
        $manageUser->save();
        $createTasks = new Permission();
        $createTasks->name = 'Manage users';
        $createTasks->slug = 'manage-users';
        $createTasks->save();

        $viewEvents = new Permission();
        $viewEvents->name = 'View events';
        $viewEvents->slug = 'view-events';
        $viewEvents->save();
    }
}

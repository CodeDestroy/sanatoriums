<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\Dashboard;
class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Dashboard $dashboard): void
    {
        $permissions = ItemPermission::group('Вебинар')
            ->addPermission('vebinarModer', 'Модератор вебинара');

        $dashboard->registerPermissions($permissions);

        
        $permissions = ItemPermission::group('Контент')
            ->addPermission('content.viewEvents', 'Просматривать закрытые события')
            ->addPermission('platform.events', 'Просмотр всех событий в админке');
        $dashboard->registerPermissions($permissions);
        $permissions = ItemPermission::group('Пользователи')
            ->addPermission('users.actions.messages', 'Просматривать сообщения пользователей');

        $dashboard->registerPermissions($permissions);
        
    }
}

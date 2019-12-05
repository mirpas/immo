<?php

namespace App\Providers;

use App\Building;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            //$event->menu->add('Gebäude wechseln');
            $event->menu->add([
                'text' => Building::find(session('building_id')['building_id'])->short_name,
                'route' => 'buildings.select.index',
                'topnav' => true,
                'icon' => 'nav-icon fas fa-exchange-alt'
            ]);
        });
    }
}

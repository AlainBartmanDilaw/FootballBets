<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MyNavBar', function ($menu) {
            $menu->add('Home', ['route' => 'home', 'class' => 'nav-item']);
            // $menu->add('Home2',     ['route'  => 'home.page', 'class' => 'navbar navbar-home', 'id' => 'home']);
            $menu->add('About', [ 'route' => 'about', 'class' => 'nav-item']);
            $menu->add('Services', 'services');
            $menu->add('Contact', 'contact');
        });

        return $next($request);
    }
}

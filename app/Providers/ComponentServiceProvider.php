<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Log;

class ComponentServiceProvider extends ServiceProvider
{   
    private const VIEW_PATH = __DIR__.'/../View/Components/material';

    private const COMPONENTS = [
        // Register your components here
        'heading' => \App\View\Components\material\HeadingComponent::class,
        'button' => \App\View\Components\material\ButtonComponent::class,
        'back-button' => \App\View\Components\material\backButtonComponent::class,
        'category-card' => \App\View\Components\material\categoryCardComponent::class,
        'product-card' => \App\View\Components\material\productCard::class,
        'stat-card' => \App\View\Components\material\statCard::class,
    ];

    /**
     * Components configurations.
     */
    protected function configureComponents() {
        $this->callAfterResolving(BladeCompiler::class, function () {
            
            /*
                This is where you register your components 
                as part of the blade compiler
            */
            foreach (self::COMPONENTS as $alias => $class) {
                // checks if the class exists
                if(class_exists($class)) {
                    Blade::component($class, $alias);
                } else {
                    Log::error("Component not found: $class");
                }
               
            }
        });
    }
    
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {  
        // finds the path to the components and loads them
       $this->loadViewsFrom(realpath(self::VIEW_PATH), 'material');
        // loads the components after the path has been staged
       $this->configureComponents();
    }
}

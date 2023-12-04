<?php

namespace Kurban\PulseGpt;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Kurban\PulseGpt\Livewire\PulseGPT;
use Livewire\LivewireManager;

class PulseGPTServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pulsegpt');

        $this->requireConfig('openai');
        $this->requireConfig('pulsegpt');

        $this->callAfterResolving('livewire', function (LivewireManager $livewire, Application $app) {
            $livewire->component('pulse.gpt', PulseGPT::class);
        });

        $this->publishes([
            __DIR__.'/../config/pulsegpt.php' => config_path('pulsegpt'),
            __DIR__.'/../vendor/openai-php/laravel/config/openai.php' => config_path('openai'),
        ], 'pulsegpt-config');

    }

    private function requireConfig(string $config): void
    {
        if (file_exists(config_path($config))) {
            config([$config => require config_path($config)]);
        } else {
            $this->mergeConfigFrom(
                __DIR__.'/../config/'.$config.'.php', $config,
            );
        }
    }
}

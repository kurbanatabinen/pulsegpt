<?php

namespace Kurban\PulseGpt;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Kurban\PulseGpt\Livewire\PulseGPT;
use Livewire\LivewireManager;

class PulsePromptServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pulsegpt');

        $this->mergeConfigFrom(
            __DIR__.'/../config/openai.php', 'openai'
        );

        $this->callAfterResolving('livewire', function (LivewireManager $livewire, Application $app) {
            $livewire->component('pulse.prompt', PulseGPT::class);
        });
    }
}
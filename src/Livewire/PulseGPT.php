<?php

namespace Kurban\PulseGpt\Livewire;

use Illuminate\Support\Facades\Cache;
use Laravel\Pulse\Livewire\Card;
use Livewire\Attributes\Lazy;
use OpenAI\Laravel\Facades\OpenAI;

#[Lazy]
class PulseGPT extends Card
{
    public function render()
    {
        $message = '';

        try {
            $message = Cache::remember('openai_chat_result', config('openai.cache'), function () {
                $result = OpenAI::chat()->create([
                    'model' => config('openai.model'),
                    'messages' => [
                        [
                            'role' => config('openai.role'),
                            'content' => config('openai.prompt'),
                        ],
                    ],
                ]);

                return $result->choices[0]->message->content;
            });
        } catch (\Throwable $th) {
            Cache::forget('openai_chat_result');
            $message = $th->getMessage();
        }

        return view('pulsegpt::livewire.pulsegpt', [
            'message' => $message,
        ]);
    }
}

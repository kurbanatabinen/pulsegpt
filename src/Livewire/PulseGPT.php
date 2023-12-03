<?php

namespace Kurban\PulseGpt\Livewire;

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
            $result = OpenAI::chat()->create([
                'model' => config('openai.model'),
                'messages' => [
                    [
                        'role' => config('openai.role'),
                        'content' => config('openai.prompt'),
                    ],
                ],
            ]);
            $message = $result->choices[0]->message->content;
        } catch (\Throwable $th) {
            $message = $th->getMessage();
        }

        return view('pulsegpt::livewire.pulsegpt', [
            'message' => $message,
        ]);
    }
}

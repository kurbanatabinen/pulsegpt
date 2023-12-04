<?php

return [
    'model' => env('PULSEGPT_MODEL', 'gpt-3.5-turbo'),
    'role' => env('PULSEGPT_ROLE', 'user'),
    'prompt' => env('PULSEGPT_PROMPT', 'In one sentence, give me a higly motivational developer quote'),
    'cache' => env('PULSEGPT_CACHE', 300), // In milliseconds
];

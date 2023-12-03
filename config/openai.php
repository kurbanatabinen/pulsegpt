<?php

return [
    'api_key' => env('OPENAI_API_KEY'),
    'organization' => env('OPENAI_ORGANIZATION'),
    'request_timeout' => env('OPENAI_REQUEST_TIMEOUT', 30),
    'model' => env('PULSEGPT_MODEL', 'gpt-3.5-turbo'),
    'role' => env('PULSEGPT_ROLE', 'user'),
    'prompt' => env('PULSEGPT_PROMPT', 'Hello :)'),
];
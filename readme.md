
![Pulse GPT](./screenshot.png)

This package provide a simple **OpenaAI Pulse Card** .

------

⚡️ Install with [Composer](https://getcomposer.org):

```bash
composer require kurban/pulsegpt
```

⚡️ Add Provider your config/app.php [Laravel](https://laravel.com/):

```php
'providers' => [
    \Kurban\PulseGpt\PulseGPTServiceProvider::class,
],
```

✅ Set your **environnements** variables 
```bash
OPENAI_API_KEY=
OPENAI_ORGANIZATION=
OPENAI_REQUEST_TIMEOUT=30
PULSEGPT_MODEL=gpt-3.5-turbo
PULSEGPT_ROLE=user
PULSEGPT_PROMPT="In one sentence, give me a higly motivational developer quote"
PULSEGPT_CACHE=300 // In MS
```

🚀 Add card to your Pulse dashboard:
```html
<livewire:pulse.gpt cols="3" />
```

**PulseGPT**, combining Laravel Pulse & OpenAi Laravel awesome work.
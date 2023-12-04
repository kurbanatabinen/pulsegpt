
![Pulse GPT](./screenshot.png)

This package provide a simple **OpenaAI Pulse Card** .

------

⚡️ Install with [Composer](https://getcomposer.org):

```bash
composer require kurban/pulsegpt
```

💻 Add Provider to your config/app.php [Laravel](https://laravel.com/):

```php
'providers' => [
    \Kurban\PulseGpt\PulseGPTServiceProvider::class,
],
```

🔥 Publish PulseGPT and Nuno's OpenAi Config files [Openai-php](https://github.com/openai-php/laravel):
```php
php artisan vendor:publish --tag=pulsegpt-config
```

✅ Update your **environnements** variables 
```bash
OPENAI_API_KEY=
OPENAI_ORGANIZATION=

PULSEGPT_PROMPT="In one sentence, give me a higly motivational developer quote"
```

🚀 Add the card to your Pulse dashboard [Doc](https://laravel.com/docs/10.x/pulse#dashboard-customization):
```html
<livewire:pulse.gpt cols="3" />
```

**PulseGPT** is combining Laravel Pulse & OpenAI Laravel awesome work.
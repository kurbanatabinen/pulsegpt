<p align="center">
    <p align="center">
        <a href="https://github.com/nunomaduro/skeleton-php/actions"><img alt="GitHub Workflow Status (master)" src="https://github.com/nunomaduro/skeleton-php/actions/workflows/tests.yml/badge.svg"></a>
        <a href="https://packagist.org/packages/nunomaduro/skeleton-php"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/nunomaduro/skeleton-php"></a>
        <a href="https://packagist.org/packages/nunomaduro/skeleton-php"><img alt="Latest Version" src="https://img.shields.io/packagist/v/nunomaduro/skeleton-php"></a>
        <a href="https://packagist.org/packages/nunomaduro/skeleton-php"><img alt="License" src="https://img.shields.io/packagist/l/nunomaduro/skeleton-php"></a>
    </p>
</p>

------
This package provides a wonderful **OpenaAI Pulse Card** .

> **Requires [PHP 8.1+](https://php.net/releases/) | [Laravel 10+](https://php.net/releases/)**


⚡️ Install with [Composer](https://getcomposer.org):

```bash
composer require kurban/pulsegpt
```

✅ Set your **environnements** variables 
```bash
OPENAI_API_KEY=
OPENAI_ORGANIZATION=
OPENAI_REQUEST_TIMEOUT=30
PULSEGPT_MODEL=gpt-3.5-turbo
PULSEGPT_ROLE=user
PULSEGPT_PROMPT="Hello :)"
```


🚀 Add card to your Pulse dashboard:
```bash
<livewire:pulse.gpt cols="3" />
```

**PulseGPT** was created by **[Kurban Atabinen](https://twitter.com/kurbanatabinen)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
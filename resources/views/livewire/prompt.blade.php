<x-pulse::card :cols="$cols" :rows="$rows" :class="$class">
    <x-pulse::card-header
        name="Pulse GPT"
        title="AAA"
    >
        <x-slot:icon>
            <x-pulsegpt::icons.chatgpt />
        </x-slot:icon>
    </x-pulse::card-header>

    <x-pulse::scroll :expand="$expand" wire:poll.5s="">
       <div class="h-full flex flex-col items-center justify-center p-4">
            <blockquote class="italic text-md text-gray-400 dark:text-gray-600">
                {{ $message }}
            </blockquote>
        </div>
    </x-pulse::scroll>
</x-pulse::card>

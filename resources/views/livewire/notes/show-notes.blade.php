<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        $notes = Auth::user()->notes()->orderBy('send_date', 'asc')->get();
        return [
            'notes' => $notes,
        ];
    }
}; ?>

<div>
    <div class="space-y-2">
        @if ($notes->isEmpty())
            <div class="text-center text-gray-500">
                <p>No notes found.</p>
                <p>Lets creatre yout first note to sendnotes</p>
                <x-button class="mt-6" primary icon-right="plus" href="{{ route('notes.create') }}" wire:navigate>Create
                    note</x-button>
            </div>
        @else
            <div class="grid grid-cols-2 gap-4 mt-12">
                @foreach ($notes as $note)
                    <x-card wire:key='{{ $note->id }}'>
                        <div class="flex justify-between">
                            <a href="#"
                                class="text-xl font-bold hover:underline hover:text-blue-500">{{ $note->title }}</a>
                            <div class="text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($note->send_date)->format('d-M-Y') }}
                            </div>
                        </div>
                        <div class="flex items-end justify-between mt-4 space-x-1">
                            <p class="text-xs">Recipient: <span class="font-semibold">{{ $note->recipient }}</span></p>
                            <div>
                                <x-mini-button rounded flat icon="eye"></x-mini-button>
                                <x-mini-button rounded flat icon="trash"></x-mini-button>
                            </div>
                        </div>
                    </x-card>
                @endforeach
            </div>
        @endif
    </div>
</div>

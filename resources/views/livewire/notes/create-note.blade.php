<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        dd($this->noteTitle, $this->noteBody, $this->noteRecipient, $this->noteSendDate,);
    }
}; ?>

<div>
    <form wire:submit="submit" class="space-y-4">
        <x-input wire:model="noteTitle" label="Title" placeholder="Type in your note here"></x-input>
        <x-textarea wire:model="noteBody" label="Body"></x-textarea>
        <x-input icon="mail" wire:model="noteRecipient" label="Recipient" placeholder="name@example.com" type="email"></x-input>
        <x-input icon="calendar" wire:model="noteSendDate" type="date" label="Send Date"></x-input>
        <x-button wire:click="submit">Submit</x-button>
    </form>
</div>

@props([
    'error' => null
])

<div
    x-data="{ value: @entangle($attributes->wire('model')) }"
    x-on:change="value = $event.target.value"
    x-init="flatpickr($refs.input, {enableTime: false })"
>
    <input 
        {{ $attributes->whereDoesntStartWith('wire:model') }} 
        x-ref="input"
        x-bind:value="value" 
        type="text" 
        class="form-control" 
    />
</div>
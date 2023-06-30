@props(['name', 'title'])

<x-form.field>
    <x-form.label name="{{ $title }}" />

    <textarea class="border border-gray-200 p-2 w-full rounded" name="{{ $name }}" id="{{ $name }}" required>{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>

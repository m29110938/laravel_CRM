@props(['name', 'type' => 'text'])

<label class="block mb-2 uppercase font-bold text-gray-700" for="{{ $name }}">
    {{ ucwords($name) }}
</label>

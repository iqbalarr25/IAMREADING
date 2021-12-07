@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 text-2xl']) }}>
    {{ $value ?? $slot }}
</label>

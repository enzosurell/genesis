@props(['name'])
@error($name)
    <p class="text-red-500 italic text-sm">{{ $message }}</p>
@enderror
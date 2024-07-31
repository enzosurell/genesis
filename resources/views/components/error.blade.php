@props(['name'])
@error($name)
    <p class="text-danger small" style="font-style: italic">{{ $message }}</p>
@enderror
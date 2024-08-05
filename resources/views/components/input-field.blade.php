@props(['name'])
<input name="{{$name}}" {{ $attributes->merge(['class' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 font-bold tracking-wide shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:font-bold focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2']) }}>
<x-error name="{{$name}}"/>
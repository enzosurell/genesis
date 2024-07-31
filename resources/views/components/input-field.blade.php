@props(['name'])
<input name="{{$name}}" {{$attributes}} class="form-control mb-3">
<x-error name="{{$name}}" />
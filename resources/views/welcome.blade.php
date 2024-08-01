<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>
        Laravel
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
{{-- Data --}}
<div x-data="{name: 'John Doe'}" class="m-4 rounded bg-green-400 p-4">
    <span x-text="name"></span>
</div>
<div x-data="{message: 'Hello World'}" class="m-4 rounded bg-slate-200 p-4">
    <span x-text="message"></span>
</div>

{{-- Bind --}}
<div
    x-data="{selectedImageURL: 'https://images.unsplash.com/photo-1722359546494-8e3a00f88e95?q=80&w=1914&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    show: true, inputValue: 'Hello'}">
    <img :class="{'hidden': !show}" :src="selectedImageURL" alt="" class="h-96 w-96"/>
    <input type="text" :value="inputValue" :style="{color: 'red'}"/>
</div>
</body>
</html>

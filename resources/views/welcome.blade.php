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
<div x-data="{name: 'John Doe'}" class="m-4 rounded bg-green-400 p-4">
    <span x-text="name"></span>
</div>
<div x-data="{message: 'Hello World'}" class="m-4 rounded bg-slate-200 p-4">
    <span x-text="message"></span>
</div>
</body>
</html>

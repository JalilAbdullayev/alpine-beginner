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

{{-- Model --}}
<div x-data="{message: 'Hello World'}">
    <input type="text" x-model="message"/>
    <p x-text="message" class="m-2 bg-slate-200 p-2"></p>
</div>
<div class="mx-auto max-w-md space-y-2" x-data="{myColor: 'slate'}">
    <div class="h-24 w-24 rounded" :class="'bg-' + myColor + '-500'"></div>
    <select x-model="myColor">
        <option value="gray">
            Gray
        </option>
        <option value="green">
            Green
        </option>
        <option value="blue">
            Blue
        </option>
        <option value="red">
            Red
        </option>
    </select>
</div>

{{-- Show --}}
<div x-data="{show: true}">
    <button @click="show = !show">
        Show Toggle
    </button>
    <div x-show="show">
        This element will be shown or hidden based on the show value.
    </div>
</div>

{{-- if  --}}
<div x-data="{showIf: true}">
    <button @click="showIf = !showIf">
        If Toggle
    </button>
    <template x-if="showIf">
        <div>
            This element will be shown or hidden based on the show value.
        </div>
    </template>
</div>

{{-- On --}}
<section x-data>
    <button x-on:click="alert('Hello World')">
        Say Hi
    </button>
</section>
<section x-data="{isOpen: false}">
    <button @click="isOpen =! isOpen" id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="inline-flex items-center rounded-lg bg-blue-700 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Dropdown button
        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4"/>
        </svg>
    </button>
    {{--  Dropdown --}}
    <div id="dropdown" x-show="isOpen" @click.outside="isOpen = false" class="z-10 w-44 rounded-lg bg-white shadow
    divide-y divide-gray-100 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                    out</a>
            </li>
        </ul>
    </div>
</section>

{{-- Ref --}}
<section x-data>
    <button @click="$refs.text.remove()">
        Remove Text
    </button>
    <span x-ref="text">
        Hello
    </span>
</section>
<section x-data="{maxLength: 100}">
    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
    <textarea id="message" rows="4" x-ref="message" @keyup="maxLength = 100 - $refs.message.value.length"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your thoughts here..."></textarea>
    <span x-text="maxLength + ' characters remaining'"></span>
</section>
</body>
</html>

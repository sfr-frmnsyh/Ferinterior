<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl">Welcome to dashboard, click <a class="text-red-500" href="{{ route('/') }}">here</a> for back into home.</h1>
            <h1 class="text-2xl"></h1>
        </div>
    </div>
</x-app-layout>

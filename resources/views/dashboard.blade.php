<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in Software App!") }}
                    <br>
                    <a href="http://127.0.0.1:8001/dashboard"
                        class="inline-block px-6 py-3 font-medium text-sm leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-150 ease-in-out"
                        style="background-color: #2563eb; color: #ffffff; padding: 0.75rem 1.5rem; border-radius: 0.25rem;margin-top:10px;">
                        Website Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

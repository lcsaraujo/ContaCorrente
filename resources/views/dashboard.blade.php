<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Olá {{ Auth::user()->name }} Seja Bem-Vindo !</p>
                </div>

            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pb-72 dark:bg-gray-800 text-center text-2xl text-gray-900 dark:text-gray-100 ">
                    <p> Avisos  </p>
                <div class=" border-b border-gray-700">
                </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

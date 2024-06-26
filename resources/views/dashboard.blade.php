<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @auth
                @if (Auth::user()->user_type === 'user')
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }} {{Auth::user()->user_type}}
                </div>
                @elseif (Auth::user()->user_type === 'employer')
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }} {{Auth::user()->user_type }}
                </div>
                @else
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }} {{ Auth::user()->user_type}}
                </div>
                @endif
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>

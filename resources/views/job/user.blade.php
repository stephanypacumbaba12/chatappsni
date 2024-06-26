<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User hiring') }}
        </h2>
    </x-slot>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid #ddd; padding: 8px;">User ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">User Type</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
                <!-- Add other headers as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user->user_type == 'user')
                    <tr style="border: 1px solid #ddd;">
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->id }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->user_type }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->name }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $user->email }}</td>
                        <!-- Add other columns as needed -->
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</x-app-layout>

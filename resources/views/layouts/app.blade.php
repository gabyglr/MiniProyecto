<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    

    
    <!-- Styles -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-200 z-30">
            <div class="flex items-center h-16 px-6 border-b">
                <h1 class="text-xl font-semibold text-gray-800">
                    {{ config('app.name', 'Laravel') }}
                </h1>
            </div>
            
            <nav class="p-4 space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-sm rounded-lg {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                
                @if(auth()->user()->role === 'gerente')
                <a href="{{ route('users.index') }}" class="flex items-center px-4 py-2 text-sm rounded-lg {{ request()->routeIs('users.*') ? 'bg-primary text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    Users
                </a>
                @endif
                
                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-sm rounded-lg {{ request()->routeIs('profile.*') ? 'bg-primary text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Profile
                </a>
                
                <form method="POST" action="{{ route('logout') }}" class="mt-auto">
                    @csrf
                    <button type="submit" class="flex w-full items-center px-4 py-2 text-sm text-red-600 rounded-lg hover:bg-red-50">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="ml-64 p-8">
            @if (isset($header))
                <header class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">
                        {{ $header }}
                    </h2>
                </header>
            @endif

            @yield('content')

        </main>
    </div>
    
    @stack('modals')
    @yield('scripts')
</body>
</html>


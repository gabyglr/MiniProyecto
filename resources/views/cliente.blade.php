!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Cliente</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">
    <div class="container mx-auto px-4 py-6">
        <!-- Header -->
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard Cliente</h1>
        </header>

        <div class="space-y-6">
            <!-- Welcome Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-medium text-gray-900">
                    Bienvenido
                </h3>
                <p class="mt-1 text-sm text-gray-600">
                    Aquí puedes ver tus últimas actividades y gestionar tu cuenta.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Pedidos Totales -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-900">12</h4>
                            <p class="text-sm text-gray-600">Pedidos Totales</p>
                        </div>
                    </div>
                </div>

                <!-- Pedidos Completados -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-900">8</h4>
                            <p class="text-sm text-gray-600">Pedidos Completados</p>
                        </div>
                    </div>
                </div>

                <!-- Total Gastado -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-900">$520.50</h4>
                            <p class="text-sm text-gray-600">Total Gastado</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">
                        Pedidos Recientes
                    </h3>
                </div>
                <div class="divide-y divide-gray-200">
                    <!-- Sample Order Item -->
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">#ORD-2023-001</p>
                                <p class="text-sm text-gray-600">3 productos</p>
                            </div>
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                Completado
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
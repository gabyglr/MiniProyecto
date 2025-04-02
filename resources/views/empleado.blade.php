<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Empleado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Dashboard Empleado
                    </h2>
                    <div class="flex items-center space-x-4">
                        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-sm font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                            <svg class="mr-1.5 h-2 w-2 text-green-400" fill="currentColor" viewBox="0 0 8 8">
                                <circle cx="4" cy="4" r="3" />
                            </svg>
                            Online
                        </span>
                        <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Nuevo Pedido
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="space-y-8">
                <!-- Welcome Section -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="p-6 sm:p-8 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                        <div class="max-w-4xl">
                            <h3 class="text-2xl font-bold text-white">
                                Bienvenida, Maria
                            </h3>
                            <p class="mt-2 text-indigo-100">
                                Panel de control para empleados. Aquí podrás gestionar pedidos, atender solicitudes de clientes y mantener actualizado el inventario.
                            </p>
                            <div class="mt-4 inline-flex space-x-4">
                                <span class="inline-flex items-center text-sm text-white">
                                    <svg class="mr-1.5 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span id="currentDate"></span>
                                </span>
                                <span class="inline-flex items-center text-sm text-white">
                                    <svg class="mr-1.5 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Última actualización: <span id="currentTime"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Overview -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Pedidos Pendientes -->
                    <div class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-xl bg-amber-50 text-amber-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-2xl font-bold text-gray-900">5</h4>
                                <p class="text-sm font-medium text-gray-600">Pedidos Pendientes</p>
                                <div class="mt-1 flex items-center text-xs text-amber-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                    +2 desde ayer
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pedidos Completados -->
                    <div class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-xl bg-green-50 text-green-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-2xl font-bold text-gray-900">28</h4>
                                <p class="text-sm font-medium text-gray-600">Pedidos Completados</p>
                                <div class="mt-1 flex items-center text-xs text-green-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                    +5 esta semana
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clientes Atendidos -->
                    <div class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-xl bg-blue-50 text-blue-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-2xl font-bold text-gray-900">145</h4>
                                <p class="text-sm font-medium text-gray-600">Clientes Atendidos</p>
                                <div class="mt-1 flex items-center text-xs text-blue-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                    +12 este mes
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Satisfacción -->
                    <div class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-xl bg-purple-50 text-purple-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-2xl font-bold text-gray-900">98%</h4>
                                <p class="text-sm font-medium text-gray-600">Satisfacción</p>
                                <div class="mt-1 flex items-center text-xs text-purple-600">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                    +2% desde el último mes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tasks and Orders Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Pending Tasks -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Tareas Pendientes</h3>
                                <button class="text-sm text-indigo-600 hover:text-indigo-900">Ver todas</button>
                            </div>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-900">Procesar pedido #2023-001</p>
                                            <span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                                                Urgente
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-500">Vencimiento: Hoy, 5:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-900">Actualizar inventario</p>
                                            <span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">
                                                Pendiente
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-500">Vencimiento: Mañana, 10:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-900">Contactar cliente #123</p>
                                            <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                                Seguimiento
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-sm text-gray-500">Vencimiento: Mañana, 2:00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Orders -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Pedidos Recientes</h3>
                                <button class="text-sm text-indigo-600 hover:text-indigo-900">Ver todos</button>
                            </div>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-yellow-100">
                                                <svg class="h-5 w-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-900">Pedido #2023-056</p>
                                            <p class="text-sm text-gray-500">3 productos - $156.00</p>
                                        </div>
                                    </div>
                                    <span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">
                                        Pendiente
                                    </span>
                                </div>
                            </div>

                            <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-green-100">
                                                <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-900">Pedido #2023-055</p>
                                            <p class="text-sm text-gray-500">1 producto - $49.99</p>
                                        </div>
                                    </div>
                                    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                        Completado
                                    </span>
                                </div>
                            </div>

                            <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-green-100">
                                                <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-900">Pedido #2023-054</p>
                                            <p class="text-sm text-gray-500">2 productos - $89.99</p>
                                        </div>
                                    </div>
                                    <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                        Completado
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            
            // Update date
            const dateOptions = { day: 'numeric', month: 'short', year: 'numeric' };
            document.getElementById('currentDate').textContent = now.toLocaleDateString('es-ES', dateOptions);
            
            // Update time
            const timeOptions = { hour: '2-digit', minute: '2-digit' };
            document.getElementById('currentTime').textContent = now.toLocaleTimeString('es-ES', timeOptions);
        }

        // Update initially and then every minute
        updateDateTime();
        setInterval(updateDateTime, 60000);
    </script>
</body>
</html>
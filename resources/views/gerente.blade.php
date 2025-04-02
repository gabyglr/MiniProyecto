<x-app-layout>
    <x-slot name="header">
        Dashboard Gerente
    </x-slot>

    <div class="space-y-6">
        <!-- Welcome Card -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-medium text-gray-900">
                Bienvenido, {{ auth()->user()->name }}
            </h3>
            <p class="mt-1 text-sm text-gray-600">
                Panel de control gerencial. Supervisa las operaciones y el rendimiento del negocio.
            </p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">$45,257</h4>
                        <p class="text-sm text-gray-600">Ingresos Mensuales</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">+23.5%</h4>
                        <p class="text-sm text-gray-600">Crecimiento</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">1,257</h4>
                        <p class="text-sm text-gray-600">Clientes Totales</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">384</h4>
                        <p class="text-sm text-gray-600">Pedidos Mensuales</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Reports -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Sales Chart -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Ventas Mensuales</h3>
                </div>
                <div class="p-6">
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <!-- Aquí iría el gráfico de ventas -->
                        <p class="text-gray-500">Gráfico de Ventas</p>
                    </div>
                </div>
            </div>

            <!-- Top Products -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Productos Más Vendidos</h3>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-gray-100"></div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">Producto A</p>
                                    <p class="text-sm text-gray-500">234 unidades</p>
                                </div>
                            </div>
                            <span class="text-green-600 text-sm font-medium">+12.5%</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-gray-100"></div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">Producto B</p>
                                    <p class="text-sm text-gray-500">187 unidades</p>
                                </div>
                            </div>
                            <span class="text-green-600 text-sm font-medium">+8.3%</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-gray-100"></div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">Producto C</p>
                                    <p class="text-sm text-gray-500">156 unidades</p>
                                </div>
                            </div>
                            <span class="text-red-600 text-sm font-medium">-2.1%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-lg shadow-sm">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Actividad Reciente</h3>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="p-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Nuevo pedido recibido</p>
                            <p class="text-sm text-gray-500">Pedido #2023-057 - $234.50</p>
                            <p class="text-xs text-gray-400 mt-1">Hace 5 minutos</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Pedido completado</p>
                            <p class="text-sm text-gray-500">Pedido #2023-056 completado exitosamente</p>
                            <p class="text-xs text-gray-400 mt-1">Hace 15 minutos</p>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Stock bajo</p>
                            <p class="text-sm text-gray-500">Producto A está por debajo del stock mínimo</p>
                            <p class="text-xs text-gray-400 mt-1">Hace 1 hora</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

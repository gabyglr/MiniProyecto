<x-app-layout>
    <x-slot name="header">
        Dashboard Empleado
    </x-slot>

    <div class="space-y-6">
        <!-- Welcome Card -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-medium text-gray-900">
                Bienvenido, {{ auth()->user()->name }}
            </h3>
            <p class="mt-1 text-sm text-gray-600">
                Panel de control para empleados. Gestiona pedidos y atiende solicitudes de clientes.
            </p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">5</h4>
                        <p class="text-sm text-gray-600">Pedidos Pendientes</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">28</h4>
                        <p class="text-sm text-gray-600">Pedidos Completados</p>
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
                        <h4 class="text-lg font-semibold text-gray-900">145</h4>
                        <p class="text-sm text-gray-600">Clientes Atendidos</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-gray-900">98%</h4>
                        <p class="text-sm text-gray-600">Satisfacción</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks and Orders Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Pending Tasks -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Tareas Pendientes</h3>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Procesar pedido #2023-001</p>
                                <p class="text-sm text-gray-500">Vencimiento: Hoy, 5:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Actualizar inventario</p>
                                <p class="text-sm text-gray-500">Vencimiento: Mañana, 10:00 AM</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Contactar cliente #123</p>
                                <p class="text-sm text-gray-500">Vencimiento: Mañana, 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Pedidos Recientes</h3>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Pedido #2023-056</p>
                                <p class="text-sm text-gray-500">3 productos - $156.00</p>
                            </div>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pendiente
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Pedido #2023-055</p>
                                <p class="text-sm text-gray-500">1 producto - $49.99</p>
                            </div>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completado
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Pedido #2023-054</p>
                                <p class="text-sm text-gray-500">2 productos - $89.99</p>
                            </div>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completado
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

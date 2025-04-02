<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Crear Nuevo Usuario</h1>
            <p class="text-gray-600">Complete el formulario para crear un nuevo usuario en el sistema</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm p-8">
            <form action="<?php echo htmlspecialchars(route('gerente.usuarios.store')); ?>" method="POST" class="space-y-6">
                <?php echo csrf_field(); ?>
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nombre <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        placeholder="Ingrese el nombre completo"
                    >
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Correo Electrónico <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        placeholder="ejemplo@correo.com"
                    >
                </div>

                <!-- Password Fields Group -->
                <div class="space-y-6 p-6 bg-gray-50 rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Información de Acceso</h3>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Contraseña <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            required
                            minlength="8"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Mínimo 8 caracteres"
                        >
                        <p class="mt-1 text-sm text-gray-500">La contraseña debe tener al menos 8 caracteres</p>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirmar Contraseña <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation"
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Repita la contraseña"
                        >
                    </div>
                </div>

                <!-- Role Field -->
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                        Rol <span class="text-red-500">*</span>
                    </label>
                    <select 
                        name="role" 
                        id="role"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white"
                    >
                        <option value="">Seleccione un rol</option>
                        <option value="gerente">Gerente</option>
                        <option value="empleado">Empleado</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between pt-6">
                    <a 
                        href="<?php echo htmlspecialchars(route('gerente.usuarios.index')); ?>" 
                        class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors flex items-center"
                    >
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Volver al listado
                    </a>
                    <button 
                        type="submit"
                        class="px-6 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors flex items-center"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Crear Usuario
                    </button>
                </div>
            </form>
        </div>

        <!-- Error Messages -->
        <?php if (isset($errors) && $errors->any()): ?>
        <div class="mt-6 bg-red-50 border border-red-200 rounded-lg p-4">
            <div class="text-sm text-red-600">
                <ul class="list-disc list-inside">
                    <?php foreach ($errors->all() as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- Success Message -->
    <?php if (session('success')): ?>
    <div class="fixed bottom-4 right-4 bg-green-50 border border-green-200 rounded-lg p-4 shadow-lg">
        <p class="text-green-800"><?php echo htmlspecialchars(session('success')); ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
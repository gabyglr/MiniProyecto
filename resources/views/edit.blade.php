<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Editar Usuario</h1>
            <p class="text-gray-600">Modificar información de <?php echo htmlspecialchars($user->name); ?></p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm p-8">
            <form action="<?php echo htmlspecialchars(route('gerente.usuarios.update', $user->id)); ?>" method="POST" class="space-y-6">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nombre
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="<?php echo htmlspecialchars($user->name); ?>" 
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Correo Electrónico
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="<?php echo htmlspecialchars($user->email); ?>" 
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>

                <!-- Password Fields Group -->
                <div class="space-y-6 p-6 bg-gray-50 rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Cambiar Contraseña</h3>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Nueva Contraseña (Opcional)
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            minlength="8"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirmar Contraseña
                        </label>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                    </div>
                </div>

                <!-- Role Field -->
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                        Rol
                    </label>
                    <select 
                        name="role" 
                        id="role"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white"
                    >
                        <option value="gerente" <?php echo $user->role == 'gerente' ? 'selected' : ''; ?>>Gerente</option>
                        <option value="empleado" <?php echo $user->role == 'empleado' ? 'selected' : ''; ?>>Empleado</option>
                        <option value="cliente" <?php echo $user->role == 'cliente' ? 'selected' : ''; ?>>Cliente</option>
                    </select>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between pt-6">
                    <a 
                        href="<?php echo htmlspecialchars(route('gerente.usuarios.index')); ?>" 
                        class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors"
                    >
                        ← Volver al listado
                    </a>
                    <button 
                        type="submit"
                        class="px-6 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                    >
                        Actualizar Usuario
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaOnline</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
</head>
<body class="min-h-screen bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600">
                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
                        <path d="M3 6h18"/>
                        <path d="M16 10a4 4 0 0 1-8 0"/>
                    </svg>
                    <span class="ml-2 text-xl font-bold text-gray-800">TiendaOnline</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">
                        Inicio
                    </a>
                    <a href="#about" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">
                        Quiénes Somos
                    </a>
                    <a href="<?php echo route('login'); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10 17 15 12 10 7"/>
                            <line x1="15" x2="3" y1="12" y2="12"/>
                        </svg>
                        Iniciar Sesión
                    </a>
                    <a href="<?php echo route('register'); ?>" class="inline-flex items-center px-4 py-2 border border-indigo-600 text-sm font-medium rounded-md text-indigo-600 hover:bg-indigo-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        Registrarse
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button onclick="toggleMenu()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" x2="20" y1="12" y2="12"/>
                            <line x1="4" x2="20" y1="6" y2="6"/>
                            <line x1="4" x2="20" y1="18" y2="18"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                    Inicio
                </a>
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                    Quiénes Somos
                </a>
                <a href="<?php echo route('login'); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                    Iniciar Sesión
                </a>
                <a href="<?php echo route('register'); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                    Registrarse
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-white pt-16">
        <div class="mx-auto max-w-7xl">
            <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            Bienvenido a nuestra Tienda
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Descubre una experiencia de compra única con los mejores productos y precios del mercado.
                        </p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Explorar Productos
                            </a>
                            <a href="#about" class="text-sm font-semibold leading-6 text-gray-900">
                                Conoce más <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img
                class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt="Shopping experience"
            />
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Quiénes Somos</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Nuestra Historia
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Somos una empresa comprometida con la excelencia y la satisfacción del cliente. Desde nuestros inicios, 
                    nos hemos dedicado a ofrecer productos de la más alta calidad a precios competitivos, construyendo 
                    relaciones duraderas con nuestros clientes basadas en la confianza y el servicio excepcional.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <dt class="text-base font-semibold leading-7 text-gray-900">Calidad Garantizada</dt>
                        <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Todos nuestros productos pasan por rigurosos controles de calidad.</p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="text-base font-semibold leading-7 text-gray-900">Envíos Rápidos</dt>
                        <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Entrega garantizada en 24-48 horas a cualquier punto del país.</p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="text-base font-semibold leading-7 text-gray-900">Atención Personalizada</dt>
                        <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Equipo de soporte disponible 24/7 para atender tus consultas.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
</body>
</html>
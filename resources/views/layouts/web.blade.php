<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Programación Web</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" </head>

<body>
    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                alt="Workflow">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">

                                @auth
                                    <a href="{{ url('dashboard') }}"
                                        class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                                @else
                                    <a href="{{ url('login') }}"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>

                                    <a href="{{ url('register') }}"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                @endauth
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    @auth
                        <a href="{{ url('dashboard') }}"
                            class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
                    @else
                        <a href="{{ url('login') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>

                        <a href="{{ url('register') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Register</a>
                    @endauth

                </div>
            </div>
        </nav>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 shadow">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg">
                        @yield('content')
                    </div>
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>

</body>

</html>

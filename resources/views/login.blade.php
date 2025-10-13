<!DOCTYPE html>
<html lang="es">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión - PrintHub</title>
</head>

<body class="bg-[#f3f4f0] min-h-screen flex">
    <div class="w-2/3">
        <img class="w-full h-screen object-cover" src="marca/foto_exterior.jpg" alt="foto_exterior">
    </div>

    <div class="w-1/3 flex flex-col justify-between p-8">
        <div class="flex justify-center pt-16">
            <img class="h-16 w-auto" src="marca/PrintHub_Principal_Transparente.png" alt="logo_printhub">
        </div>

        <div class="flex flex-col items-center justify-center flex-grow">
            <h1 class="text-3xl font-bold text-[#0A3D34] mb-8">Iniciar sesión</h1>

            <form class="flex flex-col gap-4 w-full max-w-sm" action="/login" method="post">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        @foreach ($errors->all() as $error)
                            <p class="text-sm">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <input
                    class="bg-[#f3f4f0] border-1 border-[#0F5841] p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0A3D34] focus:border-[#0A3D34] text-[#0A3D34] placeholder-[#0F5841]"
                    type="email" name="email" placeholder="alguien@example.com" required>
                <input
                    class="bg-[#f3f4f0] border-1 border-[#0F5841] p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0A3D34] focus:border-[#0A3D34] text-[#0A3D34] placeholder-[#0F5841]"
                    type="password" name="password" placeholder="Contraseña" required>
                <button
                    class="bg-[#0A3D34] hover:bg-[#0F5841] text-[#f3f4f0] p-3 rounded-md cursor-pointer transition-colors duration-200 font-medium"
                    type="submit">
                    Iniciar sesión
                </button>

                <!-- Link para ir al registro -->
                <div class="text-center mt-4">
                    <p class="text-[#0F5841] text-sm">
                        ¿No tienes cuenta?
                        <a href="/register"
                            class="text-[#0A3D34] hover:text-[#0F5841] font-medium underline transition-colors duration-200">
                            Regístrate
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <footer class="text-center text-[#0F5841] text-sm pb-8">
            <p>&copy; 2025 PrintHub</p>
        </footer>
    </div>
</body>

</html>

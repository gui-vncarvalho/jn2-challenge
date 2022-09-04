<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>JN2 Ecommerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="text-gray-600">
        <div class="container mx-auto flex justify-between items-center p-5 items-center">
            <a href="/" class="flex title-font font-medium items-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Gestor de Clientes e Placas de Carro</span>
            </a>
            <div class="flex items-center">
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a href="/" class="mr-5 hover:text-gray-900">Home</a>
                </nav>
                <a href="<?php echo e(route('admin.clients')); ?>" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0">Admin
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <footer class="absolute inset-x-0 bottom-0 text-gray-600">
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-right sm:text-left">© 2022 Guilherme —
                    <a href="https://linkedin.com/in/gui-vncarvalho" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH D:\myapp\resources\views/layouts/default.blade.php ENDPATH**/ ?>
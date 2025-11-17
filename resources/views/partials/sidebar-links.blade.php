@php
    $currentUri = request()->path();
@endphp

@php
    $activeClass = 'bg-gray-100 font-bold text-blue-600 rounded-lg';
    $inactiveClass = 'text-gray-700 hover:bg-gray-50 hover:text-blue-500 rounded-lg';
@endphp

<a class="flex flex-row items-center p-2 {{ $currentUri === 'dashboard' ? $activeClass : $inactiveClass }}" href="/dashboard">
    <span class="ml-2">Inicio</span>
</a>

<a class="flex flex-row items-center p-2 {{ $currentUri === 'inventory' ? $activeClass : $inactiveClass }}" href="/inventory">
    <span class="ml-2">Inventario</span>
</a>

<a class="flex flex-row items-center p-2 {{ $currentUri === 'bills' ? $activeClass : $inactiveClass }}" href="/bills">
    <span class="ml-2">Gastos</span>
</a>

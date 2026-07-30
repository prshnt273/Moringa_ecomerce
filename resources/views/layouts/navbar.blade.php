<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <!-- Logo -->
<a href="{{ route('home') }}" class="flex items-center space-x-3">

    @if($setting && $setting->logo)
        <img
            src="{{ asset('storage/' . $setting->logo) }}"
            alt="Logo"
            class="h-20 w-20 rounded-full object-contain">
    @else
        <span class="text-4xl">🌿</span>
    @endif

    <div>
        <h1 class="text-2xl font-bold text-green-700">
            {{ $setting->company_name ?? 'Barahagroo Foods' }}
        </h1>

        <p class="text-xs text-gray-500">
            Organic Moringa Products
        </p>
    </div>

</a>

            <!-- Navigation -->
            <div class="hidden md:flex items-center space-x-8">

                <a href="{{ route('home') }}"
                    class="text-gray-700 hover:text-green-700 font-medium transition">
                    Home
                </a>

                <a href="{{ route('products') }}"
                    class="text-gray-700 hover:text-green-700 font-medium transition">
                    Products
                </a>

                <a href="{{ route('about') }}"
                    class="text-gray-700 hover:text-green-700 font-medium transition">
                    About
                </a>

                <a href="{{url('/#contact') }}""
                    class="text-gray-700 hover:text-green-700 font-medium transition">
                    Contact
                </a>

            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-3">

                <!-- Logo -->
<a href="{{ route('home') }}" class="flex items-center space-x-3">

    @if($setting && $setting->logo)
        <img
            src="{{ asset('storage/' . $setting->logo) }}"
            alt="Logo"
            class="h-20 w-20 rounded-full object-contain">
    @else
        <span class="text-4xl">🌿</span>
    @endif

    <div>
        <h1 class="text-2xl font-bold text-green-700">
            {{ $setting->company_name ?? 'Barahagroo Foods' }}
        </h1>

        <p class="text-xs text-gray-500">
            Organic Moringa Products
        </p>
    </div>

</a>

                <a href="/admin"
                    class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                    Admin
                </a>

            </div>

        </div>
    </div>
</nav>

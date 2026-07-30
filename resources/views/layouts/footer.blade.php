<footer id="contact" class="bg-green-900 text-white mt-20">

    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">

        <div>
             @if($setting && $setting->logo)
        <img
            src="{{ asset('storage/' . $setting->logo) }}"
            alt="Logo"
            class="h-12 w-12 rounded-full object-cover">
    @else
        <span class="text-4xl">🌿</span>
    @endif

            <h2 class="text-2xl font-bold">
                 {{ $setting->company_name ?? 'Barahagroo Foods' }}
            </h2>

            <p class="mt-4 text-gray-300">
                Premium Organic Moringa Products From Nepal.
            </p>

        </div>

        <div>

            <h3 class="font-semibold text-xl mb-4">
                Quick Links
            </h3>

            <ul class="space-y-2">

                <li><a href="/">Home</a></li>

                <li><a href="/products">Products</a></li>

                <li><a href="/about">About</a></li>

                <li><a href="/contact">Contact</a></li>

            </ul>

        </div>

        <div>

            <h3 class="font-semibold text-xl mb-4">
                Contact
            </h3>

            <p>Address: {{ $setting->address }}</p>

            <p>Phone: {{ $setting->phone }}</p>

            <p>✉ Email: {{ $setting->email }}</p>

        </div>

    </div>

    <div class="text-center py-5 border-t border-green-700">

        © {{ date('Y') }} Barahagroo Foods. All Rights Reserved.

    </div>

</footer>

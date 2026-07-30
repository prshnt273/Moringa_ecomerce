@extends('layouts.app')

@section('title', $setting->company_name ?? 'Barahagroo Foods')

@section('content')


<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-green-900 to-green-700 text-white">

    <div class="max-w-7xl mx-auto px-6 py-24">

        <div class="grid lg:grid-cols-2 gap-12 items-center">


            <!-- Left -->
            <div>

                <span class="bg-green-600 px-4 py-2 rounded-full text-sm">
                    🌿 100% Organic Moringa
                </span>


                <h1 class="text-5xl md:text-6xl font-extrabold mt-6 leading-tight">

                    {{ $setting->hero_title ?? "Nature's Superfood For A Healthier Life" }}

                </h1>


                <p class="mt-6 text-lg text-green-100">

                    {{ $setting->hero_description ??
                    'Premium quality moringa powder, tea and capsules directly from trusted farms.' }}

                </p>


                <div class="mt-8 flex gap-4">

                    <a href="{{ route('products') }}"
                        class="bg-white text-green-700 px-7 py-3 rounded-lg font-semibold hover:bg-green-100 transition">

                        Shop Now

                    </a>


                    <a href="{{ route('contact') }}"
                        class="border border-white px-7 py-3 rounded-lg hover:bg-white hover:text-green-700 transition">

                        Contact Us

                    </a>

                </div>

            </div>



            <!-- Right -->
            <div>

                @if($setting && $setting->hero_image)

                    <img
                    src="{{ asset('storage/'.$setting->hero_image) }}"
                    class="rounded-3xl shadow-2xl">

                @else

                    <img
                    src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=900"
                    class="rounded-3xl shadow-2xl">

                @endif


            </div>


        </div>

    </div>

</section>





<!-- Why Choose Us -->

<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">


        <h2 class="text-4xl font-bold text-center text-green-800">

            Why Choose Us?

        </h2>


        <p class="text-center text-gray-600 mt-3">

            Fresh • Organic • Premium Quality

        </p>



        <div class="grid md:grid-cols-4 gap-8 mt-14">



            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">

                <div class="text-5xl">🌿</div>

                <h3 class="font-bold text-xl mt-5">
                    Organic
                </h3>

                <p class="mt-3 text-gray-600">
                    Naturally grown without chemicals.
                </p>

            </div>




            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">

                <div class="text-5xl">💚</div>

                <h3 class="font-bold text-xl mt-5">
                    Healthy
                </h3>

                <p class="mt-3 text-gray-600">
                    Packed with nutrients and antioxidants.
                </p>

            </div>




            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">

                <div class="text-5xl">🚚</div>

                <h3 class="font-bold text-xl mt-5">
                    Fast Delivery
                </h3>

                <p class="mt-3 text-gray-600">
                    Quick shipping across Nepal.
                </p>

            </div>




            <div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition">

                <div class="text-5xl">⭐</div>

                <h3 class="font-bold text-xl mt-5">
                    Premium Quality
                </h3>

                <p class="mt-3 text-gray-600">
                    Carefully selected and processed.
                </p>

            </div>



        </div>

    </div>

</section>





<!-- Featured Products -->

<section class="py-20">

    <div class="max-w-7xl mx-auto px-6">


        <h2 class="text-4xl font-bold text-center text-green-800 mb-12">

            Featured Products

        </h2>



        <div class="grid md:grid-cols-3 gap-8">


            @forelse($featuredProducts as $product)


                <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">


                    <img
                    src="{{ asset('storage/'.$product->image) }}"
                    class="h-72 w-full object-cover"
                    alt="{{ $product->name }}">



                    <div class="p-6">


                        <h3 class="text-2xl font-semibold">

                            {{ $product->name }}

                        </h3>



                        <p class="text-green-700 text-2xl font-bold mt-3">

                            Rs.{{ $product->price }}

                        </p>



                        <a
                        href="{{ route('products.show',$product->slug) }}"
                        class="block text-center mt-6 bg-green-700 text-white py-3 rounded-lg hover:bg-green-800">


                            View Product


                        </a>


                    </div>


                </div>



            @empty


                <p class="text-center col-span-3">

                    No featured products available.

                </p>


            @endforelse



        </div>


    </div>


</section>



@endsection

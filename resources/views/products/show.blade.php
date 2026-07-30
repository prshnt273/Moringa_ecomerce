@extends('layouts.app')

@section('title',$product->name)

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">

    <div class="grid md:grid-cols-2 gap-12">

        <img
            src="{{ asset('storage/'.$product->image) }}"
            class="rounded-xl shadow">

        <div>

            <h1 class="text-4xl font-bold">

                {{ $product->name }}

            </h1>

            <p class="text-green-700 text-3xl font-bold mt-4">

                ${{ $product->price }}

            </p>

            <p class="mt-6 text-gray-600">

                {{ $product->description }}

            </p>


            <a
                target="_blank"
                href="https://wa.me/{{ $setting->whatsapp }}?text={{ urlencode('I am interested in '.$product->name) }}"
                class="inline-block mt-8 bg-green-600 text-white px-6 py-3 rounded-lg">

                Enquire on WhatsApp

            </a>

        </div>

    </div>

    <h2 class="text-3xl font-bold mt-20 mb-8">

        Related Products

    </h2>

    <div class="grid md:grid-cols-4 gap-6">

        @foreach($relatedProducts as $item)

        <a
            href="{{ route('products.show',$item->slug) }}"
            class="bg-white rounded-xl shadow overflow-hidden">

            <img
                src="{{ asset('storage/'.$item->image) }}"
                class="h-48 w-full object-cover">

            <div class="p-4">

                <h3 class="font-semibold">

                    {{ $item->name }}

                </h3>

                <p class="text-green-700 font-bold mt-2">

                    ${{ $item->price }}

                </p>

            </div>

        </a>

        @endforeach

    </div>

</div>

@endsection

@extends('layouts.app')

@section('title','Products')

@section('content')

<div class="max-w-7xl mx-auto py-12 px-6">

    <h1 class="text-4xl font-bold mb-8">
        Our Products
    </h1>

    <form class="grid md:grid-cols-3 gap-4 mb-10">

        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Search product..."
            class="border rounded-lg p-3">

        <select
            name="category"
            class="border rounded-lg p-3">

            <option value="">
                All Categories
            </option>

            @foreach($categories as $category)

            <option
                value="{{ $category->id }}"
                @selected(request('category')==$category->id)>

                {{ $category->name }}

            </option>

            @endforeach

        </select>

        <button
            class="bg-green-700 text-white rounded-lg">

            Search

        </button>

    </form>

    <div class="grid md:grid-cols-3 gap-8">

        @forelse($products as $product)

        <div class="bg-white rounded-xl shadow">

            <img
                src="{{ asset('storage/'.$product->image) }}"
                class="h-60 w-full object-cover rounded-t-xl">

            <div class="p-5">

                <h2 class="text-xl font-semibold">

                    {{ $product->name }}

                </h2>

                <p class="text-gray-600 mt-2">

                    {{ Str::limit($product->short_description,80) }}

                </p>

                <div class="mt-4 flex justify-between items-center">

                    <span
                        class="font-bold text-green-700 text-xl">

                        ${{ $product->price }}

                    </span>

                    <a
                        href="{{ route('products.show',$product->slug) }}"
                        class="bg-green-700 text-white px-4 py-2 rounded-lg">

                        View

                    </a>

                </div>

            </div>

        </div>

        @empty

        <p>No products found.</p>

        @endforelse

    </div>

    <div class="mt-10">

        {{ $products->links() }}

    </div>

</div>

@endsection

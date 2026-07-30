@extends('layouts.app')

@section('title','About Us')

@section('content')

<section class="py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12 items-center">


            <div>

                <h1 class="text-5xl font-bold text-green-800">

                    {{ $about->title }}

                </h1>


                <p class="mt-6 text-gray-600 text-lg">

                    {{ $about->description }}

                </p>


            </div>



            <div>

                @if($about->image)

                <img
                src="{{ asset('storage/'.$about->image) }}"
                class="rounded-2xl shadow-xl">

                @endif

            </div>


        </div>

    </div>

</section>


@endsection

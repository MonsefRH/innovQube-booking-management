@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold m-4">Properties</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        @foreach ($properties as $property)
            <div class="bg-white p-5  rounded shadow">
                <h2 class="text-xl font-semibold">{{ $property->name }}</h2>
                <p>{{ $property->description }}</p>
                <p class="text-secondary py-3">${{ number_format($property->price_per_night, 2) }}/night</p>
                @auth
                    <a href="{{ route('bookings.create', $property) }}" class="bg-primary text-white px-4 py-2 rounded">Book Now</a>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2  rounded">Login to Book</a>
                @endauth
            </div>
        @endforeach
    </div>
@endsection
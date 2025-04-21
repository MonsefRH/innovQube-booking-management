@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
@auth
                    <h1 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h1>
                    @else
                    <h1 class="text-2xl font-bold mb-4">Welcome, Guest!</h1>
                @endauth
                    <p class="mb-4">You’re logged in to the Property Booking System.</p>
                    <a href="{{ route('properties.index') }}" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-700">Browse Properties</a>
                </div>
                @isset($properties)
               <!-- Add properties list -->
               <div class="mt-6">
                        <h2 class="text-xl font-semibold mb-4">Available Properties</h2>
                        @if ($properties->isNotEmpty())
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                @foreach ($properties as $property)
                                    <div class="bg-white p-4 rounded shadow">
                                        <h3 class="text-lg font-semibold">{{ $property->name }}</h3>
                                        <p>{{ $property->description }}</p>
                                        <p class="text-secondary py-3">${{ number_format($property->price_per_night, 2) }}/night</p>
                                        <a href="{{ route('bookings.create', $property) }}" class="bg-primary text-white px-4 py-2 rounded">Book Now</a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No properties available at the moment.</p>
                        @endif
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </div>
@endsection
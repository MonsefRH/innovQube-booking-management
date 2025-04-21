@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Book {{ $property->name }}</h1>
    @livewire('booking-manager', ['propertyId' => $property->id])
@endsection
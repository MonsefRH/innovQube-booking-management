@extends('layouts.app')

@section('content')
    @livewire('booking-manager', ['propertyId' => $property->id])
@endsection
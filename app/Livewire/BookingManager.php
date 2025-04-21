<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookingManager extends Component
{
    public $propertyId;
    public $start_date;
    public $end_date;
    public $successMessage;

    protected $rules = [
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after:start_date',
    ];

    public function mount($propertyId)
    {
        $this->propertyId = $propertyId;
    }

    public function save()
    {
        $this->validate();

        Booking::create([
            'user_id' => Auth::id(),
            'property_id' => $this->propertyId,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->successMessage = 'Booking created successfully!';
        $this->reset(['start_date', 'end_date']);
    }

    public function render()
    {
        $property = Property::findOrFail($this->propertyId);
        return view('livewire.booking-manager', compact('property'));
    }
}

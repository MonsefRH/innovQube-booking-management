<div class="ml-9">
    @if ($successMessage)
        <div class="bg-green-100 text-green-700 p-4 m-4 rounded">
            {{ $successMessage }}
        </div>
    @endif

    <h2 class="text-xl font-bold m-4">Book {{ $property->name }}</h2>
    <form wire:submit.prevent="save">
        <div class="m-4">
            <label for="start_date" class="block text-sm font-medium">Start Date</label>
            <input type="date" id="start_date" wire:model="start_date" class="border rounded p-2 w-full">
            @error('start_date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="m-4">
            <label for="end_date" class="block text-sm font-medium">End Date</label>
            <input type="date" id="end_date" wire:model="end_date" class="border rounded p-2 w-full">
            @error('end_date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Book Now</button>
    </form>
</div>
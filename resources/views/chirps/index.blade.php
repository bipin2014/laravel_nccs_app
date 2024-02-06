<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.store') }}" 
        enctype="multipart/form-data">
            @csrf
            <textarea name="message" placeholder="{{ __('What\'s on your mind?') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />

            <input type="file" name="image" id="image">
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
            <br>

            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($chirps as $chirp)
            <x-chirp :chirp=$chirp>
                This is slot
            </x-chirp>
            @endforeach
        </div>
    </div>
</x-app-layout>
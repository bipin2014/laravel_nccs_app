<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('mobile.store') }}">
            @csrf
            <label for="name">Name</label>
           <input type="text" name="name">
           <x-input-error :messages="$errors->get('name')" class="mt-2" />


           <label for="modal">Modal</label>
           <input type="text" name="modal">
           <x-input-error :messages="$errors->get('madal')" class="mt-2" />


           <label for="price">Price</label>
           <input type="number" name="price">
           <x-input-error :messages="$errors->get('price')" class="mt-2" />


            <x-primary-button class="mt-4">
                {{ __('Add Mobile') }}
            </x-primary-button>

        </form>

    </div>
</x-app-layout>
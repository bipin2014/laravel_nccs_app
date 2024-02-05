<x-mobile-layout-component>
    <x-slot:title>
        New Mobiles
        </x-slot>
        <x-slot:header>
            New Header
            </x-slot>

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
            Halla Garam

            @foreach ($mobiles as $mobile)
            <div>

                <h3>{{$mobile->name}}</h3>

                @if ($mobile->name =="Samsung" )
                <p>Samsung</p>
                @else
                <p>Not Samsung</p>
                @endif

                @isset($mobile->modal)
                <p>Modal: {{$mobile->modal}}</p>
                @endisset

                @auth
                <p>You are logged in.</p>
                @endauth
                @guest
                <p>please sign in</p>
                @endguest

                @unless (Auth::check())
                You are not signed in.
                @endunless

                @empty($mobiles)
                // $records is "empty"...
                <p>Is empty</p>
                @endempty


                @for ($i = 0; $i < 5; $i++) <div>The current value is {{ $i }}
            </div>
            @endfor

            @forelse ($mobiles as $mobile)
            <li>{{ $mobile->name }}</li>
            @empty
            <p>No mobiles</p>
            @endforelse

            </div>

            @endforeach


</x-mobile-layout-component>
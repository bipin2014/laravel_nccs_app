<x-nccs-layout>
    <h3>this should show in slot</h3>
    <button>Button</button>

    <x-teacher name="Bipin" ></x-teacher>
    <x-teacher :name="$name" ></x-teacher>
   
</x-nccs-layout>
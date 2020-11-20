<x-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-4xl text-gray-800 mb-16">
                {{ $dog -> name }}
            </h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="font-bold text-xl text-gray-800">
                    Doggie Details
                </div>

                <p> Owned by {{ $dog -> owner -> name}} </p>

                <p> Owner email {{ $dog -> owner -> email}} </p>
                <img src="{{ $dog -> owner -> avatar_url }}" alt="">
                
            </div>
</div>
</div>
</x-guest-layout>

<x-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-4xl text-gray-800 mb-16">
                {{ $dog -> name }}
            </h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="font-bold text-4xl text-gray-800">
                    Doggie Details
                </div>

                <div>
                    <h2 class="font-semibold text-2xl text-gray-800">Bio</h2>
                    <p>
                        {{ $dog -> bio }}
                    </p>

                    <h2 class="font-semibold text-2xl text-gray-800">Owner</h2>

                    <p>
                        {{ $dog -> owner -> name }}
                    </p>

                    <p>
                        {{ $dog -> owner -> email }}
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>

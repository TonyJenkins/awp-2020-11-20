<x-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-4xl text-gray-800 mb-16">
                Dog Show
            </h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="font-bold text-xl text-gray-800">
                    The List of Dogs
                </div>

                <div class="mt-8">

                    <ul>
                        @foreach ($dogs as $d)
                            <li>
                                {{ $d -> name }}
                                <a href="{{ $d->path }}">Details</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                {{ $dogs -> links () }}
            </div>
        </div>
    </div>
</x-guest-layout>

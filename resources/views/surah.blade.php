<x-layout>

    <x-splade-lazy>
        <x-slot:placeholder>
            <div class="grid grid-cols-1 gap-4 justify-center bg-white p-5 md:grid-cols-2 lg:grid-cols-3 shadow-lg">
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
                <x-surah-card-placeholder />
            </div>
        </x-slot:placeholder>
        <div class="grid grid-cols-1 gap-4 justify-center bg-white p-5 md:grid-cols-2 lg:grid-cols-3 shadow-lg">
            @foreach($surahs as $surah)
                <x-surah-card number="{{ $surah['number'] }}" name="{{ $surah['name']['long'] }}" translation="{{ $surah['name']['translation']['id'] }}" transliteration="{{ $surah['name']['transliteration']['id'] }}"/>
            @endforeach
        </div>
    </x-splade-lazy>
</x-layout>

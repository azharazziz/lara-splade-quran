<div class="group flex flex-col justify-center p-5 bg-white">
    <span class="font-arabic font-bold text-2xl mb-2">{{ $verse }}</span>
    <span class=" font-bold">{!! $transliteration !!}</span>
    <span class="text-xs text-gray-500 italic">{!! $translation !!}</span>
    <div class="mt-2">
        <x-splade-toggle>
            <div v-show="!toggled">
                <button @click.prevent="toggle" class="bg-gray-200 px-2 py-1 rounded text-xs font-bold">Tampilkan Tafsir</button>
            </div>
            <div v-show="toggled">
                <button @click.prevent="toggle(false)" class="bg-gray-200 px-2 py-1 rounded text-xs font-bold">Tutup Tafsir</button>
            </div>
            <div v-show="toggled" class="bg-gray-200 px-2 my-2 rounded">
                <span class="text-xs text-gray-500 italic text-justify">{!! $tafsir !!}</span>
            </div>

        </x-splade-toggle>
    </div>

</div>

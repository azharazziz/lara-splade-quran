<div class="group flex flex-col justify-center gap-2 p-5 bg-white">
    <p dir="rtl" class="font-arabic font-bold text-2xl leading-loose text-right">{{ $verse }}<span class="font-bold">﴿<span class="text-sm font-bold">{{ $number }}</span>﴾</span></p>
    <p class=" font-bold">{!! $transliteration !!}</p>
    <p class="text-xs text-gray-500 italic">{!! $translation !!}</p>
    <div class="mt-2">
        <x-splade-toggle>
            <div v-show="!toggled">
                <button @click.prevent="toggle" class="bg-gray-200 px-2 py-1 rounded text-xs font-bold">Tampilkan Tafsir</button>
            </div>
            <div v-show="toggled">
                <button @click.prevent="toggle(false)" class="bg-gray-200 px-2 py-1 rounded text-xs font-bold">Tutup Tafsir</button>
            </div>
            <div v-show="toggled" class="bg-gray-200 p-2 my-2 rounded">
                <p class="text-xs text-gray-500 italic text-justify">{!! $tafsir !!}</p>
            </div>
        </x-splade-toggle>
    </div>
</div>

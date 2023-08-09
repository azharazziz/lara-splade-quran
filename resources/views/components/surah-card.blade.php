<Link href="{{ route('ayat', ['id' => $number]) }}">
    <div class="group rounded-md p-2 flex gap-2 shadow-md bg-gray-100 hover:bg-gray-200">
        <div class="flex aspect-square w-20 h-20 p-2 rounded-full bg-gray-200 bg-frame-number bg-center bg-no-repeat items-center justify-center group-hover:bg-gray-300">
            <span class="text-lg font-black">{{ $number }}</span>
        </div>
        <div class="flex flex-col p-2  justify-center rounded w-full">
            <div class="flex-nowrap font-bold">{!! $transliteration !!}</div>
            <div class="text-xs text-gray-500 italic">{!! $translation !!}</div>
        </div>
        <div class="w-full flex items-center justify-center">
            <span class="font-arabic font-bold text-2xl">{{ $name }}</span>
        </div>
    </div>
</Link>

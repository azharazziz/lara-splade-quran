<x-layout>
    <x-header-surah name="{{ $surah['long'] }}" translation="{{ $surah['translation']['id'] }}" transliteration="{{ $surah['transliteration']['id'] }}"/>

    @if (isset($preBismillah))
    <x-pre-bismillah verse="{{ $preBismillah['text']['arab'] }}" translation="{{ $preBismillah['translation']['id'] }}" transliteration="{{ $preBismillah['text']['transliteration']['en'] }}" />
    @endif

    @foreach ($verses as $verse)
        <x-ayat-card number="{{ $verse['number']['inSurah'] }}" verse="{{ $verse['text']['arab'] }}" translation="{{ $verse['translation']['id'] }}" transliteration="{{ $verse['text']['transliteration']['en'] }}" tafsir="{{ $verse['tafsir']['id']['long'] }}" />
    @endforeach

</x-layout>

<x-layout>
    <x-list_block header="Уроки">
        @foreach($lessons as $lesson )
        <a href="" class="hover:text-blue-400">{{$lesson->ru_name}}</a>
        @endforeach
    </x-list_block>
</x-layout>
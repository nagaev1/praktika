<x-layout>
    <x-list_block header="Уроки">
        @foreach($sciences as $science )
        <a href="{{ route('sciences.topics_by_science', $science->name) }}" class="hover:text-blue-400">{{$science->ru_name}}</a>
        @endforeach
    </x-list_block>
</x-layout>
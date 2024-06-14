<x-layout>
  <x-list_block header="Темы">
    @foreach($topics as $topic )
    <a href="{{ route('sciences.lessons_by_topic', [$science->name, $topic->name]) }}" class="hover:text-blue-400">{{$topic->ru_name}}</a>
    @endforeach
  </x-list_block>
      
</x-layout>
<x-layout>
    <header class=" max-w-screen-xl mx-auto flex justify-start gap-4 py-4">
        <img src="{{url('images/'.$science->image)}}" alt="img" class="w-24">
        <div class=" flex flex-col justify-around">
            <a href="{{route('sciences')}}" class="hover:underline text-th-green text-xl ">главная</a>
            <h1 class="text-3xl">{{$science->ru_name}}</h1>
        </div>
    </header>
    <main class="flex-grow">
        <section class=" max-w-screen-xl mx-auto">
            <x-list_block header="Темы">
                <div class=" flex flex-wrap gap-4 justify-around items-center">
                    @foreach($topics as $topic )
                        <a class=" w-52 max-w-full flex flex-col items-center" href="{{ route('sciences.lessons_by_topic', [$science->name ,$topic->name]) }}">
                            <img src="{{ url('/images/'.$topic->image) }}" alt="img">
                            <h1  class="text-2xl">{{$topic->ru_name}}</h1>
                        </a>
                    @endforeach
                    @if ($topics->isEmpty())
                        <h1>Пока пусто</h1>
                    @endif
                </div>
            </x-list_block>
        </section>
    </main>
      
</x-layout>
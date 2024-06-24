<x-layout>
    <header class=" max-w-screen-xl mx-auto flex justify-start gap-4 py-4">
        <a href="{{route('sciences.topics_by_science', $science->name)}}">
            <img src="{{url('images/'.$topic->image)}}" alt="img" class="w-24">
        </a>
        <div class=" flex flex-col justify-around">
            <a href="{{route('sciences')}}" class="hover:underline text-th-green text-xl ">главная</a>
            <a href="{{route('sciences.topics_by_science', $science->name)}}" class="hover:underline text-th-green text-xl ">{{$science->ru_name}}</a>
            <h1 class="text-3xl">{{$topic->ru_name}}</h1>
        </div>
    </header>

    <main class="flex-grow">
        <section class=" max-w-screen-xl mx-auto">
            <x-list_block header="Уроки">
                <ol class=" grid gap-4 items-center p-4">
                    @foreach($lessons as $lesson )
                        <li class="list-decimal text-2xl">
                            <a href="{{ route('sciences.show_lesson', [$science->name, $topic->name, $lesson->name]) }}">
                                {{$lesson->ru_name}}
                            </a>
                            @auth
                                @php
                                    $mark = 0;
                                    if (!empty($marks->where('lesson_id', $lesson->id)->first())) {
                                        $mark = $marks->where('lesson_id', $lesson->id)->first()->mark;
                                    }
                                @endphp
                                @if ($mark)
                                    <span>| Ваша отметка: {{ $mark }}</span>
                                @endif
                            @endauth
                        </li>
                    @endforeach
                    @if ($lessons->isEmpty())
                        <h1>Пока пусто</h1>
                    @endif
                </ul>
            </x-list_block>
        </section>
    </main>
</x-layout>
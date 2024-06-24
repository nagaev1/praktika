<x-layout>
    <header class=" max-w-screen-xl mx-auto flex justify-start gap-4 py-4">
        <a href="{{route('sciences.lessons_by_topic', [$science->name, $topic->name])}}">
            <img src="{{url('images/'.$topic->image)}}" alt="img" class=" w-24">
        </a>
        <div class=" flex flex-col justify-around text-xl">
            <a href="{{route('sciences')}}" class="hover:underline text-th-green ">главная</a>
            <a href="{{route('sciences.topics_by_science', $science->name)}}" class="hover:underline text-th-green ">{{$science->ru_name}}</a>
            <a href="{{route('sciences.lessons_by_topic', [$science->name, $topic->name])}}" class="hover:underline text-th-green ">{{$topic->ru_name}}</a>
        </div>
    </header>
    <main>
        <section class=" max-w-screen-xl mx-auto">
            <x-list_block header="Теория: {{$lesson->ru_name}}" class="text-xl">
                <div class=" grid gap-4 items-center">
                    @include('lessons.'.$lesson->name)
                </div>
            </x-list_block>
        </section>
        <section class=" max-w-screen-xl mx-auto">
            <x-list_block header="Задание:" class="text-xl">
                <div class=" grid gap-4 items-center">
                    <div class="">
                        <form method="POST" 
                        action="{{route('sciences.store_mark',
                        ['science_name' => $science->name, 'topic_name' => $topic->name, 'lesson_name' => $lesson->name])}}"
                        class="mb-4 grid gap-4">
                            @csrf
                            @include('exercises.'.$lesson->name)
                        </form>
                    </div>
                </div>
            </x-list_block>
        </section>
    </main>
</x-layout>
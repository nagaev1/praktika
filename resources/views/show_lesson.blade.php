<x-layout>
    <header class=" max-w-screen-xl mx-auto flex justify-start gap-4 py-4">
        <img src="{{url('images/'.$science->image)}}" alt="img" class=" w-24">
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
                        <form onsubmit="onSubmit(event)" class="mb-4 grid gap-4">
                            @include('exercises.'.$lesson->name)
                        </form>
                    </div>
                </div>
            </x-list_block>
        </section>
    </main>

    <script>

        let questions = document.getElementsByClassName('question')
        function onSubmit(e) {
            e.preventDefault()
            let points = 0
            let correctButtons = document.getElementsByClassName('correct')
            for(let el of correctButtons) {
                if (el.checked) {
                    points += 1
                }
            }
            document.getElementById('result').innerHTML = `Результат: У вас ${points} правильных ответов из ${correctButtons.length} вопросов`
        }
    </script>
</x-layout>
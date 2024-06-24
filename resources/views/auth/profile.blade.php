<x-layout>
    <main>
        <section class=" max-w-screen-xl mx-auto rounded">
            <div class=" bg-th-green-dark p-4">
                <div class="lg:relative inline-flex flex-wrap justify-around top-20 left-20 items-end">
                    <div class=" rounded-full bg-white size-56 overflow-hidden">
                        @if (Auth::user()->avatar)
                        <img
                        src="{{ url('storage/'.Auth::user()->avatar)}}"
                        alt="img"
                        class="">
                        @endif
                    </div>
                    <h1 class="text-3xl">{{Auth::user()->name}}</h1>
                </div>
            </div>
            <div class=" bg-th-green py-5 px-4">
                <div class=" flex md:justify-end justify-center font-bold text-white items-center gap-4 flex-wrap">
                    <a href="{{route('auth.showEditForm')}}"><button class="p-4 rounded border-2 border-th-green-dark">Редактировать</button></a>
                    <a href="{{route('auth.logout')}}"><button class="p-4 rounded border-2 border-th-green-dark">Выйти</button></a>
                </div>
            </div>
        </section>

        <section class=" max-w-screen-xl mx-auto rounded">
            <ul class=" grid gap-4 items-center p-4">
                <li class="text-2xl grid grid-cols-4 border-b-2 border-th-green">
                    <div class="col-span-3">Урок</div>                    
                    <div class="">Оценка</div>                    
                </li>
                @foreach ($marks as $mark)
                    @php
                        $lesson = $lessons->where('id', $mark->lesson_id)->first();
                        $topic = $topics->where('id', $lesson->topic_id)->first();
                        $science = $sciences->where('id', $topic->science_id)->first();
                    @endphp
                    <li class="text-2xl grid grid-cols-4 ">
                        <a href="{{route('sciences.show_lesson',[
                            $science->name, $topic->name, $lesson->name
                        ])}}" class=" col-span-3">
                        {{ $lessons->where('id', $mark->lesson_id)->first()->ru_name }}
                        </a>
                        <span>
                            | {{ $mark->mark }}
                        </span>
                    </li>
                @endforeach
            </ul>
            
        </section>
    </main>
</x-layout>
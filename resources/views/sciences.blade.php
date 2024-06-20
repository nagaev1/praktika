<x-layout>
    <main>
        <section class=" max-w-screen-xl mx-auto">
            <x-list_block header="Науки">
                <div class=" flex flex-wrap gap-4 justify-around items-center">
                    @foreach($sciences as $science )
                        <a class=" w-52 max-w-full flex flex-col items-center" href="{{ route('sciences.topics_by_science', $science->name) }}">
                            <img src="{{ url('/images/'.$science->image) }}" alt="">
                            <h1  class="text-2xl">{{$science->ru_name}}</h1>
                        </a>
                    @endforeach
                    @if (!$sciences)
                        <h1>Пока пусто</h1>
                    @endif
                </div>
            </x-list_block>
        </section>
    </main>
</x-layout>
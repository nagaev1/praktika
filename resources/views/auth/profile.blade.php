<x-layout>
    <main>
        <section class=" max-w-screen-xl mx-auto rounded">
            <div class="bg-blue-200 p-4">
                <div class="lg:relative inline-flex flex-wrap justify-around top-20 left-20 items-end">
                    <div class=" rounded-full bg-white size-56">
                        @if (Auth::user()->avatar)
                        <img
                        src="{{asset(Auth::user()->avatar)}}"
                        alt="img">
                        @endif
                    </div>
                    <h1 class="text-3xl">{{Auth::user()->name}}</h1>
                </div>
            </div>
            <div class=" bg-th-bg-dark py-5 px-4">
                <div class=" flex md:justify-end justify-center  items-center gap-4 flex-wrap">
                    <a href="{{route('auth.showEditForm')}}"><button class="p-4 rounded border-2 border-th-green-dark">Редактировать</button></a>
                    <a href="{{route('auth.logout')}}"><button class="p-4 rounded border-2 border-th-green-dark">Выйти</button></a>
                </div>
            </div>
        </section>
    </main>
</x-layout>
<x-layout>
    <main>
        <section class=" max-w-screen-xl mx-auto">
            <form action="{{route('auth.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class=" p-4 bg-blue-200 flex flex-wrap">
                    <div class="lg:relative inline-flex flex-wrap justify-around top-20 left-20 items-end gap-4">
                        <div class=" grid gap-4 justify-items-center">
                            <img
                            src="https://png.pngtree.com/png-vector/20220608/ourmid/pngtree-man-avatar-isolated-on-white-background-png-image_4891418.png"
                            alt="img" class=" rounded-full bg-white size-56 ">
                            <input type="file" name="avatar" placeholder="avatar" class="text-center" accept=".png, .jpg, .jpeg">
                        </div>
                        <div class="grid gap-4">
                            <input type="text" placeholder="Name" name="name" class="p-2 text-xl rounded" value="{{Auth::user()->name}}">
                            <input type="email" placeholder="Email" name="email" class="p-2 text-xl rounded" value="{{Auth::user()->email}}">
                            <input type="password" placeholder="password" name="password" class="p-2 text-xl rounded">
                        </div>
                    </div>
                    <input type="file" name="banner" placeholder="banner">
                </div>
                <div class=" bg-th-bg-dark py-10 px-4">
                    <div class=" flex md:justify-end justify-center  items-center gap-4 flex-wrap">
                        <button type="submit" class="p-4 rounded border-2 border-th-green-dark">Сохранить</button>
                        <a href="{{route('auth.showProfile')}}"><button type="button" class="p-4 rounded border-2 border-th-green-dark">Отмена</button></a>
                    </div>
                </div>
            </form>
            @error('email')
                {{$message}}
            @enderror
            @error('name')
                {{$message}}
            @enderror
            @error('password')
                {{$message}}
            @enderror
        </section>
    </main>
</x-layout>
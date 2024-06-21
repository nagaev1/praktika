<x-layout>

    <main>
        <section class=" max-w-screen-xl mx-auto bg-th-bg-dark p-8 rounded text-xl">
            <form action="{{route('auth.login')}}" method="post">
                @csrf
                <div class="flex flex-col gap-4">
                    <h1 class="text-3xl">Вход</h1>
                    @error('email')
                        <p>{{$message}}</p>
                    @enderror
                    @error('password')
                        <p>{{$message}}</p>
                    @enderror
                    <input class="p-4 rounded" name="email" type="email" placeholder="email" autocomplete="email" required>
                    <input class="p-4 rounded" name="password" type="password" placeholder="password" autocomplete="current-password" required>
                    <button type="submit" class=" rounded bg-th-green p-4 text-white font-bold">Войти</button>
                </div>
            </form>
            <div class="text-center p-4">
                <a href="{{route('auth.showRegisterForm')}}" class="text-th-green-dark">Зарегестрироваться</a>
            </div>
        </section>
    </main>

</x-layout>
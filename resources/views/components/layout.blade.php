<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Pythagoras</title>
</head>
<body class=" bg-th-bg min-h-screen flex flex-col justify-between">
    <nav class=" bg-th-green-dark">
        <div class=" max-w-screen-xl my-4 h-full xl:px-0 px-4 mx-auto items-center text-white flex flex-wrap gap-4">
            <a href="{{route('index')}}" class="italic font-black text-3xl">Pythagoras</a>
            <a href="{{route('sciences')}}" class="font-black text-xl">Начать учиться</a>
        </div>
    </nav>
    {{$slot}}
    <footer class="bg-th-green-dark py-10">
        <div class="max-w-screen-xl mx-auto">
            <div class=" text-white min-w-96 font-bold xl:px-0 px-4">
                <p>
                    Авторы : Даниил Сотков Артемович и Нагаев Тимофей Алексанрович.
                </p>
                <p>
                    Телефон связи:89609326956
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
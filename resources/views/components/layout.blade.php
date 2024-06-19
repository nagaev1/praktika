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
    <nav class="h-20 bg-th-green-dark ">
        <div class=" max-w-screen-xl xl:px-0 px-4 mx-auto h-full flex items-center italic font-black text-3xl text-white">
            <a href="{{route('index')}}">Pythagoras</a>
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
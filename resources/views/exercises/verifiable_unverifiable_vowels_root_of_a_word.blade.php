<div>
    <h1 class="mb-4">1. Выбери соответствующие рисунку утверждение</h1>
    <img src="{{url('images/paralel-line.png')}}" alt="img" class=" w-[30rem] max-w-full mx-auto">
    <h2>Данные прямые</h2>
    <input value="true" type="radio" name="q1" id="q1-a1" required>
    <label for="q1-a1">Пересекаются</label><br>
    <input value="" type="radio" name="q1" id="q1-a2">
    <label for="q1-a2">Не пересекаются</label><br>
</div>
<div>
    <h1 >2. Если две прямые на плоскости, то они пересекаются</h1>
    <input value="true" type="radio" name="q2" id="q2-a1" required>
    <label for="q2-a1">Неверно</label><br>
    <input value="" type="radio" name="q2" id="q2-a2">
    <label for="q2-a2">Верно</label><br>
</div>
<button class="text-3xl font-bold border-2 rounded border-th-green p-4" type="submit" >Проверить</button>
<div class=" " id="result">Результат: </div>
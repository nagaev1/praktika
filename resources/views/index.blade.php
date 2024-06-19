<x-layout>
    <main class=" flex-grow">
        <section class=" bg-th-green text-white min-h-64 flex items-center justify-center p-4">
            <div class=" w-[30rem] max-w-screen font-bold text-2xl text-center">
                Наш сайт предназначен для обучения школьников. Вы можете войти если у вас есть уже акаунт или если вы новый пользователь то вы можете зарегестрироватся
            </div>
        </section>
        <section class=" max-w-screen-xl mx-auto py-10">
            <div class=" grid lg:grid-cols-3 grid-cols-1 xl:p-0 p-4 justify-items-center items-center gap-10 ">
                    <img class="rounded" src="{{ url('/images/boy-read.png')}}" alt="img">
                <div class=" col-span-2 text-th-green-dark text-3xl lg:text-left text-center">
                    <h1 class="font-bold mb-8">КАК МОТРИВИРОВАТЬ ШКОЛЬНИКОВ УЧИТСЯ?</h1>
                    <p>
                    Избавтесь от рутины проверки тетрадей и составления отчетов. Система проверки работы школьников работает автоматитески. Интеграция Pythagoras
                    с вашим ребеноком поможет улучшить его оценки и знания.
                    </p>
                </div>
            </div>
        </section>
        <section class=" bg-th-green py-10">
            <div class=" max-w-screen-xl mx-auto grid lg:grid-cols-3 grid-cols-1 items-center justify-items-center gap-10 xl:p-0 p-4">
                <div class=" col-span-2 text-white text-3xl order-2 lg:order-1 lg:text-right text-center">
                    <h1 class="font-bold mb-8">НАША ЗАДАЧА</h1>
                    <p>
                        облегчить обучение ребёнка и предоставить вам темы для обучения и задания для выполнения с помощью которых вы сможете  узнать ваши знания в теме
                    </p>
                </div>
                <img class="rounded lg:order-2 order-1 w-96" src="{{ url('/images/school-icon.png')}}" alt="img">
            </div>
        </section>
        <section class="py-10 max-w-screen-xl mx-auto grid lg:grid-cols-2 grid-cols-1 justify-items-center items-center gap-10 xl:px-0 px-4"> 
            <img class="rounded" src="{{ url('/images/work-place.png')}}" alt="img">
            <div class=" text-3xl text-th-green-dark lg:text-left text-center">
                <h1 class="font-bold mb-8">НАШИ ПОКАЗАТЕЛИ</h1>
                <p>
                    На нашем сайте вы сможете найти 10 тем для обучения и около 100 заданий для проверки своих знаний. Наши уроки сделаны на основе лекций профессоров наук. Для того чтобы зарегестрироватся вам нужно нажать на кнопку в правом верхнем углу и пройти регистрацию. А для входа на сайт нажмите на кнопку вход и введите свои данные 
                </p>
            </div>
        </section>
    </main>
</x-layout>
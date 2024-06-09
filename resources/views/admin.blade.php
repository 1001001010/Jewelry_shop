@extends('layouts.app')

@section('content')
    <section id="hero" class="w-full text-white text-center font-Comfortaa text-3xl py-4 bg-[#754133]">
        <p>Админ панель</p>
    </section>
    <main class="flex flex-col items-center justify-center grow gap-14 container mx-auto max-w-[1280px] px-4 py-10">
        <div class="flex flex-col items-center gap-4 w-full md:w-1/2 xl:w-1/3">
            <p class="text-2xl font-Comfortaa">Добавление товара</p>
            <input type="text" placeholder="Наименование товара"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Артикул"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Цена"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="file" placeholder="Цена"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Металл"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Вставки"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Вес вставки"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Вес украшений"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <button
                class="w-full md:w-[260px] px-4 py-1.5 rounded-xl border border-black border-dashed text-center">Добавить</button>
        </div>
        <div class="flex flex-col items-center gap-4 w-full md:w-1/2 xl:w-1/3">
            <p class="text-2xl font-Comfortaa">Добавление категории</p>
            <input type="text" placeholder="Наименование категории"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <input type="text" placeholder="Ссылка на категорию"
                class="rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-2 w-full">
            <button
                class="w-full md:w-[260px] px-4 py-1.5 rounded-xl border border-black border-dashed text-center">Добавить</button>
        </div>
    </main>
@endsection

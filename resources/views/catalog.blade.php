@extends('layouts.app')

@section('content')
    <div class="flex max-lg:flex-col gap-6">
        <div class="flex flex-col gap-6 p-4 rounded-xl bg-white shadow-[0px_0px_13px_-3px_#885041] w-full lg:w-1/3 h-fit">
            <div class="flex flex-col gap-2">
                <p>Тип украшения</p>
                <select class="w-full rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-1">
                    <option value="Украшение 1">Украшение 1</option>
                    <option value="Украшение 2">Украшение 2</option>
                    <option value="Украшение 3">Украшение 3</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <p>Металл</p>
                <select class="w-full rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-1">
                    <option value="Металл 1">Металл 1</option>
                    <option value="Металл 2">Металл 2</option>
                    <option value="Металл 3">Металл 3</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <p>Проба металла</p>
                <select class="w-full rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-1">
                    <option value="Проба 1">Проба 1</option>
                    <option value="Проба 2">Проба 2</option>
                    <option value="Проба 3">Проба 3</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <p>Коллекция</p>
                <select class="w-full rounded-xl border border-[#885041]/50 focus:outline-none px-4 py-1">
                    <option value="Коллекция 1">Коллекция 1</option>
                    <option value="Коллекция 2">Коллекция 2</option>
                    <option value="Коллекция 3">Коллекция 3</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <p>Цена</p>
                <div class="flex items-center gap-2">
                    <input type="text" class="px-4 py-1 border border-[#885041]/50 w-1/2 rounded-l-xl" placeholder="От">
                    <input type="text" class="px-4 py-1 border border-[#885041]/50 w-1/2 rounded-r-xl" placeholder="До">
                </div>
            </div>
            <button
                class="w-full px-4 py-1 rounded-xl bg-[#885041] text-white transition-all duration-500 border border-[#885041] hover:text-[#885041] hover:bg-transparent text-center">Применить</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full lg:w-2/3 h-fit">
            <div class="rounded-xl flex flex-col items-center text-center gap-4 bg-white p-4">
                <a href="product.html" class="hover:animate-pulse">
                    <img src="{{ asset('Images/products/1.png') }}" alt=""
                        class="w-full border border-black border-dashed rounded-xl">
                </a>
                <p class="font-Comfortaa">КОЛЛЕКЦИЯ BALANCE</p>
                <p class="text-lg">от 443 000 рублей </p>
                <button class="w-full px-4 py-1 rounded-xl border border-black border-dashed text-center">В корзину</button>
            </div>
            <div class="rounded-xl flex flex-col items-center text-center gap-4 bg-white p-4">
                <a href="product.html" class="hover:animate-pulse">
                    <img src="{{ asset('Images/products/1.png') }}" alt=""
                        class="w-full border border-black border-dashed rounded-xl">
                </a>
                <p class="font-Comfortaa">КОЛЛЕКЦИЯ BALANCE</p>
                <p class="text-lg">от 443 000 рублей </p>
                <button class="w-full px-4 py-1 rounded-xl border border-black border-dashed text-center">В корзину</button>
            </div>
            <div class="rounded-xl flex flex-col items-center text-center gap-4 bg-white p-4">
                <a href="product.html" class="hover:animate-pulse">
                    <img src="{{ asset('Images/products/1.png') }}" alt=""
                        class="w-full border border-black border-dashed rounded-xl">
                </a>
                <p class="font-Comfortaa">КОЛЛЕКЦИЯ BALANCE</p>
                <p class="text-lg">от 443 000 рублей </p>
                <button class="w-full px-4 py-1 rounded-xl border border-black border-dashed text-center">В корзину</button>
            </div>
            <div class="rounded-xl flex flex-col items-center text-center gap-4 bg-white p-4">
                <a href="product.html" class="hover:animate-pulse">
                    <img src="{{ asset('Images/products/1.png') }}" alt=""
                        class="w-full border border-black border-dashed rounded-xl">
                </a>
                <p class="font-Comfortaa">КОЛЛЕКЦИЯ BALANCE</p>
                <p class="text-lg">от 443 000 рублей </p>
                <button class="w-full px-4 py-1 rounded-xl border border-black border-dashed text-center">В корзину</button>
            </div>
            <div class="rounded-xl flex flex-col items-center text-center gap-4 bg-white p-4">
                <a href="product.html" class="hover:animate-pulse">
                    <img src="{{ asset('Images/products/1.png') }}" alt=""
                        class="w-full border border-black border-dashed rounded-xl">
                </a>
                <p class="font-Comfortaa">КОЛЛЕКЦИЯ BALANCE</p>
                <p class="text-lg">от 443 000 рублей </p>
                <button class="w-full px-4 py-1 rounded-xl border border-black border-dashed text-center">В корзину</button>
            </div>
            <div class="rounded-xl flex flex-col items-center text-center gap-4 bg-white p-4">
                <a href="product.html" class="hover:animate-pulse">
                    <img src="{{ asset('Images/products/1.png') }}" alt=""
                        class="w-full border border-black border-dashed rounded-xl">
                </a>
                <p class="font-Comfortaa">КОЛЛЕКЦИЯ BALANCE</p>
                <p class="text-lg">от 443 000 рублей </p>
                <button class="w-full px-4 py-1 rounded-xl border border-black border-dashed text-center">В корзину</button>
            </div>
        </div>
    </div>
@endsection

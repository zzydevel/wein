@extends('layouts.app')

@section('css')
    <style>
        @font-face {
            font-family: 'Lovelace';
            src: url('/assets/fonts/lovelace_regular.otf');
        }
        .lovelace-font {
            font-family: 'Lovelace', sans-serif !important;
        }
        .h-80vh {
            height: 80vh !important
        }
        @media only screen and (min-width: 768px) {
            .h-89vh {
                height: 89vh !important
            }
        }
    </style>
@endsection

@section('content')
    <div class="flex flex-col md:flex-row py-7 gap-5 h-89vh">
        <div class="order-last md:order-first flex-1 flex flex-col justify-around">
            <p class="lovelace-font text-3xl 2xl:text-5xl tracking-wider leading-relaxed font-medium">
                Website
                <br>
                Undangan
                <br>
                Pernikahan
            </p>
            <div>
                <img src="/assets/img/gambar2.png" alt="" class="h-56 rounded-lg mb-5">
                <p class="font-semibold">Pernikahan</p>
                <p class="my-3">Cupcake ipsum dolor sit amet toffee candy chocolate. Chocolate bar tart jujubes jelly beans fruitcake. Gummi bears gummi bears pudding candy.</p>
                <p class="flex flex-row gap-2 font-medium">
                    Contact Us
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </p>
            </div>
        </div>
        {{-- Jika untuk mobile, ini bisa dihilangkan --}}
        <div class="order-first md:order-last flex-1 flex justify-center h-full">
            <img src="/assets/img/gambar1.png" alt="" class="float-right h-80vh md:h-full">
        </div>
    </div>
    <div class="flex flex-col justify-center items-center w-full py-16 md:py-28">
        <p class="text-3xl font-bold lovelace-font m-10">Tentang {{ env('APP_NAME') }}</p>
        <p class="w-full md:w-3/5 text-xl tracking-wide text-center">Cupcake ipsum dolor sit amet toffee candy chocolate. Chocolate bar tart jujubes jelly beans fruitcake. Gummi bears gummi bears pudding candy canes pudding jelly beans chocolate soufflé.</p>
    </div>
    <div class="flex flex-col justify-center items-center w-full py-16 md:py-28">
        <p class="text-3xl font-bold lovelace-font mt-10 mb-5">Tentang {{ env('APP_NAME') }}</p>
        <p class="w-full md:w-3/5 text-xl text-center">Cupcake ipsum dolor sit amet toffee candy chocolate chocolate bar.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 w-full mt-10">
            <div class="border border-gray-200 p-10 rounded">
                <p class="font-semibold text-center">Pink Sugus</p>
                <div class="flex flex-row justify-center items-center w-full">
                    <div class="rounded-full mt-3 mb-5 text-sm py-1 px-4 bg-green-400 text-white">
                        Termurah
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <p class="flex flex-row gap-2">
                        {{-- <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> --}}
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Edit Tanpa Batas
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Smart Editor
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Reservation
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Unlimited Nama Tamu
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Build On Your Own
                    </p>
                </div>
                <div class="flex flex-row my-7 gap-2">
                    <sub class="text-sm">IDR</sub>
                    <p class="font-semibold text-red-400 text-4xl">190.00</p>
                </div>
                <div class="border-t border-gray-200 w-full text-center pt-7 text-green-500 font-semibold">
                    Ambil Paket
                </div>
            </div>
            <div class="border border-gray-200 p-10 rounded">
                <p class="font-semibold text-center">Blueberry Punch</p>
                <div class="flex flex-row justify-center items-center w-full">
                    <div class="rounded-full mt-3 mb-5 text-sm py-1 px-4 bg-green-400 text-white">
                        Diskon 34%
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Edit Tanpa Batas
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Smart Editor
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Reservation
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Unlimited Nama Tamu
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Build On Your Own
                    </p>
                    {{-- <svg class="w-6 h-6 mt-2 stroke-current w-full text-center text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path></svg> --}}
                </div>
                <div class="flex flex-row my-7 gap-2">
                    <sub class="text-sm">IDR</sub>
                    <p class="font-semibold text-red-400 text-4xl">190.00</p>
                </div>
                <div class="border-t border-gray-200 w-full text-center pt-7 text-indigo-500 font-semibold">
                    Lihat Fitur Lengkap
                </div>
            </div>
            <div class="border border-gray-200 p-10 rounded">
                <p class="font-semibold text-center">Kiwi Mojito</p>
                <div class="flex flex-row justify-center items-center w-full">
                    <div class="rounded-full mt-3 mb-5 text-sm py-1 px-4 bg-red-400 text-white">
                        Diskon 75%
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Edit Tanpa Batas
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Smart Editor
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Reservation
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Unlimited Nama Tamu
                    </p>
                    <p class="flex flex-row gap-2">
                        <svg class="w-6 h-6 stroke-current text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Build On Your Own
                    </p>
                </div>
                <div class="flex flex-row my-7 gap-2">
                    <sub class="text-sm">IDR</sub>
                    <p class="font-semibold text-red-400 text-4xl">190.00</p>
                </div>
                <div class="border-t border-gray-200 w-full text-center pt-7 text-indigo-500 font-semibold">
                    Lihat Fitur Lengkap
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-10">
        <div class="flex flex-row justify-center items-center">
            <div class="w-1/2">
                <p class="font-semibold lovelace-font text-3xl">Unlimited Nama Tamu</p>
                <p class="text-lg">Tidak ada batas penerima undangan. Kamu bisa kirim undangan nikah kamu berapa pun dan langsung kirim via Whatsapp!</p>
            </div>
            <div class="w-1/2">
                <img src="/assets/img/to_do_list.svg" alt="" class="h-72 float-right">
            </div>
        </div>
        <div class="flex flex-row justify-center items-center">
            <div class="w-1/2">
                <img src="/assets/img/timeline.svg" alt="" class="h-72">
            </div>
            <div class="w-1/2">
                <p class="font-semibold lovelace-font text-3xl">Tambah Acara</p>
                <p class="text-lg">Dapat menampilkan acara tambahan, sekaligus mengubah istilah acara sesuai agama atau budaya kamu!</p>
            </div>
        </div>
        <div class="flex flex-row justify-center items-center">
            <div class="w-1/2">
                <p class="font-semibold lovelace-font text-3xl">Pilih Desain</p>
                <p class="text-lg">Tersedia banyak pilihan tema untuk kamu gunakan, gunakan warna, foto, ornamen sesuka kamu!</p>
            </div>
            <div class="w-1/2">
                <img src="/assets/img/product_tour.svg" alt="" class="h-72 float-right">
            </div>
        </div>
    </div>
    <div class="w-full py-16 md:py-28">
        <p class="text-3xl font-bold lovelace-font m-10 text-center">Fitur {{ env('APP_NAME') }}</p>
        <div class="flex flex-wrap justify-center items-center gap-10">
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-10 my-10">
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-10">
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
            <div class="flex flex-col justify-center items-center">
                <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                Design Pilihan
            </div>
        </div>
    </div>
@endsection
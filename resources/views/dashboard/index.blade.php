@extends('layouts.template')
@section('title', 'Dashboard')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <div class="grid md:grid-cols-3 sm:grid-cols-1 text-center gap-4">
                <div class="flex flex-col rounded-2xl w-auto bg-teal-500">
                    <div class="flex flex-col p-4">
                        <div class="text-5xl font-bold text-center text-white pb-6">{{ $totalBarang }}</div>
                        <div class=" text-lg text-center text-white">Barang</div>
                    </div>
                    <a class=" text-white bg-teal-700 p-4 rounded-b-2xl font-semibold flex flex-row justify-center" href="{{ route('produk.index') }}">
                        More Info
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 ms-1">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="flex flex-col rounded-2xl w-auto bg-orange-500">
                    <div class="flex flex-col p-4">
                        <div class="text-5xl font-bold text-center text-white pb-6">{{ $totalPenjualan }}</div>
                        <div class=" text-lg text-center text-white">Total Penjualan</div>
                    </div>
                    <a class=" text-white bg-orange-800 p-4 rounded-b-2xl font-semibold flex flex-row justify-center" href="{{ route('penjualan.index') }}">
                        More Info
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 ms-1">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="flex flex-col rounded-2xl w-auto bg-lime-500">
                    <div class="flex flex-col p-4 mb-2">
                        <div class="text-4xl font-bold text-center text-white pb-6">Rp. {{ $totalProfit }}</div>
                        <div class=" text-lg text-center text-white">Total Pendapatan</div>
                    </div>
                    <a class=" text-white bg-lime-700 p-4 rounded-b-2xl font-semibold flex flex-row justify-center" href="#">
                        More Info
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 ms-1">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

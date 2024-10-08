@extends('layouts.template')
@section('title', 'Produk')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <div class="container bg-white shadow-lg rounded-xl w-full mx-auto p-2">
                <div class="flex flex-row p-4 justify-between ">
                    <h1 class="text-4xl font-semibold">Produk</h1>
                    <a href="{{ route('produk.index') }}"
                        class="bg-sky-600 font-semibold rounded-lg text-lg p-2 text-white shadow-md hover:shadow-sky-700">List
                        Produk</a>
                </div>
                <div class="container p-4">
                    <form class="max-w-lg" method="post" action="{{ route('produk.store') }}">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Kategori</label>
                            <select name="kategori_id"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Pilih Kategori</option>
                                @foreach ($kategoris as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Produk</label>
                            <input type="text" id="name" name="name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 ">Stok</label>
                            <input type="number" name="stok"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 ">Modal per Unit</label>
                            <input type="number" name="modal"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 ">Harga per Unit</label>
                            <input type="number" name="harga" id="numberInput"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

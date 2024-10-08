@extends('layouts.template')
@section('title', 'Kategori')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <div class="container bg-white shadow-lg rounded-xl w-full mx-auto p-2">
                <div class="flex flex-row p-4 justify-between ">
                    <h1 class="text-4xl font-semibold">Kategori</h1>
                    <a href=""
                        class="bg-sky-600 rounded-lg text-lg p-2 text-white shadow-md hover:shadow-sky-700">Tambah Data</a>
                </div>
                <div class="container p-4">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-white">
                            <thead class="text-xs text-white uppercase bg-sky-950">
                                <tr>
                                    <th scope="col" class="px-3 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Kategori
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $k => $ktg)
                                    <tr class=" odd:bg-gray-900 even:bg-gray-800 border-b border-gray-700">
                                        <td class="px-3 py-4">
                                            {{ $k + 1 }}
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium  whitespace-nowrap">
                                            {{ $ktg->nama }}
                                        </th>
                                        <td class="px-6 py-4 flex flex-row gap-2">
                                            <a href="#" class="font-bold text-white hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="size-8 bg-yellow-500 rounded-md p-1">
                                                    <path
                                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                </svg>

                                            </a>
                                            <a href="#" class="font-bold text-white hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="size-8 bg-rose-500 rounded-md p-1">
                                                    <path fill-rule="evenodd"
                                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@extends('app')

@section('title', 'Daftar Campaign')

@section('content')

@if(session('success'))
    <div class="mb-4 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="flex items-center justify-between mb-4">
    <h1 class="text-2xl font-bold">Daftar Campaign</h1>
    <a href="{{ route('campaigns.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</a>
</div>

<table class="table-auto w-full mt-4 bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-2">Judul</th>
            <th class="p-2">Target</th>
            <th class="p-2">Terkumpul</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($campaigns as $c)
        <tr class="border-t">
            <td class="p-2">{{ $c->title }}</td>
            <td class="p-2">{{ $c->target_donation }}</td>
            <td class="p-2">{{ $c->collected_donation }}</td>
            <td class="p-2 space-x-2">
                <a href="{{ route('campaigns.show', $c->id) }}" class="text-blue-600 hover:underline">Detail</a>
                <a href="{{ route('campaigns.edit', $c->id) }}" class="text-green-600 hover:underline">Edit</a>
                <form action="{{ route('campaigns.destroy', $c->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus campaign ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
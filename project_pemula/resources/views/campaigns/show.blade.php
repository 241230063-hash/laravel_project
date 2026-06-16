@extends('app')

@section('title', 'Detail Campaign')

@section('content')
<div class="bg-white shadow rounded p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $campaign->title }}</h1>
    <p class="mb-2"><strong>Target Donasi:</strong> {{ $campaign->target_donation }}</p>
    <p class="mb-2"><strong>Terkumpul:</strong> {{ $campaign->collected_donation }}</p>
    <p class="mb-2"><strong>Deadline:</strong> {{ $campaign->deadline }}</p>
    <p class="mb-4"><strong>Deskripsi:</strong> {{ $campaign->description ?? 'Tidak ada deskripsi' }}</p>

    <div class="space-x-3">
        <a href="{{ route('campaigns.edit', $campaign->id) }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Edit</a>
        <form action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Yakin ingin menghapus campaign ini?')">Hapus</button>
        </form>
        <a href="{{ route('campaigns.index') }}" class="text-blue-600 hover:underline">Kembali</a>
    </div>
</div>
@endsection

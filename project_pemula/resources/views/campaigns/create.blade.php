@extends('app')

@section('title', 'Tambah')

@section('content')
<div class="bg-white shadow rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah</h1>

    @if($errors->any())
        <div class="mb-4 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('campaigns.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Judul</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Deskripsi</label>
            <textarea name="description" class="w-full border rounded px-3 py-2" rows="4">{{ old('description') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Target Donasi</label>
            <input type="number" name="target_donation" value="{{ old('target_donation') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Terkumpul</label>
            <input type="number" name="collected_donation" value="{{ old('collected_donation', 0) }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Deadline</label>
            <input type="date" name="deadline" value="{{ old('deadline') }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="flex items-center space-x-3">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            <a href="{{ route('campaigns.index') }}" class="text-blue-600 hover:underline">Batal</a>
        </div>
    </form>
</div>
@endsection

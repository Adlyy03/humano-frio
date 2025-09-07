<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex justify-center items-start p-8">

<div class="w-full max-w-lg bg-white shadow rounded-xl p-6">
    <h1 class="text-2xl font-semibold mb-4">Edit Anggota</h1>

    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label class="block mb-2 font-medium">Nama</label>
        <input type="text" name="nama" value="{{ $anggota->nama }}" class="w-full border px-3 py-2 rounded mb-4" required>

        <label class="block mb-2 font-medium">Role</label>
        <input type="text" name="role" value="{{ $anggota->role }}" class="w-full border px-3 py-2 rounded mb-4" required>

        <label class="block mb-2 font-medium">Jabatan</label>
        <input type="text" name="jabatan" value="{{ $anggota->jabatan }}" class="w-full border px-3 py-2 rounded mb-4">

        <label class="block mb-2 font-medium">Foto Saat Ini</label>
        @if($anggota->foto)
            <img src="{{ asset($anggota->foto) }}" alt="{{ $anggota->nama }}" class="w-24 h-24 object-cover rounded mb-4">
        @endif

        <label class="block mb-2 font-medium">Ganti Foto</label>
        <input type="file" name="foto" class="w-full mb-4">

        <div class="flex justify-between">
            <a href="{{ route('anggota.index') }}" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded">
                Kembali
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                Update
            </button>
        </div>
    </form>
</div>

</body>
</html>

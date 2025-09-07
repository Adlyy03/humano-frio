<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex justify-center items-start p-8">

<div class="w-full max-w-lg bg-white shadow rounded-xl p-6">
    <h1 class="text-2xl font-semibold mb-4">Tambah Anggota Baru</h1>

    <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label class="block mb-2 font-medium">Nama</label>
        <input type="text" name="nama" class="w-full border px-3 py-2 rounded mb-4" required>

        <label class="block mb-2 font-medium">Role</label>
        <input type="text" name="role" class="w-full border px-3 py-2 rounded mb-4" required>

        <label class="block mb-2 font-medium">Jabatan</label>
        <input type="text" name="jabatan" class="w-full border px-3 py-2 rounded mb-4" required>

        <label class="block mb-2 font-medium">Email</label>
        <input type="email" name="email" class="w-full border px-3 py-2 rounded mb-4" required>

        <label class="block mb-2 font-medium">Foto</label>
        <input type="file" name="foto" class="w-full mb-4" accept="image/*" onchange="previewImage(event)">

        <!-- Preview Foto -->
        <div class="mb-4">
            <img id="preview" src="" alt="Preview Foto" class="w-32 h-32 object-cover rounded-full hidden">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded">
                Kembali
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                Simpan
            </button>
        </div>
    </form>
</div>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = '';
        preview.classList.add('hidden');
    }
}
</script>

</body>
</html>

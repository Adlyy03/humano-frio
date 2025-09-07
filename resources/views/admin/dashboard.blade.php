<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white flex flex-col min-h-screen">
        <div class="p-6 text-2xl font-bold border-b border-gray-700">
            Admin Panel
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-800">Dashboard</a>
            <a href="{{ route('anggota.index') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-800">Manajemen Anggota</a>
        </nav>
        <form method="POST" action="{{ route('admin.logout') }}" class="p-4 border-t border-gray-700">
            @csrf
            <button type="submit" class="w-full px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700 transition">
                Logout
            </button>
        </form>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-2xl font-semibold mb-6">
            Selamat datang, <span class="text-blue-600">{{ auth()->user()->name }}</span> 👋
        </h1>

        <!-- Tombol tambah anggota -->
        <a href="{{ route('anggota.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg mb-4 inline-block">
            Tambah Anggota
        </a>

        <!-- Tabel anggota -->
        <div class="overflow-x-auto bg-white shadow rounded-xl">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Role</th>
                        <th class="px-4 py-2 border">Jabatan</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Foto</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anggotas as $anggota)
<tr class="hover:bg-gray-100">
    <td class="border px-4 py-2">{{ $anggota->id }}</td>
    <td class="border px-4 py-2">{{ $anggota->nama }}</td>
    <td class="border px-4 py-2">{{ $anggota->role }}</td>
    <td class="border px-4 py-2">{{ $anggota->jabatan }}</td>
    <td class="border px-4 py-2">{{ $anggota->email }}</td>
    <td class="border px-4 py-2">
        <img src="{{ asset($anggota->foto) }}" alt="{{ $anggota->nama }}" class="w-16 h-16 object-cover rounded-full">
    </td>
    <td class="border px-4 py-2 flex gap-2">
        <a href="{{ route('anggota.edit', $anggota->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
            Edit
        </a>
        <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                Hapus
            </button>
        </form>
    </td>
</tr>
@endforeach

                </tbody>
            </table>
        </div>
    </main>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-8">
    <div>
        <table class="w-full border border-gray-300">
            <!-- Bagian Header -->
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-center border">Nomor</th>
                    <th class="px-4 py-2 text-center border">Judul</th>
                    <th class="px-4 py-2 text-center border">Isi</th>
                    <th class="px-4 py-2 text-center border">Action</th>
                </tr>
            </thead>
            <!-- Bagian Body -->
            <tbody class="divide-y divide-gray-300">
                <tr>
                    <td class="px-4 py-4 text-center">1</td>
                    <td class="px-4 py-4">Testing</td>
                    <td class="px-4 py-4">Ini adalah testing</td>
                    <td class="px-4 py-4">
                        <div class="flex items-center justify-center gap-4">
                            <button class="text-red-500 hover:underline">Hapus</button>
                            <button class="text-blue-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-4 py-4 text-center">2</td>
                    <td class="px-4 py-4">Halo</td>
                    <td class="px-4 py-4">Ini adalah Halo</td>
                    <td class="px-4 py-4">
                        <div class="flex items-center justify-center gap-4">
                            <button class="text-red-500 hover:underline">Hapus</button>
                            <button class="text-blue-500 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
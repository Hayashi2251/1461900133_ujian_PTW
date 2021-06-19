<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-auto flex items-center justify-center" style="background: #edf2f7;">
    <body class="antialiased font-sans bg-gray-200">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 w-full justify-between">
                <h2 class="text-2xl font-semibold">Tambah Laporan Buku</h2>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-auto">
                <form action=" {{route('laporan.store')}} " method="POST">
                @csrf
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-left xs:justify-between">
                    <span class="text-md font-semibold">Tanggal</span>
                    <input id="tanggal" name="tanggal" type="date" placeholder="YYYY-MM-DD" class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" min="2015-01-01" max="2030-12-31"/>

                    <span class="text-md font-semibold">Jumlah</span>
                    <input id="jml_buku" name="jml_buku" type="number" placeholder="0" class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"/>
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button type="submit" class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Simpan
                            </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

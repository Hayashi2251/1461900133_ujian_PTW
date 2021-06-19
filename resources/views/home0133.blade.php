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
                <span class="text-2xl font-semibold">Laporan Buku</span>
                <div class="flex flex-row text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Plus_font_awesome.svg/240px-Plus_font_awesome.svg.png" width="22" height="16">
                    <a href="{{route('laporan.tambah')}}" class="px-4 border">Tambah Data</a>
                </div>
                
            </div>
            <div class="flex flex-row mb-1 sm:mb-0 w-full">
            <!-- tambah disini  -->
                
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-auto">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    @sortablelink('id','ID')
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    @sortablelink('tanggal','Tanggal')
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    @sortablelink('jml_buku','Jumlah')
                                </th>
                                <th class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lap as $data)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$data->id}}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{$data->tanggal}}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{$data->jml_buku}}
                                </td>
                                <td class="flex item-center py-5 border-b border-gray-200 bg-white text-sm  space-x-4">
                                    <a href="{{route('laporan.edit',['id' => $data->id])}}" class="text-sm bg-green-400 hover:bg-green-200 text-gray-800 font-semibold py-2 px-4 rounded">Edit</a>&nbsp;&nbsp;
                                    <form action="{{route('laporan.hapus',['id' => $data->id])}}" method="post">
                                    @csrf
                                        <button type="submit" class="text-sm bg-red-400 hover:bg-red-200 text-gray-800 font-semibold py-2 px-4 rounded">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Klik dibawah ini untuk ekspor Excel
                        </span>
                        <div class="inline-flex mt-2 xs:mt-0">
                            <a href="{{route('laporan.ekspor')}}" class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Download
                            </a>
                        </div>
                        {!! $lap->appends(\Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

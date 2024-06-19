<x-layout>
    <x-slot:user>{{ $user }}</x-slot:user>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabel</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Tabel</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Tabel
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($data_mahasiswa) && $data_mahasiswa->isNotEmpty())
                                <?php $i = 1; ?>
                                @foreach ($data_mahasiswa as $mhs)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $mhs->nama }}</td>
                                        <td>{{ $mhs->nisn }}</td>
                                        <td>{{ $mhs->kelas }}</td>
                                        <td>{{ $mhs->jenis_kelamin }}</td>
                                        <td>{{ $mhs->kehadiran }}</td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            @else
                            @endif
                        </tbody>
                    </table>
                    @if ( isset($formatted_timestamp) )
                        <p><b>Terakhir diupdate: </b> {{ $formatted_timestamp }}</p>
                    @else
                        <p><b>Belum ada update data</b></p>
                    @endif
                </div>
            </div>
        </div>
    </main>
</x-layout>
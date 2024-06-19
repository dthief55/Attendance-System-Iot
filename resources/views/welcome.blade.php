<x-layout>
    <x-slot:user>{{ $user }}</x-slot:user>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Kehadiran Siswa</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Tombol 1</div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Tombol 2</div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Tombol 3</div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Tombol 4</div>
                    </div>
                </div>
            </div>
            
            <!-- Area Chart Example -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Grafik Area
                        </div>
                        <div class="card-body"><canvas id="grafikTotal" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <!-- Bar Chart Example -->
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Grafik Bar
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Tabel
                </div>
                <div class="card-body">
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
        </div>
    </main>
</x-layout>
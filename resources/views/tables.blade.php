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
                    Contoh Data Tabel
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Kehadiran</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Kelas</th>
                                <th>Kehadiran</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Valentino Wahyu Pratama</td>
                                <td>3332210021</td>
                                <td>A</td>
                                <td>Hadir</td>
                                <td>Pria</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Gabriel Fernando</td>
                                <td>3332210047</td>
                                <td>B</td>
                                <td>Tidak Hadir</td>
                                <td>Pria</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Hadid Tamir</td>
                                <td>3332210060</td>
                                <td>C</td>
                                <td>Hadir</td>
                                <td>Pria</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-layout>
<div class="container">
        <h2>Tabel User</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Sekolah</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Agama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>NISN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=$oh['Nama_lengkap'] ?></td>
                    <td><?=$oh['sekul'] ?></td>
                    <td><?=$oh['Tempat_lahir'] ?></td>
                    <td><?=$oh['Tanggal_lahir'] ?></td>
                    <td><?=$oh['Jenis_kelamin'] ?></td>
                    <td><?=$oh['Alamat'] ?></td>
                    <td><?=$oh['Nomor_telepon'] ?></td>
                    <td><?=$oh['Agama'] ?></td>
                    <td><?=$oh['Email'] ?></td>
                    <td><?=$oh['jurusann'] ?></td>
                    <td><?=$oh['NISN'] ?></td>
                </tr>
                <!-- Tambahkan data lain di sini -->
            </tbody>
        </table>
    </div>

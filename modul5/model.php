<?php
    require('Koneksi.php');

    // ===== Tampil ===== //

    function tampilBuku() {
        global $conn;
        $buku = mysqli_query($conn, "SELECT * FROM buku");

        foreach ($buku as $bk) {
            echo "<tr>";
            echo "<td>". $bk['id_buku'] . "</td>";
            echo "<td>". $bk['judul_buku'] . "</td>";
            echo "<td>". $bk['penulis'] . "</td>";
            echo "<td>". $bk['penerbit'] . "</td>";
            echo "<td>". $bk['tahun_terbit'] . "</td>";
            echo "<td>". "<a href = 'FormBuku.php?id_buku=" . $bk['id_buku'] . "'> Edit </a> <br>";
            echo "<a href = 'Buku.php?id_buku=" . $bk['id_buku'] . "' onclick=\"return confirm('Yakin untuk menghapus?')\"> Hapus </a> </td>";
            echo "</tr>";
        }
    }

    function tampilMember() {
        global $conn;
        $member = mysqli_query($conn, "SELECT * FROM member");

        foreach ($member as $mb) {
            echo "<tr>";
            echo "<td>". $mb['id_member'] . "</td>";
            echo "<td>". $mb['nama_member'] . "</td>";
            echo "<td>". $mb['nomor_member'] . "</td>";
            echo "<td>". $mb['alamat'] . "</td>";
            echo "<td>". $mb['tgl_mendaftar'] . "</td>";
            echo "<td>". $mb['tgl_terakhir_bayar'] . "</td>";
            echo "<td>". "<a href = 'FormMember.php?id_member=" . $mb['id_member'] . "'> Edit </a> <br>";
            echo "<a href = 'Member.php?id_member=" . $mb['id_member'] . "' onclick=\"return confirm('Yakin untuk menghapus?')\"> Hapus </a> </td>";
            echo "</tr>";
        }
    }

    function tampilPeminjaman() {
        global $conn;
        $peminjaman = mysqli_query($conn, "SELECT * FROM peminjaman");

        foreach ($peminjaman as $pj) {
            echo "<tr>";
            echo "<td>". $pj['id_peminjaman'] . "</td>";
            echo "<td>". $pj['tgl_pinjam'] . "</td>";
            echo "<td>". $pj['tgl_kembali'] . "</td>";
            echo "<td>". $pj['id_member'] . "</td>";
            echo "<td>". $pj['id_buku'] . "</td>";
            echo "<td>". "<a href = 'FormPeminjaman.php?id_peminjaman=" . $pj['id_peminjaman'] . "'> Edit </a> <br>";
            echo "<a href = 'Peminjaman.php?id_peminjaman=" . $pj['id_peminjaman'] . "' onclick=\"return confirm('Yakin untuk menghapus?')\"> Hapus </a> </td>";
            echo "</tr>";
        }
    }

    // ===== Tambah ===== //

    function tambahBuku($id, $judul, $penulis, $penerbit, $tahun) {
        global $conn;
        $sql = "INSERT INTO buku VALUES ('$id', '$judul', '$penulis', '$penerbit', '$tahun')";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header('location:Buku.php');
        }
    }

    function tambahMember($id, $nama, $nomor, $alamat, $tgldaftar, $tglbayar) {
        global $conn;
        $sql = "INSERT INTO member VALUES ('$id', '$nama', '$nomor', '$alamat', '$tgldaftar', '$tglbayar')";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header('location:Member.php');
        }
    }

    function tambahPeminjaman($id, $tglpinjam, $tglkembali, $id_member, $id_buku) {
        global $conn;
        $sql = "INSERT INTO peminjaman VALUES ('$id', '$tglpinjam', '$tglkembali', '$id_member', '$id_buku')";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header('location:Peminjaman.php');
        }
    }

    // ===== Hapus =====//

    function hapusBuku($id_buku) {
        global $conn;
        $sql = "DELETE FROM buku WHERE id_buku = '$id_buku'";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header("location:Buku.php");
        }
    }

    function hapusMember($id_member) {
        global $conn;
        $sql = "DELETE FROM member WHERE id_member = '$id_member'";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header("location:Member.php");
        }
    }

    function hapusPeminjaman($id_peminjaman) {
        global $conn;
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header("location:Peminjaman.php");
        }
    }

    // ===== Edit ===== ///

    function editBuku() {
        global $conn;
        $sql = "SELECT * FROM buku WHERE id_buku = ". $_GET['id_buku'];
        $result = mysqli_query($conn, $sql);
        $GLOBALS['result'] = $result;
    }

    function editMember() {
        global $conn;
        $sql = "SELECT * FROM member WHERE id_member = ". $_GET['id_member'];
        $result = mysqli_query($conn, $sql);
        $GLOBALS['result'] = $result;
    }

    function editPeminjaman() {
        global $conn;
        $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = ". $_GET['id_peminjaman'];
        $result = mysqli_query($conn, $sql);
        $GLOBALS['result'] = $result;
    }

    // ===== Update ===== //

    function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
        global $conn;
        $sql = "UPDATE buku SET
            judul_buku = '$judul',
            penulis = '$penulis',
            penerbit = '$penerbit',
            tahun_terbit = '$tahun'
            WHERE id_buku = '$id'
            ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location:Buku.php");
        }
    }

    function updateMember($id, $nama, $nomor, $alamat, $tgldaftar, $tglbayar) {
        global $conn;
        $sql = "UPDATE member SET
            nama_member = '$nama',
            nomor_member = '$nomor',
            alamat = '$alamat',
            tgl_mendaftar = '$tgldaftar',
            tgl_terakhir_bayar = '$tglbayar'
            WHERE id_member = '$id'
            ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location:Member.php");
        }
    }

    function updatePeminjaman($id, $tglpinjam, $tglkembali, $id_member, $id_buku) {
        global $conn;
        $sql = "UPDATE peminjaman SET
            tgl_pinjam = '$tglpinjam',
            tgl_kembali = '$tglkembali',
            id_member = '$id_member',
            id_buku = '$id_buku'
            WHERE id_peminjaman = '$id'
            ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location:Peminjaman.php");
        }
    }

    // ===== Tampil ID ===== //

    function tampilIdBuku() {
        global $conn;
        $sql = "SELECT * FROM buku";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function tampilIdMember() {
        global $conn;
        $sql = "SELECT * FROM member";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
?>

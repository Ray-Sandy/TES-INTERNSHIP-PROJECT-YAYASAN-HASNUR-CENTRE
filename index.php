<!DOCTYPE html>
<html>
<head>
<?php
    include 'main\header.php';
?>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Online Course Management</h1>
        <h2>Kursus</h2>
        <a href="course\create_course.php" class="btn btn-primary mb-2">Tambah Kursus Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Durasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include file koneksi ke database
                include 'asset\koneksi.php';

                // Query untuk mengambil data kursus dari database
                $query = "SELECT * FROM kursus";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['deskripsi'] . "</td>";
                    echo "<td>" . $row['durasi'] . " jam</td>";
                    echo "<td><a href='course/edit_course.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a> | <a href='course\delete_course.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Materi</h2>
        <a href="material\create_material.php" class="btn btn-primary mb-2">Tambah Materi Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul Materi</th>
                    <th>Deskripsi Materi</th>
                    <th>Link Embed Materi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data materi dari database
                $query = "SELECT * FROM materi";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['deskripsi'] . "</td>";
                    echo "<td>" . $row['link_embed'] . "</td>";
                    echo "<td><a href='material/edit_material.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a> | <a href='material\delete_material.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>

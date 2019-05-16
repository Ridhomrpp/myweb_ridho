<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Anggota KPMKKA Yogyakarta</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Anggota</h3>
        <h1>KPMKKA Yogyakarta</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran anggota berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
	<?php endif; ?>

    </body>
</html>
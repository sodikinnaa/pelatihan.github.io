<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Folder</title>
</head>

<body>

    <h1>List of Folders</h1>

    <?php
    $dir = '.'; // Ganti dengan path direktori yang ingin ditampilkan

    // Membaca isi direktori
    $folders = scandir($dir);

    // Menampilkan folder dalam bentuk daftar
    echo '<ul>';
    foreach ($folders as $folder) {
        // Hanya menampilkan folder (bukan file atau direktori lainnya)
        if (is_dir($dir . '/' . $folder) && $folder != '.' && $folder != '..') {
            echo '<a href ="' . $folder . '"><li>' . $folder . '</li></a>';
        }
    }
    echo '</ul>';
    ?>

</body>

</html>
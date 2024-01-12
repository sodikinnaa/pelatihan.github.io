<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PELATIAN PKL UNIVERSITAS TEKNOKRAT INDONESIA</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .folder-list {
            list-style: none;
            padding: 0;
        }

        .folder-list li {
            font-size: 30px;
            /* Atur ukuran teks */
            margin-bottom: 10px;
        }

        .folder-list i {
            margin-right: 10px;
            /* Atur jarak antara ikon dan teks */
        }

        .folder-list a {
            color: #007BFF;
            text-decoration: none;
        }

        .folder-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>PELATIAN PKL UNIVERSITAS TEKNOKRAT INDONESIA</h1>

        <ul class="folder-list">
            <?php
            $dir = '.'; // Ganti dengan path direktori yang ingin ditampilkan

            // Membaca isi direktori
            $folders = scandir($dir);

            // Menampilkan folder dalam bentuk daftar
            foreach ($folders as $folder) {
                // Hanya menampilkan folder (bukan file atau direktori lainnya)
                if (is_dir($dir . '/' . $folder) && $folder != '.' && $folder != '..') {
                    echo '<li><i class="fas fa-folder" style="padding: 10x;""></i><a href="' . $folder . '">' . $folder . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>
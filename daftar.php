<html>
    <head>
        <title>::Data Registrasi::</title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body {
                background: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg") no-repeat center center fixed;
                background-size: cover;
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 40px 0;
            }
            .container {
                background-color: white;
                border: 3px solid grey;
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                max-width: 850px;
                width: 90%;
                margin: 0 auto; /* biar di tengah horizontal */
            }

            h1 {
                text-align: center;
                color: #333;
                margin-bottom: 25px;
                font-weight: 600;
                font-size: 28px;
            }
            .success-message {
                background-color: #d4edda;
                color: #155724;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #c3e6cb;
                border-radius: 6px;
                text-align: center;
                font-weight: 600;
            }
            .error-message {
                background-color: #f8d7da;
                color: #721c24;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #f5c6cb;
                border-radius: 6px;
                text-align: center;
                font-weight: 600;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td {
                padding: 12px;
                text-align: center;
                border: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                color: white;
                font-weight: 600;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            .back-button {
                text-align: center;
                margin-top: 15px;
            }
            .back-button a {
                background-color: #007bff;
                color: white;
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 6px;
                font-weight: 500;
                transition: background-color 0.3s;
            }
            .back-button a:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Data Registrasi User</h1>
            
            <?php if (isset($_POST['submit'])) {
                $nama_depan = $_POST['nama_depan'];
                $nama_belakang = $_POST['nama_belakang'];
                $umur = intval(value: $_POST['umur']);
                $asal_kota = $_POST['asal_kota'];
                $nama_lengkap = strtoupper(string: $nama_depan . " " . $nama_belakang);
                $asal_kota = strtoupper(string: $asal_kota);

                if ($umur < 10) {
                    echo '<div class="error-message">❌ Error: Umur minimal adalah 10 tahun!</div>';
                    echo '<div class="back-button"><a href="index.html">Kembali ke Form Registrasi</a></div>';
                } else {
                    echo '<div class="success-message">Registrasi Berhasil!</div>';
                    
                    echo '<table>';
                    echo '<tr><th>No</th><th>Nama Lengkap</th><th>Umur</th><th>Asal Kota</th></tr>';

                    $counter = 0;
                    $nomor = 1;
                    while ($counter < $umur) {
                        if ($nomor == 7 || $nomor == 13) {
                            $nomor += 2;
                            continue;
                        }

                        echo '<tr>';
                        echo '<td>' . $nomor . '</td>';
                        echo '<td>' . $nama_lengkap . '</td>';
                        echo '<td>' . $umur . ' tahun</td>';
                        echo '<td>' . $asal_kota . '</td>';
                        echo '</tr>';

                        $nomor += 2; 
                        $counter++; 
                    }

                    echo '</table>';
                    echo '<div class="back-button"><a href="index.html">Kembali ke Form Registrasi</a></div>';
                }
                        } else {
                echo '<div class="error-message">Data tidak ditemukan. Silakan isi form terlebih dahulu.</div>';
                echo '<div class="back-button"><a href="index.html">Kembali ke Form Registrasi</a></div>';
            }
            ?>
        </div>
    </body>
</html>
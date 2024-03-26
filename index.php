<?php 

$name = "Sulthon Muhtarom Putra Abadi";
$email = "sulthon.abadi28@gmail.com";
$phone = "(+62) 81231989438";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            color: #f5f5f4;
        }
    </style>

</head>
<body bgcolor="#1c1917">
    <div style="margin: 20px 10%;">
        <h1 style="margin-bottom: 10px; text-align: center;">Welcome to My Page</h1>

        <div>
            <div align="center">
                <img src="laravel-featured.jpg" alt="Laravel" width="50%" style="margin-bottom: 20px;">
            </div>
            <p style="margin-bottom: 10px;">
                Laravel merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web, apalagi PHP adalah bahasa pemrograman yang dinamis dan Laravel disini bisa bertindak untuk membuat web development lebih cepat, lebih aman, dan lebih simpel.
            </p>
            <p style="margin-bottom: 10px;">
                Laravel memberikan seperangkat alat dan sumber daya untuk membangun aplikasi berbasis PHP. Laravel memiliki ekosistem yang lengkap didukung oleh package dan ekstensi yang kompatibel. Laravel telah tumbuh pesat dan semakin besar dalam beberapa tahun terakhir. Hal ini juga ditunjukan dengan semakin besarnya minat developer untuk menggunakan framework Laravel karena dapat menyederhanakan pengembangan aplikasi.
            </p>
            <p style="margin-bottom: 10px;">
                Framework ini diluncurkan pada tanggal 9 Juni 2011 oleh Taylor Otwell. Awalnya tujuan dari Laravel adalah sebagai alternatif dari Codelgniter. Taylor Otwell melihat bahwa framework PHP lainnya yaitu Codelgniter belum menyediakan fitur tertentu seperti dukungan bawaan untuk otentikasi dan otorisasi pengguna. Sejak saat itu Laravel sudah mengeluarkan berbagai pembaruan dan penambahan fitur. Saat ini laravel sudah sampai ke versi 9 dengan berbagai fitur unggulan.
            </p>
            <p style="margin-bottom: 10px;">
                Laravel sendiri bekerja di sisi back-end atau istilahnya server-side. Selain powerful, Laravel juga mudah untuk dimengerti. Dengan mengikuti pola arsitektur model-view-controller (MVC) Laravel bisa mempercepat proses pembuatan aplikasi web. Pada arsitektur MVC, development bisa dilakukan dengan lebih cepat karena developer bisa fokus ke salah satu bagian saja seperti model (bagian yang mengelola database), view (bagian yang mengelola tampilan kepada user), dan bagian controller (bagian yang menghubungkan model dan view jika seandainya ada permintaan dari user).
            </p>
            <p style="margin-bottom: 10px;">
                Framework Laravel memiliki fitur yang kaya karena merupakan gabungan fitur dasar beberapa framework PHP populer seperti CodeIgniter, Yii, dan Ruby on Rails. Jika kamu sebelumnya sudah familiar dengan Core PHP atau Advance PHP, Laravel akan membuat proses pengembangan aplikasi web lebih efektif dan efisien, selain itu Laravel juga lebih aman dari berbagai jenis ancaman siber.
            </p>
        </div>

        <div>
            <fieldset>
                <legend>
                    <font size="5" color="green" face="calibri">
                        Tentang Saya
                    </font>
                </legend>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td> : <?= $name; ?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td> : <?= $email; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td> : <?= $phone; ?></td>
                    </tr>
                </table>
                <ol type="A">
                    <li>Pendidikan</li>
                    <ul type="square">
                        <li>SD Al-Irsyad</li>
                        <li>SMP Bhakti Pertiwi</li>
                        <li>SMAN 1 Kraksaan</li>
                        <li>Politeknik Negeri Jember</li>
                        <ol type="a">
                            <li>Semester 1</li>
                            <li>Semester 2</li>
                            <li>Semester 3</li>
                            <li>Semester 4</li>
                            <li>Semester 5</li>
                        </ol>
                    </ul>
                    <li>Teknologi yang dikuasai</li>
                    <ul type="disc">
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>Livewire</li>
                        <li>AlpineJS</li>
                        <li>TailwindCSS</li>
                        <li>Filament</li>
                    </ul>
                </ol>
            </fieldset>
        </div>
    </div>
</body>
</html>
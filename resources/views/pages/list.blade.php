<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive/responsive.css">
</head>
<body>
<div class="navigasi">
    <header>
        <a class="company" href="#">CRUD</a>
        <nav class="navigasi-bar">
            <ul>
                <li class="about">
                    <a href="/data">new employee</a>
                </li>
                <li class="notif"><a href="#">notification</a></li>
                <li class="events"><a href="#">events</a></li>
                <li class="news"><a href="#">news</a></li>
            </ul>
        </nav>
    </header>
<div class="halaman-pertama">
    <table class="tabel" > 
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No. KTP</td>
            <td></td>
        </tr>
        @foreach($karyawan as $karyawan)
        <tr>
            <td>{{$karyawan['id']}}</td>
            <td>{{$karyawan['Nama']}}</td>
            <td>{{$karyawan['Alamat']}}</td>
            <td>{{$karyawan['NoKtp']}}</td>
            <td>
                @csrf
                <a href="delete/{{$karyawan->NoKtp}}">delete</a>
                <a href="update/{{$karyawan->NoKtp}}">update</a>
            </td>
        </tr>

        @endforeach

    </table>
    <div class="slider-container">
        <div class="slide">
            <img src="asset/blue.gif" class="img-bg" alt="tech">
        </div>
</div>
<script src="js/indexjs.js"></script>
</body>
</html>

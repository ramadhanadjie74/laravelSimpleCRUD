<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="navigasi">
    <header>
        <a class="company" href="#">CRUD</a>
        <nav class="navigasi-bar">
            <ul>
                <li class="about">
                    <a href="#">about</a>
                    <ul class="about-item">
                        <li>history</li>
                        <li>vission mission</li>
                    </ul>
                </li>
                <li class="ourwork"><a href="#">our work</a></li>
                <li class="ourteam"><a href="#">our team</a></li>
                <li class="contact"><a href="#">contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="konten-semua">
        @yield('konten-semua')
    </div>
</div>
</body>
</html>
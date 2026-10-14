<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>KY's Portfolio</title>

        <!---custom css link--->
        <link rel = "stylesheet"  href = "css/style.css">

        <!---boxicons link--->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <!---remixicons link--->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>

        <!---google fonts link--->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Momo+Trust+Display&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>

    <body>

        <header>
            <a href="#" class="logo">KY's </a>
            <ul class="list">
                <li><a href="porto.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="study.php">Educational</a></li>
                <li><a href="hobby.php">Hobby</a></li>
                <li><a href="quotes.php">Quotes</a></li>

                <li class="dropdown">
                    <a href="#">Works <i class="ri-arrow-down-s-line"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="tugas1.php">upcoming..</a></li>
                        <li><a href="tugas2.php">upcoming..</a></li>
                        <li><a href="tugas3.php">upcoming..</a></li>
                        <li><a href="tugas4.php">upcoming..</a></li>
                    </ul>
                </li>
            </ul>
        </header>

        <section id="f1" class="home">
            <div class="home-text">
                <h5>Hi! I'm Kiya.</h5>
                <p>A girl who enjoys designing simple things and learning how websites work. Nothing too fancy — 
                    but try her best to make things look clean and feel right. This portfolio is part of my journey.
                    Still learning, still having fun.</p>
                <a href="about.php">About</a>
                <a href="afew.php">A few</a>
            </div>

            <div class="home-img">
                <img src="img/home.jpg">
            </div>
        </section>

        <div class="icons">
            <a href="https://www.instagram.com/kiracinnn/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://www.tiktok.com/@ymrmymr?is_from_webapp=1&sender_device=pc" target="_blank"><i class="ri-tiktok-line"></i></a>
        </div>


        <!-- ========================================================
            DEKORASI ALAMI: TANAMAN SULUR MENJUNTAI (FULL HTML & CSS)
            ======================================================== -->
        <div class="nature-overlay">
            <!-- 2. KUPU-KUPU REALISTIS (4 KELOPAK SAYAP + TUBUH + ANTENA) -->
            <div class="realistic-butterfly">
                <div class="butterfly-body">
                    <div class="antenna antenna-left"></div>
                    <div class="antenna antenna-right"></div>
                </div>
                <div class="wing-side wing-side-left">
                    <div class="wing forewing forewing-left"></div>
                    <div class="wing hindwing hindwing-left"></div>
                </div>
                <div class="wing-side wing-side-right">
                    <div class="wing forewing forewing-right"></div>
                    <div class="wing hindwing hindwing-right"></div>
                </div>
            </div>

            <!-- 3. DAUN MELAYANG BERPUTAR -->
            <div class="leaf leaf-1"></div>
            <div class="leaf leaf-2"></div>
            <div class="leaf leaf-3"></div>

        </div>
    </body>
</html>
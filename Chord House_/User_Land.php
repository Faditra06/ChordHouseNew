<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chord House</title>
    <link rel="stylesheet" href="User_Land.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php
    session_start();
    if (!$_SESSION['user']) {
        echo "<script>alert('Silahkan Login Kembali');window.location='Login.php'</script>";
    }
    include "koneksi.php";
    $query = "SELECT * FROM tbl_user";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($hasil);
    ?>
    <div class="container">
        <!-- Navbar Start -->
        <header class="Header">
            <a href="User_Land.html"><img src="b.png" class="Logo"></a>

            <nav class="navbar">
                <a href="User_Land.html">Home</a>
                <a href="#tombol-genre">Genre</a>
                <a href="#isinya">Daftar Lagu</a>
                <a href="#isi-kanan">Populer</a>
                <a href="#isinya">Terbaru</a>
                <a href="#footer">About</a>
            </nav>
            <input type="text" placeholder="  &#xf002; Search" style="font-family:Arial, FontAwesome" class="Search">
            <a href="Edit_Profile.html"class="ikon"><i class="fa-solid fa-circle-user"></i></a>
            <a href="Edit_Profile.html" class="propil">
                <span><?php echo $data['username']; ?></span>
            </a>
            <form action="Logout.php">
                <input type="submit" value="Logout" class="Logout-bt">
            </form>
        </header>
        <!-- Navbar End -->
        <!-- Content Start -->
        <div class="container-img">
            <img src="ikanikan.jpeg" alt="Snow">
            <div class="centered">Chord House</div>
        </div>
        <div class="container-info">
            <div class="text-info">
                <p>Selamat datang di Chord House situs yang berisi referensi chord/akord terpopuler dan terbaru, untuk mencari chord dari band atau artis favorit anda. Anda dapat menggunakan fitur pencarian atau gunakan menu alfabet diatas. Meskipun setiap
                    harinya kami selalu menambahkan chord terbaru, namun tidak dapat dipungikiri bahwa masih banyak juga yang belum ada di situs ini. Semua lirik lagu di website ini adalah hak cipta / hak milik dari penulis, artis, band dan label musik
                    yang bersangkutan. Semua materi yang terkandung dalam situs ini termasuk lirik lagu hanya untuk tujuan informasi dan edukasi. terima kasih telah berkunjung.</p>
            </div>
        </div>
        <div class="tombol-genre" id="tombol-genre">
            <a href="Genre_Pop_User.html"><img src="Pop.png" alt=""></a>
            <a href="Genre_Jazz_User.html"><img src="Jazz.png" alt=""></a>
            <a href="Genre_Rock_User.html"><img src="Rock.png" alt=""></a>
            <a href="Genre_Dangdut'_User.html"><img src="Dangdut.png" alt=""></a>
            <a href="Genre_Reggae_User.html"><img src="Reggae.png" alt=""></a>
            <a href="Genre_Metal_User.html"><img src="Metal.png" alt=""></a>
            <a href="Genre_Blues_User.html"><img src="Blues.png" alt=""></a>
        </div>
        <div class="isinya" id="isinya">
            <div class="isi-kiri">
                <h1><b>Chord & Lirik Terbaru</b>
                    <hr style="height: 5px; background-color: black; text-align: right; width: 80%;">
                </h1>
                <div class="isinya-kiri">
                    <a href="Tampilan_Lagu_User.html">Dewa-Pupus</a><br>
                    <a href="#">Stray Kids-God's Menu</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                </div>
            </div>
            <div class="isi-kanan" id="isi-kanan">
                <h1><b>Populer</b>
                    <hr style="height: 5px; background-color: black; text-align: right; width: 132%;">
                </h1>
                <div class="isinya-kanan">
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Stray Kids-God's Menu</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                    <a href="#">Dewa-Pupus</a><br>
                </div>
            </div>
        </div>
        <!-- Content End -->
        <!-- Footer Start -->
        <footer class="footer" id="footer">
            <div class="container-footer">
                <div class="logo-footer">
                    <img src="b.png" alt="">
                </div>
                <div class="row">
                    <div class="footer-col">
                        <h4>Disclaimer</h4>
                        <ul>
                            <p>
                                Semua lirik lagu di website ini adalah hak cipta/hak milik dari penulis, artis, band dan label musik yang bersangkutan. Semua materi yang terkandung dalam situs ini termasuk lirik lagu hanya untuk tujan informasi dan edukasi.
                            </p>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Contact</h4>
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-phone" style="color: #64ccc5;"></i> 0878-6154-3160</a></li>
                            <li><a href="#"><i class="fa-solid fa-envelope" style="color: #64ccc5;"></i> farrosadi06@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Social Media</h4>
                        <div class="social-links">
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-tiktok"></i></a>
                            <a href=""><i class="fa-brands fa-discord"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy;2023 ChordHouse</p>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>
</body>

</html>
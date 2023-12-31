<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Komunitas Motor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    {{-- font awesome CDN link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    {{-- custom css file cdn link --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- header section mulai --}}
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-motorcycle"></i></i> Wayang Riders</a>
        <form action="" class="search-form">
            <input type="search" name="" placeholder="cari di sini..." id="searchBox">
            <label for="searchBox"><i class="fas fa-search"></i></label>
        </form>
        <div class="icon">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-moon" id="theme-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <nav class="navbar">
            <a href="#home">beranda</a>
            <a href="{{ route('event') }}">Ride Adventure</a>
            <a href="#members">member benefits</a>
            <a href="{{ route('sejarah') }}">profil</a>
            <a href="/sesi">Login</a>
            <a href="/sesi/register">Register</a>
            <a href="#others">lainya</a>
        </nav>

        {{-- <form action="" class="login-form">
            <div class="inputBox">
                <span>Username</span>
                <input type="text" placeholder="Masukan Nama Anda">
            </div>

            <div class="inputBox">
                <span>Password</span>
                <input type="password" placeholder="Masukan Kata Sandi Anda">
            </div>

            <div class="remember">
                <input type="checkbox" name="" id="login-remember">
                <label for="login-remember">Ingat Saya</label>
            </div>

            <input type="submit" class="btn" value="login">
        </form> --}}
    </header>
    {{-- header section end --}}

    {{-- beranda --}}
    <section class="hero" id="home">
        <video class="video-slide active" src="{{ asset('videos/video_1.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('videos/video_2.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('videos/video_3.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('videos/video_4.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('videos/video_4.mp4') }}" autoplay muted loop></video>
        <div class="container">

            <h1 class="h1 hero-title"  data-aos="zoom-in">
                <marquee> Ride Together, Thrive Together <br></marquee>
            </h1>

            <div class="btn-group"  data-aos="zoom-in">
                <button class="btn btn-primary"><a href="" style="color: #FFF;">Pelajari Lebih
                        Lanjut</a></button>
                <button class="btn btn-secondary"  data-aos="zoom-in"><a href="https://goo.gl/maps/GhRswbtz19c7jGoV6"
                        style="color: #FFF;">Jelajahi Sekarang!</a></button>
            </div>
            <div class="slider-navigation">
                <div class="nav-btn active"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
        </div>
    </section>
    {{-- end beranda --}}

    <section class="form-container" data-aos="zoom-in">
        <form action="">
            <div class="inputBox">
                <span>Tujuan Riding</span>
                <input type="text" placeholder="cari tempat">
            </div>
            <div class="inputBox">
                <span>Waktu Mulai</span>
                <input type="date">
            </div>
            <div class="inputBox">
                <span>Waktu Kembali</span>
                <input type="date">
            </div>
            <input type="submit" value="Daftar Sekarang" class="btn">
        </form>
    </section>

    {{-- packages --}}
    <section class="packages" id="kegiatan">
        <h1 class="heading">Ride <span>Adventures</span></h1>
        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="{{ asset('images/event1.png') }}" alt="">
                </div>
                <div class="content">
                    <div class="price">20.000 <span>50.000</span></div>
                    <p>Bergabunglah bersama kami dalam perjalanan mendebarkan saat kami memulai acara Ride Adventures
                        pada tanggal 20 Agustus 2023! Siapkan diri Anda untuk menjelajahi rute-rute indah dan menjalin
                        persahabatan baru.</p>
                        <a href="{{ route('event') }}" class="btn">Lihat Info Lebih Lanjut</a>
                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="{{ asset('images/event2.png') }}" alt="">
                </div>
                <div class="content">
                    <div class="price">20.000 <span>50.000</span></div>
                    <p>Rasakan kebebasan jalan terbuka sekali lagi pada tanggal 5 September 2023. Acara Ride Adventures
                        kami adalah kesempatan Anda untuk melepaskan rutinitas dan merembrak kegembiraan bermotor.</p>
                    <a href="{{ route('event') }}" class="btn">Lihat Info Lebih Lanjut</a>

                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="{{ asset('images/event4.png') }}" alt="">
                </div>
                <div class="content">
                    <div class="price">20.000 <span>50.000</span></div>
                    <p>Tanggal 12 Oktober 2023, adalah kesempatan Anda untuk bergabung dengan rekan-rekan pengendara
                        dalam perjalanan epik selama acara Ride Adventures kami. Biarkan angin membimbing Anda saat kita
                        menjelajahi jalan-jalan bersama.</p>
                    <a href="{{ route('event') }}" class="btn">Lihat Info Lebih Lanjut</a>

                </div>
            </div>
        </div>
    </section>
    {{-- end --}}

    {{-- benefits --}}
    <section class="benefits" id="members">
        <h1 class="heading">Member <span>Benefits</span></h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <span>01</span>
                <i class="fas fa-bullhorn"></i>
                <h3>Komunitas Online</h3>
                <p>Terhubunglah dengan para pengendara motor yang bersemangat dan berbagi cinta pada petualangan di
                    jalan raya. Bergabunglah dalam komunitas online kami dan temukan teman-teman sejati di seluruh
                    penjuru.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <span>02</span>
                <i class="fas fa-hiking"></i>
                <h3>Akses Acara VIP</h3>
                <p>Nikmati pengalaman istimewa sebagai anggota kami dengan akses eksklusif ke acara-acara motor terbaik.
                    Dari perjalanan seru hingga pertemuan inspiratif, Anda akan menjadi bagian dari momen-momen tak
                    terlupakan.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <span>03</span>
                <i class="fas fa-globe"></i>
                <h3>Diskusi Tematik</h3>
                <p>Dive into the world of meaningful conversations. Sertai diskusi-diskusi tematik kami yang mencakup
                    segala hal dari teknik mengendarai hingga cerita perjalanan epik. Temukan wawasan baru dan buka
                    pintu menuju pengetahuan yang lebih dalam.</p>
            </div>
        </div>
    </section>
    {{-- end setting --}}

    {{-- review --}}
    <section class="review" id="review">
        <h1 class="heading">
            events <span>review</span>
        </h1>
        <div class="swiper-container review-slider" data-aos="zoom-in">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="{{ asset('images/profile-icon-png-912.png') }}" alt="">
                    <h3>Sinta Adelia</h3>
                    <p>Bergabung dengan Wayang Riders adalah keputusan terbaik yang pernah saya buat! Komunitas yang
                        luar biasa, dengan acara-acara seru dan teman-teman baru yang ramah. Saya merasa seperti menjadi
                        bagian dari keluarga motor yang solid.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="{{ asset('images/profile-icon-png-912.png') }}" alt="">
                    <h3>Sinta Adelia</h3>
                    <p>Akses VIP ke acara motor terbaik membuat pengalaman saya jauh lebih istimewa. Saya merasa
                        dihargai dan mendapatkan kesempatan untuk terlibat dalam acara yang biasanya tidak mudah
                        diakses. Wayang Riders sungguh mengerti bagaimana memberikan nilai tambah kepada anggotanya.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="{{ asset('images/profile-icon-png-912.png') }}" alt="">
                    <h3>Sinta Adelia</h3>
                    <p>Komunitas online Wayang Riders adalah tempat yang sempurna untuk berbagi pengalaman, tips, dan
                        cerita dengan sesama pengendara motor. Diskusi tematik yang dikelola dengan baik membantu saya
                        memperluas pengetahuan saya tentang dunia motor dan perjalanan</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    {{-- ends --}}

    {{-- start --}}
    <section class="contact" id="contact">
        {{-- <h1 class="heading"><span>Hubungi</span> Kami</h1>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}
    <h1 class="heading"><span>Kritik</span> Saran</h1>
    <div class="box-container" data-aos="fade-up"></div>
        <form action="/submit-message" method="post" data-aos="zoom"
            onsubmit="return confirm('Terima kasih, pesan anda berhasil dikirim!')">
            @csrf
            <div class="inputBox">
                <input type="text" name="name" placeholder="Masukan Nama Anda" data-aos="fade-up">
            </div>
            <textarea name="message" placeholder="Kirimkan Pesanmu" cols="30" rows="10" data-aos="fade-up"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </section>
    {{-- ends --}}

    {{-- blogs --}}
    <section class="blogs" id="others">
        <h1 class="heading"><span>Berita</span> Terbaru</h1>
        <div class="box-container" data-aos="fade-up">

            <div class="box" data-aos="zoom">
                <div class="image">
                    <img src="{{ asset('images/info.png') }}" alt="">
                </div>
                <div class="content">
                    <h3>Berkendara dengan Semangat: Wayang Riders Mengajak Para Pengendara Motor untuk Merayakan
                        Persaudaraan</h3>
                    <a href="#" class="btn">Pelajari Selengkapnya</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-user"></i> by admin</a>
                        <a href="#"><i class="fas fa-calendar"></i> 1 Januari 2020</a>
                    </div>
                </div>
            </div> <!-- Tutup box kedua -->

            <div class="box" data-aos="zoom">
                <div class="image">
                    <img src="{{ asset('images/info.png') }}" alt="">
                </div>
                <div class="content">
                    <h3>Wayang Riders Resmi Diluncurkan: Komunitas Motor Baru yang Menginspirasi Semangat Persaudaraan
                    </h3>
                    <a href="#" class="btn">Pelajari Selengkapnya</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-user"></i> by admin</a>
                        <a href="#"><i class="fas fa-calendar"></i> 1 Januari 2020</a>
                    </div>
                </div>
            </div> <!-- Tutup box ketiga -->
            <div class="box" data-aos="zoom">
                <div class="image">
                    <img src="{{ asset('images/info.png') }}" alt="">
                </div>
                <div class="content">
                    <h3>Wayang Riders: Merayakan Semangat Petualangan dan Persaudaraan dalam Komunitas Motor Terbaru
                    </h3>
                    <a href="#" class="btn">Pelajari Selengkapnya</a>
                    <div class="icons">
                        <a href="#"><i class="fas fa-user"></i> by admin</a>
                        <a href="#"><i class="fas fa-calendar"></i> 1 Januari 2020</a>
                    </div>
                </div>
            </div> <!-- Tutup box ketiga -->
        </div>
    </section>

    {{-- ends --}}

    {{-- footer --}}
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Our Communities</h3>
                <a href=""><i class="fas fa-map-marker-alt"></i>Bandung</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>Cimahi</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>Bogor</a>
                <a href=""><i class="fas fa-map-marker-alt"></i>Pangandaran</a>
            </div>
            <div class="box">
                <h3>Link Tersedia</h3>
                <a href="#"><i class="fas fa-chevron-right"></i>Beranda</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Ride Adventures</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Member Benefits</a>
                <a href="{{ route('sejarah') }}"><i class="fas fa-chevron-right"></i>Profil</a>
                <a href="/sesi" class="navbar-link"><i class="fas fa-chevron-right"></i>Login</a>
                <a href="/sesi/register" class="navbar-link"><i class="fas fa-chevron-right"></i>Register</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Lainnya</a>
            </div>

            <div class="box">
                <h3>Ikuti Kami</h3>
                <a href="#" style="text-transform: none;"><i class="fas fa-phone"></i>+62 838 2627 2207</a>
                <a href="#" style="text-transform: none;"><i
                        class="fa-brands fa-instagram"></i>wayangriders_id</a>
                <a href="#" style="text-transform: none;"><i class="fa-brands fa-facebook-f"></i>wayang
                    riders</a>
                <a href="#" style="text-transform: none;"><i
                        class="fa-brands fa-x-twitter"></i>wayangriders_id</a>
                <a href="#" style="text-transform: none;"><i
                        class="fa-regular fa-envelope"></i></i>wayangriders@gmail.com</a>
            </div>
        </div>
        <div class="credit">Dibuat Oleh : Komunitas Wayang Riders <span>| all rights reserved</span></div>
    </section>
    {{-- ends --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/your-package@your-version/dist/script.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 600
        });
    </script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
        //Javacript for video slider navigation
        const btns = document.querySelectorAll(".nav-btn");
        const slides = document.querySelectorAll(".video-slide");
        const contents = document.querySelectorAll(".container");
        var sliderNav = function(manual) {
            btns.forEach((btn) => {
                btn.classList.remove("active");
            });
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            contents.forEach((content) => {
                content.classList.remove("active");
            });
            contents.forEach((content) => {
                content.classList.remove("active");
            });
            btns[manual].classList.add("active");
            slides[manual].classList.add("active");
            contents[manual].classList.add("active");
        }
        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                sliderNav(i);
            });
        });
    </script>
</body>

</html>

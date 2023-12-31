<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    {{-- font awesome CDN link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    {{-- custom css file cdn link --}}
    <link rel="stylesheet" href="{{ asset('css/event_style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--
  - custom css link
-->
<link rel="stylesheet" href="./assets/css/package.css">
<!--
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
rel="stylesheet">
</head>

<body>

    <section class="package" id="package" data-aos="fade-up">
        <div class="container">
          <h2 class="h2 section-title" data-aos="fade-up">Exciting Events Adventures</h2>
          <p class="section-text" data-aos="fade-up">
            Kami dengan bangga mengundang Anda untuk menjelajahi serangkaian acara menarik yang telah kami siapkan. Dari petualangan melintasi jalan-jalan yang epik hingga pertemuan berkualitas dengan sesama penggemar motor, kami memiliki segala sesuatu yang Anda cari. Bersiaplah untuk merasakan sensasi kebebasan di balik setiap tikungan dan merayakan semangat komunitas bersama kami. Mari bersama-sama menciptakan kenangan tak terlupakan dalam setiap acara yang kami selenggarakan. Jangan lewatkan kesempatan ini untuk menjadi bagian dari perjalanan motor yang luar biasa!          </p>
          <ul class="package-list" data-aos="fade-up">
            <li>
              <div class="package-card" data-aos="fade-up">
                <figure class="card-banner">
                  <img src="{{ asset('images/event2.png') }}" alt="Events 1" loading="lazy">
                </figure>
                <div class="card-content" data-aos="fade-up">
                  <h3 class="h3 card-title">Cruiser Convoy: Melintasi Kota dalam Gayanya Sendiri</h3>
                  <p class="card-text">
                    Jl.
                  </p>
                  <p class="card-text">
                  <input type="date" class="date">
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text">46396</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">Pangandaran</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Indonesia</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <p class="reviews">(11 Ulasan)</p>
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>

                    </div>
                  </div>
                  <p class="price">
                    Rp 25.000
                  </p>
                  <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
                </div>
              </div>
            </li>
            <li>
              <div class="package-card" data-aos="fade-up">
                <figure class="card-banner">
                  <img src="{{ asset('images/event2.png') }}" loading="lazy">
                </figure>
                <div class="card-content"  data-aos="fade-up">
                  <h3 class="h3 card-title">Off-Road Exploration: Menggali Petualangan di Medan Terjal</h3>
                  <p class="card-text">
                    Jl.
                  </p>
                  <p class="card-text">
                    <input type="date" class="date">
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text">46396</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">Pangandaran</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Indonesia</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <p class="reviews">(1.010 Ulasan)</p>
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </div>
                  <p class="price">
                    Rp 10.000
                  </p>
                    <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></a></button>
                </div>
              </div>
            </li>
            <li>
              <div class="package-card" data-aos="fade-up">
                <figure class="card-banner">
                  <img src="{{ asset('images/event2.png') }}" loading="lazy">
                </figure>
                <div class="card-content"  data-aos="fade-up">
                  <h3 class="h3 card-title">Sunset Ride: Menyaksikan Keindahan Matahari Terbenam Bersama-sama</h3>
                  <p class="card-text">
                    Jl.
                  </p>
                  <p class="card-text">
                    <input type="date" class="date">
                  </p>
                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>
                        <p class="text">46396</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>
                        <p class="text">Pangandaran</p>
                      </div>
                    </li>
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>
                        <p class="text">Indonesia</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-price">
                  <div class="wrapper">
                    <p class="reviews">(16 Ulasan)</p>
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                  </div>
                  <p class="price">
                    Rp 15.000
                  </p>
                  <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
                </div>
              </div>
            </li>
          </ul>
          <div class="package-card" data-aos="fade-up">
            <figure class="card-banner">
              <img src="{{ asset('images/event2.png') }}"  loading="lazy">
            </figure>
            <div class="card-content"  data-aos="fade-up">
              <h3 class="h3 card-title">Track Day Experience: Merasakan Kecepatan di Sirkuit Terkenal</h3>
              <p class="card-text">
                Jl.
              </p>
              <p class="card-text">
                <input type="date" class="date">
            </p>
              <ul class="card-meta-list">
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="time"></ion-icon>
                    <p class="text">46396</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="people"></ion-icon>
                    <p class="text">Pangandaran</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="location"></ion-icon>
                    <p class="text">Indonesia</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-price">
              <div class="wrapper">
                <p class="reviews">(2.184 Ulasan)</p>
                <div class="card-rating">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>
              </div>
              <p class="price">
                Rp 16.000
              </p>
              <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
            </div>
          </div>
        </li>
      </ul> <br> <br>
      <div class="package-card" data-aos="fade-up">
        <figure class="card-banner">
          <img src="{{ asset('images/event2.png') }}" loading="lazy">
        </figure>
        <div class="card-content"  data-aos="fade-up">
          <h3 class="h3 card-title">Heritage Ride: Menjelajahi Warisan Budaya dengan Motor Klasik</h3>
          <p class="card-text">
            Jl.
          </p>
          <p class="card-text">
            <input type="date" class="date">
        </p>
          <ul class="card-meta-list">
            <li class="card-meta-item">
              <div class="meta-box">
                <ion-icon name="time"></ion-icon>
                <p class="text">46396</p>
              </div>
            </li>
            <li class="card-meta-item">
              <div class="meta-box">
                <ion-icon name="people"></ion-icon>
                <p class="text">Pangandaran</p>
              </div>
            </li>
            <li class="card-meta-item">
              <div class="meta-box">
                <ion-icon name="location"></ion-icon>
                <p class="text">Indonesia</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="card-price">
          <div class="wrapper">
            <p class="reviews">(1.720 Ulasan)</p>
            <div class="card-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>
          </div>
          <p class="price">
            Rp 43.000
          </p>
          <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
        </div>
      </div>
    </li>
  </ul> <br><br>
  <div class="package-card" data-aos="fade-up">
    <figure class="card-banner">
      <img src="{{ asset('images/event2.png') }}" loading="lazy">
    </figure>
    <div class="card-content"  data-aos="fade-up">
      <h3 class="h3 card-title">Charity Ride: Berkendara untuk Kebaikan dan Memberi Kembali</h3>
      <p class="card-text">
        Jl.
      </p>
      <p class="card-text">
        <input type="date" class="date">
    </p>
      <ul class="card-meta-list">
        <li class="card-meta-item">
          <div class="meta-box">
            <ion-icon name="time"></ion-icon>
            <p class="text">46396</p>
          </div>
        </li>
        <li class="card-meta-item">
          <div class="meta-box">
            <ion-icon name="people"></ion-icon>
            <p class="text">Pangandaran</p>
          </div>
        </li>
        <li class="card-meta-item">
          <div class="meta-box">
            <ion-icon name="location"></ion-icon>
            <p class="text">Indonesia</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="card-price">
      <div class="wrapper">
        <p class="reviews">(2.713 Ulasan)</p>
        <div class="card-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>
      </div>
      <p class="price">
        Rp.31.000
      </p>
      <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
    </div>
  </div>
</li>
</ul> <br><br>
<div class="package-card" data-aos="fade-up">
  <figure class="card-banner">
    <img src="{{ asset('images/event2.png') }}" loading="lazy">
  </figure>
  <div class="card-content"  data-aos="fade-up">
    <h3 class="h3 card-title">Weekend Getaway: Melepaskan Diri dari Kehidupan Sehari-hari</h3>
    <p class="card-text">
      Jl.
    </p>
    <p class="card-text">
        <input type="date" class="date">
    </p>
    <ul class="card-meta-list">
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="time"></ion-icon>
          <p class="text">46596</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="people"></ion-icon>
          <p class="text">Pangandaran</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="location"></ion-icon>
          <p class="text">Indonesia</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="card-price">
    <div class="wrapper">
      <p class="reviews">(4.062 Ulasan)</p>
      <div class="card-rating">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>
    <p class="price">
      Rp 16.000
    </p>
    <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
  </div>
</div>
</li>
</ul> <br><br>
<div class="package-card" data-aos="fade-up">
  <figure class="card-banner">
    <img src="{{ asset('images/event2.png') }}" loading="lazy">
  </figure>
  <div class="card-content"  data-aos="fade-up">
    <h3 class="h3 card-title">Mystery Ride: Mengikuti Rute Tak Terduga ke Destinasi Menarik</h3>
    <p class="card-text">
      Jl.
    </p>
    <p class="card-text">
        <input type="date" class="date">
    </p>
    <ul class="card-meta-list">
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="time"></ion-icon>
          <p class="text">46396</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="people"></ion-icon>
          <p class="text">Pangandaran</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="location"></ion-icon>
          <p class="text">Indonesia</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="card-price">
    <div class="wrapper">
      <p class="reviews">(1.604 Ulasan)</p>
      <div class="card-rating">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>
    <p class="price">
      Rp  5.000
    </p>
    <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
  </div>
</div>
</li>
</ul> <br><br>
<div class="package-card" data-aos="fade-up">
  <figure class="card-banner">
    <img src="{{ asset('images/event2.png') }}" loading="lazy">
  </figure>
  <div class="card-content"  data-aos="fade-up">
    <h3 class="h3 card-title">Scenic Sunday: Menikmati Pemandangan di Hari Minggu</h3>
    <p class="card-text">
      Jl.
    </p>
    <p class="card-text">
        <input type="date" class="date">
    </p>
    <ul class="card-meta-list">
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="time"></ion-icon>
          <p class="text">46396</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="people"></ion-icon>
          <p class="text">Pangandaran</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="location"></ion-icon>
          <p class="text">Indonesia</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="card-price">
    <div class="wrapper">
      <p class="reviews">(6.358 Ulasan)</p>
      <div class="card-rating">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>
    <p class="price">
      Rp  23.000
    </p>
    <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
  </div>
</div>
</li>
</ul> <br><br>
<div class="package-card" data-aos="fade-up">
  <figure class="card-banner">
    <img src="{{ asset('images/event2.png') }}" alt="The Allure Villas Pangandaran" loading="lazy">
  </figure>
  <div class="card-content"  data-aos="fade-up">
    <h3 class="h3 card-title">Women Riders Meetup: Menghubungkan Para Pengendara Wanita</h3>
    <p class="card-text">
        jl
    </p>
    <p class="card-text">
        <input type="date" class="date">
    </p>
    <ul class="card-meta-list">
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="time"></ion-icon>
          <p class="text">46396</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="people"></ion-icon>
          <p class="text">Pangandaran</p>
        </div>
      </li>
      <li class="card-meta-item">
        <div class="meta-box">
          <ion-icon name="location"></ion-icon>
          <p class="text">Indonesia</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="card-price">
    <div class="wrapper">
      <p class="reviews">(228 Ulasan)</p>
      <div class="card-rating">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>
    <p class="price">
      Rp  10.000
    </p>
    <button class="btn btn-secondary"><a href="" style="color: white;">Daftar Acara!</a></button>
  </div>
</div>
</li>
</ul>
  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>
  <!--
    - ionicon link
  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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

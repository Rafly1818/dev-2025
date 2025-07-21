<div>
    <div class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1>Gaya Terbaik, Tanpa Repot</h1>
                        <p>
                            Temukan penampilan terbaik Anda bersama kami. Kami menyediakan layanan premium dengan proses reservasi yang mudah dan cepat.
                        </p>
                        <a class="btn" href="#">Reservasi Sekarang</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ asset('front/img/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('front/img/about.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Tentang Kami</p>
                        <h2>Pengalaman Lebih Dari 10 Tahun</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Selamat datang di The Modern Cut, tempat di mana kami menggabungkan keahlian tradisional dengan tren gaya rambut modern untuk memberikan Anda penampilan terbaik.
                        </p>
                        <p>
                            Tim kami terdiri dari barber-barber profesional yang berdedikasi untuk memberikan layanan presisi dan berkualitas tinggi, memastikan setiap pelanggan pulang dengan rasa percaya diri.
                        </p>
                        <a class="btn" href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Layanan Kami</p>
                <h2>Layanan Barbershop Terbaik Untuk Anda</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('front/img/service-1.jpg') }}" alt="Image">
                        </div>
                        <h3>Gentelman's Cut</h3>
                        <p>
                            Potongan rambut pria klasik, termasuk cuci dan pijat kepala.
                        </p>
                        <a class="btn" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('front/img/service-2.jpg') }}" alt="Image">
                        </div>
                        <h3>Beard Trim & Shave</h3>
                        <p>
                            Merapikan jenggot dan kumis dengan teknik hot towel shave.
                        </p>
                        <a class="btn" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('front/img/service-3.jpg') }}" alt="Image">
                        </div>
                        <h3>Hair Coloring</h3>
                        <p>
                            Pewarnaan rambut menggunakan produk premium.
                        </p>
                        <a class="btn" href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Harga Terbaik Kami</p>
                <h2>Kami Memberikan Harga Terbaik di Kota</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="{{ asset('front/img/price-1.jpg') }}" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Gentleman's Cut</h2>
                            <h3>Rp 50.000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="{{ asset('front/img/price-3.jpg') }}" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hair Coloingr</h2>
                            <h3>Rp 200.000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="{{ asset('front/img/price-4.jpg') }}" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Beard Trim & Shave</h2>
                            <h3>Rp 35.000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="{{ asset('front/img/price-5.jpg') }}" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Kids Haircut</h2>
                            <h3>Rp 30.000</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial">
        <div class="container">
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="{{ asset('front/img/testimonial-1.jpg') }}" alt="Image">
                    <p>
                        Potongan rambut terbaik yang pernah saya dapatkan. Sangat profesional dan hasilnya rapi. Pasti akan kembali lagi!
                    </p>
                    <h2>John Doe</h2>
                    <h3>Mahasiswa</h3>
                </div>
                <div class="testimonial-item">
                    <img src="{{ asset('front/img/testimonial-2.jpg') }}" alt="Image">
                    <p>
                        Tempatnya nyaman dan barbernya sangat ramah. Reservasi online sangat membantu, jadi tidak perlu antre.
                    </p>
                    <h2>Peter Smith</h2>
                    <h3>Pekerja Kantoran</h3>
                </div>
                <div class="testimonial-item">
                    <img src="{{ asset('front/img/testimonial-3.jpg') }}" alt="Image">
                    <p>
                        Sangat puas dengan layanan beard trim di sini. Detail dan presisi. Terima kasih The Modern Cut!
                    </p>
                    <h2>Samuel Lee</h2>
                    <h3>Wiraswasta</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Tim Barber Kami</p>
                <h2>Temui Para Ahli Potong Rambut Kami</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('front/img/team-1.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Master Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('front/img/team-2.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Hair Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('front/img/team-3.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Gloria Edwards</h2>
                            <p>Beard Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('front/img/team-4.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Color Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest From Blog</p>
                <h2>Learn More from Latest Barber Blog</h2>
            </div>
            <div class="owl-carousel blog-carousel">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('front/img/blog-1.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Hair Cut</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('front/img/blog-2.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Beard Style</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('front/img/blog-3.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Color & Wash</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('front/img/blog-4.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Hair Cut</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('front/img/blog-5.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Beard Style</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('front/img/blog-6.jpg') }}" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Color & Wash</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
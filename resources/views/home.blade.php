<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{asset('BahanSasaWeb/Logo/Sasa.png')}}">
    <title>SARAH SAFIRA PORTOFOLIO</title>
</head>
<body>
    <header id="header" class="header">
        <div class="logo">
            <img src="{{asset('BahanSasaWeb/Home/Logo_Sasa.png')}}">
        </div>
        <nav class="navbar">
            <a href="#home" data-target="home">Home</a>
            <a href="#project" data-target="project">Skills</a>
            <a href="#project" data-target="project">Project</a>
            <a href="#product" data-target="product">Product</a>
            <a href="#aboutme" data-target="aboutme">About Me</a>
            <a href="#contact" data-target="contact">Contact</a>
        </nav>
        <div id="menu" class="menu-btn">
            <img src="{{asset('BahanSasaWeb/Logo/MENU.png')}}">
        </div>
    </header>

    <section id="home" class="home">
        <div class="home-content">
            <h3>Halo, I'm Sarah Safira</h3>
            <h1>Crafting Captivating
            <br> Aesthetics Through Fusion</h1>
            <p>I'm an enthusiastic individual with a strong passion for creativity. My interests span across
                UI/UX, graphic design, photography, and motion graphics, and I strive to make each facet of
                my work as engaging as possible. Additionally, I'm a graduate of a Multimedia Vocational School,
                which has enriched my insights and skills across various creative fields</p>

                <div class="home-sosmed">
                    <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=sarahsafira.sasa@gmail.com" target="_blank"> <img src="{{asset('BahanSasaWeb/Home/Email.png')}}"></a>
                    <a href="https://www.instagram.com/sarahsfrra/" target="_blank"><img src="{{asset('BahanSasaWeb/Home/Logo Instagram.png')}}"></a>
                    <a href="https://wa.me/+62811111133" target="_blank"><img src="{{asset('BahanSasaWeb/Home/Logo WA.png')}}"></a>
                    <a href="https://www.linkedin.com/in/sarahsfrra/" target="_blank"><img src="{{asset('BahanSasaWeb/Home/Logo Linkedin.png')}}"></a>
                </div>
            </div>
                <div class="home-image">
                    <div class="img-me">
                        <img src="{{asset('BahanSasaWeb/Home/foto_sasa.png')}}" alt=" ">
                    </div>
                </div>
    </section>

    <section class="skilss">
        <div class="main-text">
            <h1><span class="proj">MY </span>SKILLS</h1>
            </div>
            <div class="skills">
                <div class="skill">
                    <p>UI/UX Design</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 90%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Graphic Design</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 80%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Photography</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 75%;"></div>
                    </div>
                </div>
                <div class="skill">
                    <p>Motion Graphic</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 70%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--PROJECT -->
    <section id="project" class="project">
        <div class="main-text">
            <h1><span class="proj">MY </span>PROJECT</h1>
            <p>I'm a multimedia enthusiast who creates captivating works through a blend of 2D and 3D design,
                motion graphics, and photography in every project</p>
        </div>

        <div class="container">
            <div class="proj-button">
                <button class="btn">All</button>
                <button class="btn">UI/UX Design</button>
                <button class="btn">2D Design</button>
                <button class="btn">3D Design</button>
            </div>

            <div class="my-project">
                @foreach($projeks as $projek)
                <div class="proj-box">
                    <div class="proj-image">
                        <img src="{{ $projek->link_foto }}" alt="">
                    </div>
                    <div class="proj-content">
                        <h3>{{ $projek->nama_projek }}</h3>
                        <p>{{ $projek->deskripsi }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

<!--MY PRODUCT-->
<section id="product" class="product">
    <div class="main-text">
        <h1><span class="proj">MY </span>PRODUCT</h1>
        <p>Explore our captivating collection of artworks, including stunning flat designs meticulously crafted using Adobe Illustrator.
            Immerse yourself in a world of vibrant colors and sleek, minimalist aesthetics that are sure to inspire your creative senses</p>
    </div>

    <div class="my-product">
        <div class="center-box">
            <div class="prod-box">
                <div class="prod-image">
                    <img src="{{asset('BahanSasaWeb/Product/Packanging Design.png')}}" alt="">
                </div>
                <div class="prod-content">
                    <h3>Packaging Design</h3>
                    <p>My packaging design combines aesthetics and functionality to create visually appealing
                        and protective solutions that enhance your product's presentation and customer experience.
                        <br>
                        <br><span class="p2">Explore the limitless possibilities of packaging design with us your creative ideas are our inspiration.
                            We're here to transform your vision into a tailor-made design that captures your unique style and resonates with your audience.</span></p>
                </div>
                <div class="btn-box">
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>

            <div class="prod-box">
                <div class="prod-image">
                    <img src="{{asset('BahanSasaWeb/Product/Cover Book Design.png')}}" alt="">
                </div>
                <div class="prod-content">
                    <h3>Cover Book Design</h3>
                    <p>My book cover designs harmoniously unite aesthetics and functionality, crafting visually captivating and not only enhance the presentation of your literary masterpiece but also enrich the reader's journey.
                        <br>
                        <br><span class="p2">Explore the limitless possibilities of packaging design with us – your creative ideas are our inspiration. We're here to transform your vision into a tailor-made design that captures your unique style and resonates with your audience.</span>
                    </p>
                </div>
                <div class="btn-box">
                    <a href="#" class="btn">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aside untuk biodata diri -->
<aside id="aboutme" class="bioadata-aside">
    <div class="biodata-info">
        <div class="profile-picture">
            <img src="{{asset('BahanSasaWeb/Logo/Sasa.png')}}" alt="Foto Profile">
        </div>
        <div class="title"><b></b><p>About Me</p></b></div>
        <div class="biodata-row">
            <div class="biodata-label">Nama</div>
            <div class="biodata-value">Sarah Safira Millati</div>
        </div>
        <div class="biodata-row">
            <div class="biodata-label">Date Of Birth</div>
            <div class="biodata-value">Bogor, 9 Agustus 2004</div>
        </div>
        <div class="biodata-row">
            <div class="biodata-label">Institution</div>
            <div class="biodata-value">Brawijaya University</div>
        </div>
        <div class="biodata-row">
            <div class="biodata-label">Faculty</div>
            <div class="biodata-value">Faculty of Computer Science</div>
        </div>
    </div>
</aside>

<!--CONTACT SECTION DESIFN-->
<section id="contact" class="contact">
    <div class="contact-text">
        <h1>CONTACT <span class="cm">ME!</span></h1>
        <p>Feel free to get in touch with me using the contact information provided below.
            I'm eagerly looking forward to collaborating with you on exciting projects!
            <br>
            <br>Let's transform your creative ideas into reality together. Don't hesitate to reach out, and let's embark on this creative journey together!</p>

            <div class="contact-sosmed">
                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=sarahsafira.sasa@gmail.com" target="_blank"> <img src="{{asset('BahanSasaWeb/Logo/Gmail.png')}}"></a>
                <a href="https://www.instagram.com/sarahsfrra/" target="_blank"><img src="{{asset('BahanSasaWeb/Logo/IG.png')}}"></a>
                <a href="https://wa.me/+6281223334444" target="_blank"><img src="{{asset('BahanSasaWeb/Logo/WA.png')}}"></a>
            </div>
        </div>

            <div class="contact-form">
                <form action="">
                    <input type="name" placeholder="Your Name" required>
                    <input type="gmail" placeholder="Your Email Adress" required>
                    <input type="" placeholder="Your Mobile Number" required>
                    <textarea name="" id="" cols="35" rows="10" placeholder="How I Can I Help You" required></textarea>
                    <input type="submit" value="Send Message" class="submit">
                </form>
            </div>
    </div>
</section>

<!--FOOTER SECTION-->
<footer id="footer">
    <p>Copyright &copy;2023 by Sarah Safira Millati || All Right Reserved</p>
    <a href="index.html" id="back-to-home"><img src="{{asset('BahanSasaWeb/Logo/ARROW.png')}}"></a>
</footer>

<!-- Javascirpt Custom -->
<script src="script.js" defer></script>
</body>
</html>

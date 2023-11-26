<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:regular,italic,700,700italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Monoton:regular" rel="stylesheet" />

	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<script src="{{ asset('js/gsap/gsap.min.js') }}" defer></script>
	<script src="{{ asset('js/gsap/ScrollTrigger.min.js') }}" defer></script>
	<script src="{{ asset('js/gsap/ScrollSmoother.min.js') }}" defer></script>

	<script src="{{ asset('js/main.js') }}" defer></script>

</head>
<body>

	<div class="wrapper">
		<div class="content">
            <header class="main-header">
				<div class="layers">
                    <header class="headerStyle">
                    <div class="container">
                        <nav class="site-nav">
                            <ul>
                              <li><a href="{{route('homeDisplay')}}" title="Home"><i class="site-nav--icon"></i>
								<script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
								<lord-icon
									src="https://cdn.lordicon.com/ajmsjtcp.json"
									trigger="hover"
									stroke="bold"
									state="hover-partial-roll"
									colors="primary:#109173,secondary:#000000"
									style="width:40px;height:40px;padding-top:12px;">
								</lord-icon>
							 </a></li>
                                <li><a href="" title="Search"><i class="site-nav--icon"></i>
								<script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
								<lord-icon
									src="https://cdn.lordicon.com/unukghxb.json"
									trigger="hover"
									stroke="bold"
									colors="primary:#121331,secondary:#e8308c"
									style="width:40px;height:40px;padding-top:12px;">
								</lord-icon>
							  </a></li>
                              <li><a href="{{route('login')}}" title="Sign In"><i class="site-nav--icon"></i>
								<script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
								<lord-icon
									src="https://cdn.lordicon.com/wzwygmng.json"
									trigger="hover"
									stroke="bold"
									state="hover-unfold"
									colors="primary:#121331,secondary:#16c72e"
									style="width:40px;height:40px;padding-top:12px;">
								</lord-icon>
							  </a></li>
                              <li><a href="{{route('register')}}" title="Sign Up"><i class="site-nav--icon"></i>
								<script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
								<lord-icon
									src="https://cdn.lordicon.com/zrkkrrpl.json"
									trigger="hover"
									stroke="bold"
									state="hover-swirl"
									colors="primary:#121331,secondary:#66a1ee"
									style="width:40px;height:40px;padding-top:12px;">
								</lord-icon>
							  </a></li>
                              <li><a href=""><i class="site-nav--icon" title="account"></i>
                                <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/bgebyztw.json"
                                    trigger="hover"
                                    stroke="bold"
                                    state="hover-looking-around"
                                    colors="primary:#121331,secondary:#e83a30"
                                    style="width:40px;height:40px;padding-top:12px;">
                                </lord-icon>
                              </a></li>
                            </ul>
                        </nav>

                        <div class="menu-toggle">
                          <div class="hamburger"></div>
                        </div>

                      </div>
                    </header>
                    <div>
                        <a href=""> <img src="{{ asset('img/nameLogoVer.png') }}" class="webLogo" alt="Logo"/></a>
                    </div>
					<div class="layer__header">
						<div class="layers__caption">Welcome to the</div>
						<div class="layers__title">HumbleAbode</div>
					</div>
					<div class="layer layers__base" style="background-image: url('{{ asset('img/room.jpg') }}');"></div>
					<div class="layer layers__middle" style="background-image: url();"></div>
					<div class="layer layers__front" style="background-image: url('{{ asset('img/bed2.png') }}');"></div>
				</div>
			</header>
			<article class="main-article" style="background-image: url('{{ asset('img/room5.jpg') }}');">
				<div class="main-article__content">
					<h2 class="main-article__header">The best home you can ask for</h2>
					<p class="main-article__paragraph">Our main endeavor is to provide the best possible rental homes to our customers at a price that is affordable. Also our services are one of the easiest to use in the market. Here very house can become a home.</p>
				</div>
			</article>

            <article class="main-article" style="background-image: url('{{ asset('img/orangeCurve.jpg') }}');">
                <div class="recommendationText">Want some home recommendations?<br>
                    <span class="subText">Here are some of our best ones</span>
                </div>
				<div class="cardContainer">
					<!-- Full-width images with number and caption text -->
                    <div class="carousel-container">
                        <div class="mySlides animate">
                        <img src="https://wallpapershome.com/images/pages/pic_h/23525.jpg" alt="slide" />
                        <div class="number">1 / 5</div>
                        <div id ="text" class="text">Lorem ipsum dolor sit amet consectetur
                            <div class="socialLinks">
                                <div style="display: flex; gap: 1em;">
                                    <button class="BtnSocial" style="color:aqua);">
                                        <a href="https://github.com/temora3" class="signSocial"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/surcxhka.json"
                                                trigger="hover"
                                                colors="primary:#e8308c,secondary:#000000"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <a href="https://github.com/temora3" class="btnText">Visit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="mySlides animate">
                        <img src="https://wallpapershome.com/images/pages/pic_h/23525.jpg" alt="slide" />
                        <div class="number">2 / 5</div>
                        <div id ="text" class="text">amet consectetur
                            <div class="socialLinks">
                                <div style="display: flex; gap: 1em;">
                                    <button class="BtnSocial" style="color:aqua);">
                                        <a href="https://github.com/temora3" class="signSocial"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/surcxhka.json"
                                                trigger="hover"
                                                colors="primary:#e8308c,secondary:#000000"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <a href="https://github.com/temora3" class="btnText">Visit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="mySlides animate">
                        <img src="https://wallpapershome.com/images/pages/pic_h/23277.jpg" alt="slide" />
                        <div class="number">3 / 5</div>
                        <div id ="text" class="text">Lorem ipsum dolor sit
                            <div class="socialLinks">
                                <div style="display: flex; gap: 1em;">
                                    <button class="BtnSocial" style="color:aqua);">
                                        <a href="https://github.com/temora3" class="signSocial"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/surcxhka.json"
                                                trigger="hover"
                                                colors="primary:#e8308c,secondary:#000000"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <a href="https://github.com/temora3" class="btnText">Visit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="mySlides animate">
                        <img src="https://wallpapershome.com/images/pages/pic_h/12596.jpg" alt="slide" />
                        <div class="number">4 / 5</div>
                        <div id ="text" class="text">Doloribus quo alias reprehenderit
                            <div class="socialLinks">
                                <div style="display: flex; gap: 1em;">
                                    <button class="BtnSocial" style="color:aqua);">
                                        <a href="https://github.com/temora3" class="signSocial"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/surcxhka.json"
                                                trigger="hover"
                                                colors="primary:#e8308c,secondary:#000000"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <a href="https://github.com/temora3" class="btnText">Visit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="mySlides animate">
                        <img src="https://wallpapershome.com/images/pages/pic_h/23419.jpg" alt="slide" />
                        <div class="number">5 / 5</div>
                        <div id ="text" class="text">Reprehenderit
                            <div class="socialLinks">
                                <div style="display: flex; gap: 1em;">
                                    <button class="BtnSocial" style="color:aqua);">
                                        <a href="https://github.com/temora3" class="signSocial"><script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/surcxhka.json"
                                                trigger="hover"
                                                colors="primary:#e8308c,secondary:#000000"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <a href="https://github.com/temora3" class="btnText">Visit</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="prevSlide()">&#10094;</a>
                        <a class="next" onclick="nextSlide()">&#10095;</a>

                        <!-- The dots/circles -->
                        <div class="dots-container">
                        <span class="dots" onclick="currentSlide(1)"></span>
                        <span class="dots" onclick="currentSlide(2)"></span>
                        <span class="dots" onclick="currentSlide(3)"></span>
                        <span class="dots" onclick="currentSlide(4)"></span>
                        <span class="dots" onclick="currentSlide(5)"></span>
                        </div>
                    </div>
				</div>
			</article>
            <article class="main-article" style="background-color: rgb(255, 255, 255);">
                <div class="textSt">
                    @foreach ($properties as $properties)
                        {{ $properties->title}}<br>
                    @endforeach
                </div>
			</article>
            <div class="copyright">© Copyright Infinity Developers</div>
		</div>
	</div>
</body>
</html>

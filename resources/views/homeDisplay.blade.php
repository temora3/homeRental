<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/boot.css') }}" rel="stylesheet" />

        <script src="{{ asset('js/main.js') }}" defer></script>

        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKzWPwwPRrp_N-fzQH8qcTU5RuARPXWJA&callback=initMap" defer>
        </script>

        {{-- <script async defer src="{{ asset('js/main.js') }}" onload="initMap()"></script> --}}
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
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
                      <li><a href="" title="Sign In"><i class="site-nav--icon"></i>
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
                      <li><a href="" title="Sign Up"><i class="site-nav--icon"></i>
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
                      <li><a href=""><i class="site-nav--icon"></i>
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
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">Shop item template</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span>
                        </div>
                        <p class="lead" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Map location of home</h2>
                <div id="map"></div>
                {{-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

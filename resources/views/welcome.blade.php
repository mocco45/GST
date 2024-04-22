@extends('layout.app')
@section('content')
<div class="ps-5 img-cont">
    <a href="index.html" class="logo m-0 float-start mt-4">
        <img src="{{ asset('images/logo.png') }}" class="img-fluid mx-auto" alt="">
    </a>
</div>
<nav class="site-nav">
        
  <div class="container d-flex justify-content-end align-items-center">
      <div>
  <div class="menu-bg-wrap">
    <div class="site-navigation">

      <ul
        class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
      >
        <li class="active"><a href="index.html">Home</a></li>
        {{-- <li class="has-children">
          <a href="properties.html">Properties</a>
          <ul class="dropdown">
            <li><a href="#">Buy Property</a></li>
            <li><a href="#">Sell Property</a></li>
            <li class="has-children">
              <a href="#">Dropdown</a>
              <ul class="dropdown">
                <li><a href="#">Sub Menu One</a></li>
                <li><a href="#">Sub Menu Two</a></li>
                <li><a href="#">Sub Menu Three</a></li>
                <li><a href="#">Sub Menu four</a></li>
              </ul>
            </li>
          </ul>
        </li> --}}
        <li><a href="#popular">Popular</a></li>
        <li><a href="#staff">Staff</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="{{ route('login') }}">admin</a></li>
      </ul>

      <a
        href="#"
        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
        data-toggle="collapse"
        data-target="#main-navbar"
      >
        <span></span>
      </a>
    </div>
  </div>
</div>
</div>
</nav>

<div class="hero" id="section1">
    <div class="hero-slide">
      @foreach ($post as $item)
          
      <div
        class="img overlay"
        style="background-image: url('storage/images/posts/{{ $item->image }}')"
      >
    
      <div class="d-flex align-items-end h-100" data-aos="fade-up" data-aos-delay="200">
        <div class="card w-25">
          <div class="card-body">
            <h4 class="card-title">{{ $item->title }}</h4>
            <p class="card-text">{{ $item->message }}</p>
          </div>
        </div>
        
      </div>
    </div>
      {{-- <span class="h1">here</span> --}}
      @endforeach
    </div>
  </div>

  {{-- <div class=""></div> --}}
  <div class="section-0" id="popular">
    <div class="container">
      <div class="row mb-2 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold heading" style="color: #00204a">
            Popular Books
          </h2>
          {{-- <span class="h1">{{ $post }}</span> --}}
        </div>
        {{-- <div class="col-lg-6 text-lg-end">
          <p>
            <a
              href="#"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >View all properties</a
            >
          </p>
        </div> --}}
      </div>
      <div class="row">
        <div class="col-12">
          <div class="property-slider-wrap">
            <div class="property-slider">
              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/gst1.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>Summary Report 1925</span></div>
                  <div style="margin-top: 44px;">
                    <span class="d-block mb-2 text-black-50"
                      >by Edward Linkolin</span
                    >

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/gst2.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>Geological Survey of Belgium</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >by Kris Welkenhuysen</span
                    >

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/gst3.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>Ground Truth</span></div>
                  <div style="margin-top: 45px;">
                    <span class="d-block mb-2 text-black-50"
                      >by Ruby MCConel</span
                    >

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/gst4.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>The Tertiary History Of Grand Canon</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >by Dutton</span
                    >

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3" 
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->

              {{-- <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/img_5.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 California Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">California, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div> --}}
              <!-- .item -->

              {{-- <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 California Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">California, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div> --}}
              <!-- .item -->

              {{-- <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 California Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">California, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div> --}}
              <!-- .item -->

              {{-- <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/img_8.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 California Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">California, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div> --}}
              <!-- .item -->

              {{-- <div class="property-item">
                <a href="property-single.html" class="img">
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>$1,291,000</span></div>
                  <div>
                    <span class="d-block mb-2 text-black-50"
                      >5232 California Fake, Ave. 21BC</span
                    >
                    <span class="city d-block mb-3">California, USA</span>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">2 beds</span>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <span class="caption">2 baths</span>
                      </span>
                    </div>

                    <a
                      href="property-single.html"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div> --}}
              <!-- .item -->
            </div>

            <div
              id="property-nav"
              class="controls mb-3"
              tabindex="0"
              aria-label="Carousel Navigation"

            >
              <span
                class="prev"
                data-controls="prev"
                aria-controls="property"
                tabindex="-1"
                >Prev</span
              >
              <span
                class="next"
                data-controls="next"
                aria-controls="property"
                tabindex="-1"
                >Next</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-5 bg-light" id="staff">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5">
          <h2 class="font-weight-bold heading mb-4" style="color: #00204a">
            Staff Team 
          </h2>
        </div>
      </div>
      <div class="row">
        @foreach ($staff as $list)  
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mt-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{ $list->photo != NULL ? asset('storage/images/staff/'.$list->photo) : asset('assets/img/demo/user-placeholder.svg') }}"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">{{ $list->name }}</a></h2>
              <span class="meta d-block mb-3">{{ $list->title }}</span>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> <div class="section section-4 bg-light" id="about">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading mb-4" style="color: #00204a">
            About Us
          </h2>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0">
              <div>             
                  <h5>Brief history of Geological Survey of Tanzania Library</h5>
      
                  <p>The Geological Survey of Tanzania (GST) is an institution within the Ministry of Minerals was established as a Geological Survey Department (GSD) in 1925 by the colonial government for the purpose of executing mineral exploration activities in the country.</p>
                  <p>GST underwent different structural changes, whereby in 2005 GSD was elevated into a government executive agency and later in 2017 into autonomous government entity.</p>

                  <h5>The Geological Survey Library </h5>
      
                  <p>The Geological Survey of Tanzania Library in Dodoma which started in 1928 has such a comprehensive collection of approximately 4,000 published documents dealing with a wide variety of geological, geophysical, geochemical, geotechnical topics including international journals.</p>
                  <p>GST possesses a geological and mineral database which is virtually complete for work done since the mid 1930s and therefore is a major asset in the evaluation of the country’s mineral resources.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                  <h5>Core and rock Library</h5>
      
                  <p>Four warehouses are maintained in Dodoma with core and chip samples from drilling programmers’ carried out during the proceeding decades of exploration work. The Rock library is at the Tanzania Geological Survey in Dodoma, while the core warehouses are located at the Kizota industrial area in Dodoma city. The core warehouses that store thousands of meters of core from nearly 1,000 geological and exploration projects.</p>
                
                  <h5 style="margin-top: 65px">Archives</h5>
      
                  <p>The Archives at Dodoma contain a wealth of information from geological survey work,   company programs, co-operative inter-government projects and other sources. Approximately 6,000 documents are on file, ranging from single page to multivolume project reports. Professional staff are there to help searchers. </p>
              </div>
            </div>
      </div>
    </div>
  </div>
  <div class="section section-4 bg-light" id="contact">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading mb-4" style="color: #00204a">
            Contact Us
          </h2>
          {{-- <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit.
          </p> --}}
        </div>
      </div>
      <div class="row justify-content-between mb-5">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5908483395056!2d35.74537487369951!3d-6.185473660602298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de553dbe1a3c5%3A0xf7b0d156e6bc448f!2sGeological%20Survey%20of%20Tanzania!5e0!3m2!1sen!2stz!4v1710844006108!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4">
          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-home2"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Phone</h3>
              <ul class="list-unstyled links">
                  <li><a href="tel://11234567890">+255xxxxx</a></li>
                  <li><a href="tel://11234567890">+255xxxxx</a></li>
              </ul>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-person"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">E-Mail</h3>
              <p class="text-black-50">
                <ul class="list-unstyled links">
                    <li>
                        <a href="mailto:info@mydomain.com">gst@gmail.com</a>
                    </li>
                </ul>
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Website</h3>
              <p class="text-black-50">
                www.gst.go.tz
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>43 Raymouth Rd. Baltemoer, London 3910</address>
            <ul class="list-unstyled links">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li>
                <a href="mailto:info@mydomain.com">info@mydomain.com</a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Sources</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="list-unstyled float-start links">
              <li><a href="#">Partners</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Creative</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Our Vision</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-pinterest"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-dribbble"></span></a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <!-- 
            **==========
            NOTE: 
            Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
            **==========
          -->

          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            . All Rights Reserved. &mdash; Designed with love by
            <a href="https://untree.co">Untree.co</a>
            <!-- License information: https://untree.co/license/ -->
          </p>
          <div>
            Distributed by
            <a href="https://themewagon.com/" target="_blank">themewagon</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer -->

  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  @section('scripts')
  <script>
  
  var scrollPosition = $(window).scrollY;
  var firstSectionHeight = $("#section1").outerHeight();

  console.log('this is scroll position', scrollPosition);
    if (scrollPosition > firstSectionHeight) {
      $(".menu-bg-wrap").css("background-color", "#BAF0EC");
    } else {
      $(".menu-bg-wrap").css("background-color", ""); // Reset to default
    }
</script>
@endsection  
  
@endsection



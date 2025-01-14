@extends('user.comman.header')
@section('title') Course @endsection 
@section('content') 
<link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/preloader.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/meanmenu.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/animate.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/swiper-bundle.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/backToTop.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/elegantFont.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/default.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/custom.css')}}">



  <div class="float-section w-100">
    <div class="container">
      <div class="pay-float-buttons float-buttons">
        <div class="d-flex align-items-center justify-content-start flex-wrap">
          <a href="" class="e-btn e-btn-7 text-center me-3 mb-20 pay-btn"><i class="fas fa-sack-dollar me-2"></i> Pay</a>
          <!-- <a href="" class="e-btn e-btn-7 text-center me-3 mb-20"><i class="fas fa-sack-dollar me-2"></i> Binance Pay</a> -->
          <a href="" class="e-btn e-btn-7 text-center me-3 mb-20">
            <svg class="me-2" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Binance</title><path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z"/></svg> Binance Pay
          </a>
          <a href="" class="e-btn e-btn-7 text-center me-3 mb-20"><i class="fas fa-sack-dollar me-2"></i> Pay For Me</a>
          <a href="" class="e-btn e-btn-7 text-center mb-20"><i class="fas fa-shopping-cart me-2"></i> Add to Cart</a>
        </div>
      </div>
    </div>
  </div>
  <div class="cartmini__area">
    <div class="cartmini__wrapper">
      <div class="cartmini__title">
        <h4>Shopping cart</h4>
      </div>
      <div class="cartmini__close">
        <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
      </div>
      <div class="cartmini__widget">
        <div class="cartmini__inner">
          <ul>
            <li>
              <div class="cartmini__thumb">
                <a href="javascript:void(0)">
                  <img src="assets/img/course/sm/cart-1.jpg" alt="">
                </a>
              </div>
              <div class="cartmini__content">
                <h5><a href="javascript:void(0)">Strategy law and organisation Foundation </a></h5>
                <div class="product-quantity mt-10 mb-10">
                  <span class="cart-minus">-</span>
                  <input class="cart-input" type="text" value="1"/>
                  <span class="cart-plus">+</span>
                </div>
                <div class="product__sm-price-wrapper">
                  <span class="product__sm-price">$46.00</span>
                </div>
              </div>
              <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li>
            <li>
              <div class="cartmini__thumb">
                <a href="javascript:void(0)">
                  <img src="assets/img/course/sm/cart-2.jpg" alt="">
                </a>
              </div>
              <div class="cartmini__content">
                <h5><a href="javascript:void(0)">Fundamentals of music theory Learn new</a></h5>
                <div class="product-quantity mt-10 mb-10">
                  <span class="cart-minus">-</span>
                  <input class="cart-input" type="text" value="1"/>
                  <span class="cart-plus">+</span>
                </div>
                <div class="product__sm-price-wrapper">
                  <span class="product__sm-price">$32.00</span>
                </div>
              </div>
              <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li>
            <li>
              <div class="cartmini__thumb">
                <a href="javascript:void(0)">
                  <img src="assets/img/course/sm/cart-3.jpg" alt="">
                </a>
              </div>
              <div class="cartmini__content">
                <h5><a href="javascript:void(0)">Strategy law and organization Foundation </a></h5>
                <div class="product-quantity mt-10 mb-10">
                  <span class="cart-minus">-</span>
                  <input class="cart-input" type="text" value="1"/>
                  <span class="cart-plus">+</span>
                </div>
                <div class="product__sm-price-wrapper">
                  <span class="product__sm-price">$62.00</span>
                </div>
              </div>
              <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li>
          </ul>
        </div>
        <div class="cartmini__checkout">
          <div class="cartmini__checkout-title mb-30">
            <h4>Subtotal:</h4>
            <span>$113.00</span>
          </div>
          <div class="cartmini__checkout-btn">
            <a href="cart.html" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
            <a href="checkout.html" class="e-btn w-100"> <span></span> checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="body-overlay"></div>
  <!-- cart mini area end -->
  <!-- sidebar area start -->
  <div class="sidebar__area">
    <div class="sidebar__wrapper">
      <div class="sidebar__close">
        <button class="sidebar__close-btn" id="sidebar__close-btn">
          <span><i class="fal fa-times"></i></span>
          <span>close</span>
        </button>
      </div>
      <div class="sidebar__content">
        <div class="logo mb-40">
          <a href="index.html">
            <img src="assets/img/logo/logo.png" alt="logo">
          </a>
        </div>
        <div class="mobile-menu fix"></div>
        <div class="sidebar__search p-relative mt-40 ">
          <form action="#">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fad fa-search"></i></button>
          </form>
        </div>
        <div class="sidebar__cart mt-30">
          <a href="javascript:void(0)">
            <div class="header__cart-icon">
              <svg viewBox="0 0 24 24">
                <circle class="st0" cx="9" cy="21" r="1"/>
                <circle class="st0" cx="20" cy="21" r="1"/>
                <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
              </svg>
            </div>
            <span class="cart-item">2</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar area end -->      
  <div class="body-overlay"></div>
  <!-- sidebar area end -->
  <main>
    <!-- page title area start -->
    <section class="page__title-area pt-120 pb-90">
      <div class="page__title-shape">
        <img class="page-title-shape-5 d-none d-sm-block" src="assets/img/page-title/page-title-shape-1.png" alt="">
        <img class="page-title-shape-6" src="assets/img/page-title/page-title-shape-6.png" alt="">
        <img class="page-title-shape-7" src="assets/img/page-title/page-title-shape-4.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-xl-8 col-lg-8">
            <div class="course__wrapper">
                <!-- <div class="page__title-content mb-25">
                  <div class="page__title-breadcrumb">                            
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item"><a href="course-grid.html">Courses</a></li>
                          <li class="breadcrumb-item active" aria-current="page">The business Intelligence analyst Course 2022</li>
                        </ol>
                      </nav>
                  </div>
                  <span class="page__title-pre">Development</span>
                  <h5 class="page__title-3">The business Intelligence analyst Course 2022</h5>
                </div> -->
                <div class="course__meta-2 d-sm-flex mb-30">
                  <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                    <div class="course__teacher-thumb-3 mr-15">
                      <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                    </div>
                    <div class="course__teacher-info-3">
                      <h5>Teacher</h5>
                      <p><a href="javascript:void(0)">Elon Gated</a></p>
                    </div>
                  </div>
                  <div class="course__update mr-80 mb-30">
                    <h5>Last Update:</h5>
                    <p>July 24, 2022</p>
                  </div>
                  <div class="course__rating-2 mb-30">
                    <h5>Review:</h5>
                    <div class="course__rating-inner d-flex align-items-center">
                      <ul>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                      </ul>
                      <p>4.5</p>
                    </div>
                  </div>
                </div>
                <div class="course__img w-img mb-30 position-relative">
                  <img src="assets/img/course/details/course-details-1.jpg" alt="">
                  <div class="position-absolute" style="top: 1rem;left: 1rem;z-index: 2">
                    <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart fa-lg"></i></a>
                  </div>
                </div>
                <div class="course__tab-2 mb-45">
                  <ul class="nav nav-tabs" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span>Discription</span> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span>Curriculum</span> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span>Reviews</span> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Mates</span> </button>
                    </li>
                  </ul>
                </div>
                <div class="course__tab-content mb-95">
                  <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                      <div class="course__description">
                        <h3>Course Overview</h3>
                        <p>Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how's your father David skive off sloshed, don't get shirty with me chip shop vagabond crikey bugger Queen's English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it's your round don't get shirty with me down the pub well. Give us a bell bits and bobs Charles he lost his bottle super my lady cras starkers bite your arm off Queen's English, pardon me horse play Elizabeth a blinding shot chinwag knees up do one David, blag cup of tea Eaton so I said bleeding haggle James Bond cup of char. Gosh William ummm I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do with me nancy boy show off show off pick your nose and blow off spiffing good time lavatory me old mucker, chimney pot what a load of rubbish boot squiffy lost the plot brolly wellies excuse my french.</p>
                        <div class="course__tag-2 mb-35 mt-35">
                          <i class="fal fa-tag"></i>
                          <a href="javascript:void(0)">Big data,</a>
                          <a href="javascript:void(0)">Data analysis,</a>
                          <a href="javascript:void(0)">Data modeling</a>
                        </div>
                        <div class="course__description-list mb-45">
                          <h4>What is the Target Audience?</h4>
                          <ul>
                            <li> <i class="icon_check"></i> Business's managers, leaders</li>
                            <li> <i class="icon_check"></i> Downloadable lectures, code and design assets for all projects</li>
                            <li> <i class="icon_check"></i> Anyone who is finding a chance to get the promotion</li>
                          </ul>
                        </div>
                        <div class="course__instructor mb-45">
                          <h3>Other Instructors</h3>
                          <div class="course__instructor-wrapper d-md-flex align-items-center">
                            <div class="course__instructor-item d-flex align-items-center mr-70">
                              <div class="course__instructor-thumb mr-20">
                                <img src="assets/img/course/teacher/teacher-3.jpg" alt="">
                              </div>
                              <div class="course__instructor-content">
                                <h3>Eleanor Fant</h3>
                                <p>Instructor</p>
                              </div>
                            </div>
                            <div class="course__instructor-item d-flex align-items-center mr-70">
                              <div class="course__instructor-thumb mr-20">
                                <img src="assets/img/course/teacher/teacher-2.jpg" alt="">
                              </div>
                              <div class="course__instructor-content">
                                <h3>Lauren Stamps</h3>
                                <p>Teacher</p>
                              </div>
                            </div>
                            <div class="course__instructor-item d-flex align-items-center mr-70">
                              <div class="course__instructor-thumb mr-20">
                                <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                              </div>
                              <div class="course__instructor-content">
                                <h3>Jonquil Von</h3>
                                <p>Associate</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                      <div class="course__curriculum">
                        
                          <div class="accordion" id="course__accordion">
                            <div class="accordion-item mb-40">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Principal Topic
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#course__accordion">
                                <div class="accordion-body">
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Principal Topic
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#course__accordion">
                                <div class="accordion-body">
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>


                         <!--  <div class="accordion-item mb-50">
                            <h2 class="accordion-header" id="week-01">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content" aria-expanded="true" aria-controls="week-01-content">
                                Principal Topic
                              </button>
                            </h2>
                            <div id="week-01-content" class="accordion-collapse collapse show" aria-labelledby="week-01" >

                            </div>
                          </div>
                          <div class="accordion-item mb-50">
                            <h2 class="accordion-header" id="week-02">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-02-content" aria-expanded="false" aria-controls="week-02-content">
                                Principal Topic
                              </button>
                            </h2>
                            <div id="week-02-content" class="accordion-collapse  collapse" aria-labelledby="week-02" >
                            </div>
                          </div> -->

                      </div>
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                      <div class="course__review">
                        <h3>Reviews</h3>
                        <!-- <p>Gosh william I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do</p> -->
                        <!-- <div class="course__review-rating mb-50">
                          <div class="row g-0">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                              <div class="course__review-rating-info grey-bg text-center">
                                <h5>5</h5>
                                <ul>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                </ul>
                                <p>4 Ratings</p>
                              </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                              <div class="course__review-details grey-bg">
                                <h5>Detailed Rating</h5>
                                <div class="course__review-content mb-20">
                                  <div class="course__review-item d-flex align-items-center justify-content-between">
                                    <div class="course__review-text">
                                      <span>5 stars</span>
                                    </div>
                                    <div class="course__review-progress">
                                      <div class="single-progress" data-width="100%"></div>
                                    </div>
                                    <div class="course__review-percent">
                                      <h5>100%</h5>
                                    </div>
                                  </div>
                                  <div class="course__review-item d-flex align-items-center justify-content-between">
                                    <div class="course__review-text">
                                      <span>4 stars</span>
                                    </div>
                                    <div class="course__review-progress">
                                      <div class="single-progress" data-width="30%"></div>
                                    </div>
                                    <div class="course__review-percent">
                                      <h5>30%</h5>
                                    </div>
                                  </div>
                                  <div class="course__review-item d-flex align-items-center justify-content-between">
                                    <div class="course__review-text">
                                      <span>3 stars</span>
                                    </div>
                                    <div class="course__review-progress">
                                      <div class="single-progress" data-width="0%"></div>
                                    </div>
                                    <div class="course__review-percent">
                                      <h5>0%</h5>
                                    </div>
                                  </div>
                                  <div class="course__review-item d-flex align-items-center justify-content-between">
                                    <div class="course__review-text">
                                      <span>2 stars</span>
                                    </div>
                                    <div class="course__review-progress">
                                      <div class="single-progress" data-width="0%"></div>
                                    </div>
                                    <div class="course__review-percent">
                                      <h5>0%</h5>
                                    </div>
                                  </div>
                                  <div class="course__review-item d-flex align-items-center justify-content-between">
                                    <div class="course__review-text">
                                      <span>1 stars</span>
                                    </div>
                                    <div class="course__review-progress">
                                      <div class="single-progress" data-width="0%"></div>
                                    </div>
                                    <div class="course__review-percent">
                                      <h5>0%</h5>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        <div class="course__comment mb-75">
                          <!-- <h3>2 Comments</h3> -->
                          <ul>
                            <li>
                              <div class="course__comment-box ">
                                <div class="course__comment-thumb float-start">
                                  <img src="assets/img/course/comment/course-comment-1.jpg" alt="">
                                </div>
                                <div class="course__comment-content">
                                  <div class="course__comment-wrapper ml-70 fix">
                                    <div class="course__comment-info float-start">
                                      <h4>Eleanor Fant</h4>
                                      <span>July 14, 2022</span>
                                    </div>
                                    <div class="course__comment-rating float-start float-sm-end">
                                      <ul>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" > <i class="icon_star"></i> </a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="course__comment-text ml-70">
                                    <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="course__comment-box ">
                                <div class="course__comment-thumb float-start">
                                  <img src="assets/img/course/comment/course-comment-2.jpg" alt="">
                                </div>
                                <div class="course__comment-content">
                                  <div class="course__comment-wrapper ml-70 fix">
                                    <div class="course__comment-info float-start">
                                      <h4>Shahnewaz Sakil</h4>
                                      <span>July 17, 2022</span>
                                    </div>
                                    <div class="course__comment-rating float-start float-sm-end">
                                      <ul>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" class="no-rating"> <i class="icon_star"></i> </a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="course__comment-text ml-70">
                                    <p>David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="course__form">
                          <h3>Write a Review</h3>
                          <div class="course__form-inner">
                            <form action="#">
                              <div class="row">
                                <!-- <div class="col-xxl-6">
                                  <div class="course__form-input">
                                    <input type="text" placeholder="Your Name">
                                  </div>
                                </div>
                                <div class="col-xxl-6">
                                  <div class="course__form-input">
                                    <input type="email" placeholder="Your Email">
                                  </div>
                                </div> -->
                                <div class="col-xxl-12">
                                  <div class="course__form-input">
                                    <input type="text" placeholder="Review Title">
                                  </div>
                                </div>
                                <div class="col-xxl-12">
                                  <div class="course__form-input">
                                    <div class="course__form-rating">
                                      <span>Rating : </span>
                                      <ul>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" class="no-rating" > <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" class="no-rating" > <i class="icon_star"></i> </a></li>
                                      </ul>
                                    </div>
                                    <textarea placeholder="Review Summary"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xxl-12">
                                  <div class="course__form-btn mt-10 mb-55">
                                    <button type="submit" class="e-btn">Submit Review</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                      <div class="course__member mb-45">
                        <div class="course__member-item">
                          <div class="row align-items-center">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                              <div class="course__member-thumb d-flex align-items-center">
                                <img src="assets/img/course/instructor/course-instructor-1.jpg" alt="">
                                <div class="course__member-name ml-20">
                                  <h5>Shahnewaz Sakil</h5>
                                  <span>Engineer</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-45">
                                <h5>07</h5>
                                <span>Courses</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-70">
                                <h5>05</h5>
                                <span>Reviw</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-85">
                                <h5>3.00</h5>
                                <span>Rating</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="course__member-item">
                          <div class="row align-items-center">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                              <div class="course__member-thumb d-flex align-items-center">
                                <img src="assets/img/course/instructor/course-instructor-2.jpg" alt="">
                                <div class="course__member-name ml-20">
                                  <h5>Lauren Stamps</h5>
                                  <span>Teacher</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-45">
                                <h5>05</h5>
                                <span>Courses</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-70">
                                <h5>03</h5>
                                <span>Reviw</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-85">
                                <h5>3.00</h5>
                                <span>Rating</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="course__member-item">
                          <div class="row align-items-center">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">
                              <div class="course__member-thumb d-flex align-items-center">
                                <img src="assets/img/course/instructor/course-instructor-3.jpg" alt="">
                                <div class="course__member-name ml-20">
                                  <h5>Jonquil Von</h5>
                                  <span>Associate</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-45">
                                <h5>09</h5>
                                <span>Courses</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-70">
                                <h5>07</h5>
                                <span>Reviw</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-85">
                                <h5>4.00</h5>
                                <span>Rating</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="course__share">
                      <h3>Share :</h3>
                      <ul>
                        <li><a href="javascript:void(0)" class="fb" ><i class="social_facebook"></i></a></li>
                        <li><a href="javascript:void(0)" class="tw" ><i class="social_twitter"></i></a></li>
                        <li><a href="javascript:void(0)" class="pin" ><i class="social_pinterest"></i></a></li>
                      </ul>
                    </div> -->
                  </div>
                </div>
                <div class="course__related">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="section__title-wrapper mb-40">
                        <h2 class="section__title">Related <span class="yellow-bg yellow-bg-big">Course<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="course__slider swiper-container pb-60">
                        <div class="swiper-wrapper">
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="course-details.html">
                                <img src="assets/img/course/course-1.jpg" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>4.5 (44)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="course-details.html">Become a product Manager learn the skills & job.</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                  </div>
                                  <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status">
                                <span>Free</span>
                              </div>
                              <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="course-details.html">
                                <img src="assets/img/course/course-2.jpg" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)" class="sky-blue">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>4.5 (44)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="course-details.html">Fundamentals of music theory Learn new</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-2.jpg" alt="">
                                  </div>
                                  <h6><a href="instructor-details.html">Barry Tone</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status d-flex align-items-center">
                                <span class="sky-blue">$32.00</span>
                                <span class="old-price">$68.00</span>
                              </div>
                              <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="course-details.html">
                                <img src="assets/img/course/course-3.jpg" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)" class="green">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>3.5 (55)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="course-details.html">Strategy law and organization Foundation</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-3.jpg" alt="">
                                  </div>
                                  <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status d-flex align-items-center">
                                <span class="green">$46.00</span>
                                <span class="old-price">$68.00</span>
                              </div>
                              <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="course-details.html">
                                <img src="assets/img/course/course-4.jpg" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)" class="blue">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>4.5 (42)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="course-buy.html">The business Intelligence analyst Course 2022</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-4.jpg" alt="">
                                  </div>
                                  <h6><a href="course-buy.html">Eleanor Fant</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status d-flex align-items-center">
                                <span class="blue">$62.00</span>
                                <span class="old-price">$97.00</span>
                              </div>
                              <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
              <div class="course__sidebar pl-70 p-relative">
                <div class="course__shape">
                  <img class="course-dot" src="assets/img/course/course-dot.png" alt="">
                </div>
                <div class="course__sidebar-widget-2 white-bg mb-20">
                  <div class="course__video">
                    <div class="course__video-thumb w-img mb-25">
                      <img src="assets/img/course/video/course-video.jpg" alt="">
                      <div class="course__video-play"> 
                        <a href="https://youtu.be/yJg-Y5byMMw" data-fancybox="" class="play-btn"> <i class="fas fa-play"></i> </a>
                      </div>
                    </div>
                    <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                      <div class="course__video-price">
                        <h5>$74.<span>00</span> </h5>
                        <h5 class="old-price">$129.00</h5>
                      </div>
                      <div class="course__video-discount">
                        <span>68% OFF</span>
                      </div>
                    </div>
                    <div class="course__video-content mb-35">
                      <ul>
                        <li class="d-flex align-items-center">
                          <div class="course__video-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                              <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                              <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                            </svg>
                          </div>
                          <div class="course__video-info">
                            <h5><span>Instructor :</span> Eleanor Fant</h5>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="course__video-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                              <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                              <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
                            </svg>
                          </div>
                          <div class="course__video-info">
                            <h5><span>Lectures :</span>14</h5>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="course__video-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                              <circle class="st0" cx="8" cy="8" r="6.7"/>
                              <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>
                            </svg>
                          </div>
                          <div class="course__video-info">
                            <h5><span>Duration :</span>6 weeks</h5>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="course__video-icon">
                            <svg>
                              <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                              <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                            </svg>
                          </div>
                          <div class="course__video-info">
                            <h5><span>Enrolled :</span>20 students</h5>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="course__video-icon">
                            <svg>
                              <circle class="st0" cx="8" cy="8" r="6.7"/>
                              <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                              <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                            </svg>
                          </div>
                          <div class="course__video-info">
                            <h5><span>Language :</span>English</h5>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="course__enroll-btn">
                      <a href="signup.html" class="e-btn e-btn-7 w-100"><i class="fas fa-sack-dollar me-2"></i> Pay</a>
                    </div>
                    <div class="course__enroll-btn mt-20">
                      <a href="signup.html" class="e-btn e-btn-7 w-100">
                      <svg class="me-2" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Binance</title><path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z"/></svg>Binance Pay
                    </a>
                    <!-- <a href="signup.html" class="e-btn e-btn-7 w-100"><i class="fas fa-sack-dollar me-2"></i> Binance Pay</a> -->
                    </div>
                    <div class="course__enroll-btn mt-20">
                      <a href="signup.html" class="e-btn e-btn-7 w-100"><i class="fas fa-sack-dollar me-2"></i> Pay for me</a>
                    </div>
                  </div>
                </div>
                <div class="course__sidebar-widget-2 white-bg mb-20">
                  <div class="course__sidebar-course">
                    <h3 class="course__sidebar-title">Surprise Discount</h3>
                    <ul>
                      <li>
                        <a href="#" class="e-btn e-btn-7 text-start h-auto p-2">
                          <div class="course__sm d-flex align-items-center">
                            <div class="course__sm-thumb ml-10 mr-30">
                              <i class="far fa-paper-plane" style="font-size: 17px;"></i>
                            </div>
                            <div class="course__sm-content">
                              <!-- <div class="course__sm-rating">
                                <ul>a
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                  <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                </ul>
                              </div> -->
                              <h6 class="mb-0 text-white">Share for a surprise discount</h6>
                              <!-- <div class="course__sm-price">
                                <span>$54.00</span>
                              </div> -->
                            </div>
                          </div>
                        </a>
                      </li>
                      <!-- <li>
                        <div class="course__sm d-flex align-items-center mb-30">
                          <div class="course__sm-thumb mr-20">
                            <a href="javascript:void(0)">
                            <img src="assets/img/course/sm/course-sm-2.jpg" alt="">
                            </a>
                          </div>
                          <div class="course__sm-content">
                            <div class="course__sm-rating">
                              <ul>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                              </ul>
                            </div>
                            <h5><a href="javascript:void(0)">English Language </a></h5>
                            <div class="course__sm-price">
                              <span>$72.00</span>
                            </div>
                          </div>
                        </div>
                        </li>
                        <li>
                        <div class="course__sm d-flex align-items-center mb-10">
                          <div class="course__sm-thumb mr-20">
                            <a href="javascript:void(0)">
                            <img src="assets/img/course/sm/course-sm-3.jpg" alt="">
                            </a>
                          </div>
                          <div class="course__sm-content">
                            <div class="course__sm-rating">
                              <ul>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                              </ul>
                            </div>
                            <h5>
                              <a href="javascript:void(0)">UX Design</a>
                            </h5>
                            <div class="course__sm-price">
                              <span>Free</span>
                            </div>
                          </div>
                        </div>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- page title area end -->
    </main>



@endsection
@section('script')
    <script src="{{ URL::asset('/school-js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/vendor/waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/jquery.meanmenu.js')}}"></script>
    <script src="{{ URL::asset('/school-js/swiper-bundle.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/parallax.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/backToTop.js')}}"></script>
    <script src="{{ URL::asset('/school-js/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/ajax-form.js')}}"></script>
    <script src="{{ URL::asset('/school-js/wow.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('/school-js/main.js')}}"></script>

    <script type="">
      $(document).ready(function(){
        $(".extra-buttons .wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>
    <script type="">
      $(document).ready(function(){
        $(".position-absolute .wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>
@endsection

















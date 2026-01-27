<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nextinn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <style>
    * {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    :root {
      --primary-color-1: #D1D1D1 !important;
      --color-1: #D1D1D1 !important;
      --color-5: #1F1F1F !important;
      --color-2: #8B8B8B !important;
      --clr1: #D1D1D1 !important;
      --clr2: #FFFFFF !important;
      --clr3: #C82AEF !important;
      --clr4: #8B8B8B !important;
      --clr5: white !important;
      --clr6: #988b8b !important;
      --clr7: black !important;
      --clr8: #0e0e0e !important;
      --clr9: #BCBCBC !important;
      --clr10: #7A7A7A !important;
      --th-bg-color-2: #0E0E0E !important;
      --th-bg-clr-3: #040404 !important;
    }

    body {
      background-color: black;
    }

    /* Utility Classes */
    .margin-left-minus-9 {
      margin-left: -9px;
    }

    .font-bold {
      font-weight: bold;
    }

    .font-bold-7 {
      font-weight: 700;
    }

    .p-r {
      position: relative !important;
    }

    .in-bl {
      display: inline-block !important;
    }

    .m-t-2 {
      margin-top: 2px;
    }

    .ml5 {
      margin-left: 5px;
    }

    .mt70 {
      margin-top: 70px
    }

    .p-b-70 {
      padding-bottom: 70px;
    }

    .br20 {
      border-radius: 20px;
    }

    .p14 {
      padding: 14px;
    }

    /* Utility Classes */



    /* Header */
    .header .d1 {
      background-color: #0e0e0e;
      margin-left: 14px;
      margin-top: 14px;
      max-width: 98%;
    }

    .header .logo {
      margin-top: 6px;
    }

    .header nav ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul {
      background-color: black !important;
      border: 1px solid #bb18d1;
    }

    .header nav ul li ul li {
      /* border-bottom: 1px solid #bb18d1; */
    }

    .header nav ul li ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul li a:hover {
      /* border-bottom: 1px solid #bb18d1; */
      background-color: transparent !important;
      font-weight: 500;
    }

    .header .contact-d {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .header .contact-d .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 5px;
      display: inline-block;
    }

    .header .contact-d .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .header .contact-d .number-d {
      display: inline-block;
    }

    .header .contact-d .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    /* Header */

    /*Home Section 2*/

    .h-sc2 {
      border-bottom: 1px solid var(--color-5);
    }

    .h-sec2 {
      background-image: url('images/bg-img-1.png');
      background-repeat: no-repeat;
      background-size: cover
    }

    .h-sec2 h1.margin-top {
      margin-top: 58px;
    }

    .h-sec2 h1 {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 86px;
      max-width: 1043px;
      color: #D1D1D1;
      background: linear-gradient(to right, #ffffff, #988b8b, black);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .h-sec2 .p1 {
      color: #8B8B8B;
      max-width: 598px;
    }

    .h-sec2 .p2 {
      color: #8B8B8B;
      text-align: justify;
      font-size: 14px;
    }

    .get-started {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .get-started .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 17px;
      display: inline-block;
    }

    .get-started .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .get-started .number-d {
      display: inline-block;
      margin-left: 22px;
    }

    .get-started .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    .person-images {
      max-width: 53px;
      border: 4px solid #c82aef;
      border-radius: 27px;
    }

    .h-sec2 .positive-reviews {
      color: var(--primary-color-1);
      max-width: 166px;
    }

    .h-sec2 .per-imgs-d {
      top: -15px;
    }

    /*Home Section 2*/


    @media (min-width: 992px) {
      .navbar .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    }

    @media screen and (max-width: 575px) {
      .header .logo-container {
        max-width: 144px;
        margin: auto;
      }

      nav .container .collapse-container {
        max-width: 58px;
        margin: auto;
      }

      .h-sec11 .sec2 input.form-control.email-input {
        width: 100%;
      }

      .header .contact-d-container {
        max-width: 203px;
        margin: auto;
      }

      .text-center-m {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">

    <?php
    include "header.php";
    ?>

    <style>
      @media screen and (max-width: 575px) {
        .mmt70 {
          margin-top: 70px;
        }

        .h-sc2 .get-started {
          margin: auto;
          margin-top: 70px;
        }

        .h-sc2 .positive-reviews-container {
          max-width: 120px;
        }

        .h-sc2 .reviews-container {
          max-width: 270px;
          margin: auto;
        }
      }
    </style>


    <div class="row h-sc2">
      <div class="col-lg-2"></div>
      <div class="col-lg-10 h-sec2 p-b-70">
        <h1 class="text-center-m margin-top">Amplify Your Brand with</h1>
        <h1 class="text-center-m">Cutting-Edge Digital </h1>
        <h1 class="text-center-m">Marketing</h1>

        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-8">
            <p class="p1 mmt70">Marko empowers businesses to grow online with data driven digital marketing, innovative
              branding, and performance focused strategies trusted by top brands lorem ipsum dolor sit amet consectetur.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-3">
                <div class="ratio ratio-16x9 mmt70">
                  <iframe src="https://www.youtube.com/embed/KLuTLF3x9sA" title="YouTube video" allowfullscreen>
                  </iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <p class="p2 mmt70">Watch our video reviews and see how businesses achieve success with Nextinn digital
                  marketing solutions.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-3">
                <div class="get-started mmt70">
                  <div class="number-d">
                    <span style="">Get Started</span>
                  </div>
                  <div class="phone-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="reviews-container">
                  <div class="in-bl p-r per-imgs-d mmt70">
                    <img class="img-responsive person-images" src="images/person1.png">
                    <img class="img-responsive person-images margin-left-minus-9" src="images/person2.png">
                    <img class="img-responsive person-images margin-left-minus-9" src="images/person3.png">
                  </div>
                  <div class="in-bl m-t-2 positive-reviews-container">
                    <p class="positive-reviews font-bold-7">2.7k Positive Reviews</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .h-sec3 .d1 {
        background-image: url('images/bg-img-2.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 500px;
        border-top-left-radius: 25px;
        border-radius: 22px;
      }

      .h-sec3 .d1 .d1-in1 {
        background-color: var(--th-bg-color-2);
        box-shadow: -2px -2px 6px var(--clr3),
          -15px 11px var(--th-bg-clr-3),
          17px 11px var(--th-bg-clr-3),
          2px 11px var(--th-bg-clr-3),
          15px 1px var(--th-bg-clr-3),
          16px -17px var(--th-bg-clr-3);
        max-width: 78%;
        display: inline-block;
      }

      .h-sec3 .d1 .d1-in1 h4 {
        color: var(--color-1);
      }

      .h-sec3 .d1 .d1-in1 h6 {
        color: var(--color-2);
      }

      .h-sec3 .d1 .d1-in1 p {
        color: var(--clr3);
      }

      .h-sec3 .detail p i {
        color: var(--clr3);
      }

      .h-sec3 .detail p span {
        color: var(--clr1);
      }

      .h-sec3 .detail h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .h-sec3 .detail .detail-paragraph {
        color: var(--color-2);
      }

      .h-sec3 .detail h3 {
        color: var(--color-1);
      }


      /* @media(min-width: 992px){ */
      .h-sec3 .detail .heading-container {
        margin-top: 27px;
      }

      .h-sec3 .detail .detail-paragraph {
        margin-top: 27px;
      }

      .h-sec3 .detail h3 {
        margin-top: 27px;
      }

      .h-sec3 .detail ul {
        padding-left: 0px;
      }

      .h-sec3 .detail ul li {
        color: var(--color-2);
        list-style: none;
        margin-bottom: 5px;
      }

      .h-sec3 .detail ul li i {
        color: var(--clr3);
        display: inline-block;
        margin-right: 5px;
      }

      .h-sec3 .detail .years-of-experience-d {
        background: linear-gradient(to bottom right, #1F1F1F, #0E0E0E);
        margin-left: -12px;
        border-radius: 15px;
        padding: 57px 20px;
        box-shadow: 1px 1px 4px #c82aef;
        margin-top: 14px;
      }

      .h-sec3 .detail .years-of-experience-d h2 {
        font-size: 60px;
        font-weight: bold;
        color: transparent;
        /* makes the text itself transparent */
        -webkit-text-stroke: 2px var(--clr3);
        /* creates the border/outline */
        /* for browsers that support the standard property */
        /* optional: center text */
        text-align: center;
      }

      .h-sec3 .detail .years-of-experience-d .text-d {
        max-width: 154px;
        color: var(--clr1);
      }

      .h-sec3 .detail .years-of-experience-d .text1 {
        color: var(--clr4);
        font-size: 13px;
        margin-top: 23px;
        line-height: 1.8;
      }

      .h-sec3 .detail {
        margin-left: 17px;
      }




      /* } */


      .right-arrow-d {
        background-color: var(--clr3);
        color: var(--clr5);
        padding: 4px 9px;
        border-radius: 19px;
        margin-left: 13px;
      }


      @media screen and (max-width: 575px) {
        .mmt140 {
          margin-top: 70px;
        }

        .h-sc2 .get-started {
          margin: auto;
          margin-top: 70px;
        }
      }
    </style>
    <!-- Section 3 -->
    <div class="row h-sec3 mt70 mmt140">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-4 d1">
            <div class="d1-in1 p14 br20" style="margin-left: -12px;">
              <h4>Ready to Elevate Your Digital Presence</h4>
              <br>
              <br>
              <h6>Let's Create a custom strategy that fits your business goals.</h6>
              <br>
              <div class="in-bl">
                <p>Get Free Consultation</p>
              </div>
              <div class="in-bl right-arrow-d">
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>



            <div style="
                width: 75px;
                height: 100px;
                background-color: red;
                display: inline-block;
                position: relative;
                top: -121px;
                margin-left: 14px;
                box-shadow: -6px -14px black;
                background-color: transparent;
                border-top-left-radius: 25px;
            ">
            </div>
            <div style="
              width: 107px;
              height: 59px;
              background-color: transparent;
              margin-left: -13px;
              box-shadow: -11px -5px black;
              /* background-color: transparent; */
              border-top-left-radius: 30px;
              margin-top: 11px;
          ">
            </div>


          </div>

          <div class="col-lg-6">
            <div class="detail mmt70">
              <p class="text-center-m">
                <i class="far fa-dot-circle"></i>
                <span class="in-bl ml5">Our Expertise</span>
              </p>

              <div class="heading-container">
                <h1 class="text-center-m">Data Driven Strategies</h1>
                <h1 class="text-center-m">Measurable Results</h1>
              </div>

              <p class="detail-paragraph text-center-m">
                At Marko, we specialize in crafting innovative digital marketing strategies that drive real business
                growth. Our expertise ensures your brand stays ahead in the competitive digital landscape.
              </p>

              <div class="row">
                <div class="col-lg-6">
                  <h3 class="what-we-do-heading text-center-m">What We Do Best</h3>
                  <ul class="text-center-m">
                    <li><i class="far fa-check-circle"></i>AI Chatbot Development</li>
                    <li><i class="far fa-check-circle"></i> ChatGPT Integration</li>
                    <li><i class="far fa-check-circle"></i> Machine and Deep Learning</li>
                    <li><i class="far fa-check-circle"></i> Computer Vision</li>
                    <li><i class="far fa-check-circle"></i> Big Data Analytics</li>
                    <li><i class="far fa-check-circle"></i> Predictive Modeling</li>
                    <li><i class="far fa-check-circle"></i> Custom Software Development</li>
                    <li><i class="far fa-check-circle"></i> DevOps</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <div class="years-of-experience-d">
                    <div class="in-bl">
                      <h2>21+</h2>
                    </div>
                    <div class="in-bl text-d">
                      <h6>Years of Experience On Digital Marketing Services</h6>
                    </div>
                    <h6 class="text1">Lorem ipsum dolor sit amet consectetur adipiscing elit in ex ligula varius at
                      rutrum et finibus sed felis quisque.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <!-- Section 3 -->



    <style>
      .h-sec4 .main-headings {
        background: linear-gradient(to right, #ffffff, var(--clr6), var(--clr7));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .h-sec4 .text {
        color: var(--clr4);
      }

      .h-sec4 .buttons {
        display: inline-block;
        padding: 2px 13px;
        border-radius: 7px;
        /* border: 1px solid red; */
        background-color: black;
        box-shadow: 1px 1px 2px var(--clr3);
      }

      .h-sec4 .buttons h2 {
        color: var(--clr1);
      }

      .h-sec4 .buttons-r {
        margin-top: 20px;
      }

      @media screen and (max-width: 575px) {
        .h-sec4 .buttons {
          max-width: 100px;
          margin: auto;
          display: block;
        }
      }
    </style>

    <!-- Section 4 -->
    <div class="row h-sec4 mt70">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10" style="background: linear-gradient(to bottom right, var(--clr8), black);padding: 26px 10px;
    border-radius: 22px;">
            <div class="row" style="">
              <div class="col-lg-6">
                <h1 class="main-headings text-center-m">Powering Success for </h1>
                <h1 class="main-headings text-center-m">Top Brands</h1>
              </div>
              <div class="col-lg-6">
                <p class="text text-center-m">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ex ligula,
                  varius at rutrum et, finibus sed felis. Quisque eget tincidunt lectus. Sed quis diam sed neque mattis
                  feugiat.</p>
              </div>
            </div>
            <div class="row buttons-r">
              <div class="col-lg-1"></div>
              <div class="col-lg-1"></div>
              <div class="col-lg-2">
                <div class="buttons">
                  <h2>crevo</h2>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="buttons">
                  <h2>Brande</h2>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="buttons">
                  <h2>bravi</h2>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="buttons">
                  <h2>Nexoi</h2>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <!-- Section 4 -->

    <style>
      .h-sec5 .boxes {
        background: linear-gradient(to bottom right, #0E0E0E, #1F1F1F);
        border-radius: 23px;
        padding: 22px 22px 25px 5px;
        margin-bottom: 18px;
      }

      .h-sec5 .boxes .icon-container {
        padding: 15px;
        display: inline-block;
        border-radius: 20px;
        background: linear-gradient(to bottom right, #1F1F1F, #0E0E0E);
        margin-top: 75px;
        box-shadow: -1px -1px 2px #c82aef,
          12px 0px black,
          -12px 0px black,
          -0px -12px black,
          -0px 12px black,
          10px -10px black,
          10px 10px black,
          -10px -10px black,
          -10px 10px black,
          -25px -11px black,
          -25px 11px black
      }

      .h-sec5 .boxes .icon-container img {
        max-width: 57px;
      }

      .h-sec5 .boxes h1 {
        color: var(--clr1);
        font-size: 28px;
      }

      .h-sec5 .boxes h3 {
        font-size: 18px;
        margin-top: 33px;
        color: var(--clr4);
        line-height: 1.5;
      }

      .h-sec5 .boxes p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .h-sec5 .detail p i {
        color: var(--clr3);
      }

      .h-sec5 .detail p span {
        color: var(--clr1);
      }

      .h-sec5 .detail h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .h-sec5 .detail .detail-paragraph {
        color: var(--color-2);
      }

      .h-sec5 .detail .boxes h2 {
        color: var(--clr1);
        font-size: 28px;
      }

      @media screen and (max-width: 575px) {
        .h-sec5 .detail {}
      }
    </style>

    <!-- Section 5 -->
    <div class="row h-sec5 mt70">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-6">
                <div class="row boxes">
                  <div class="col-lg-3">
                    <div class="icon-container">
                      <img class="img-responsive" src="images/icon1.png">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <h1>Data Driven Approach</h1>
                    <h3>Every decision is backed by real-time analytics for maximum impact lorem ipsum dolor sit
                      consectetur adipiscing elit ut elit tellus luctus nec.</h3>
                    <div class="in-bl">
                      <p>Read More</p>
                    </div>
                    <div class="in-bl right-arrow-d">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
                <div class="row boxes">
                  <div class="col-lg-3">
                    <div class="icon-container">
                      <img class="img-responsive" src="images/icon2.png">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <h1>Creative and Innovative</h1>
                    <h3>Cutting-edge marketing techniques to keep you ahead of the competition lorem ipsum dolor sit
                      awsа consectetur adipiscing elit ut elit.</h3>
                    <div class="in-bl">
                      <p>Read More</p>
                    </div>
                    <div class="in-bl right-arrow-d">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
                <div class="row boxes">
                  <div class="col-lg-3">
                    <div class="icon-container">
                      <img class="img-responsive" src="images/icon3.png">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <h1>Transparent Reporting</h1>
                    <h3>Clear insights and performance tracking, so you always know your ROI lorem ipsum dolo
                      consectetur adipiscing elit ut elit tellus luctus nec.</h3>
                    <div class="in-bl">
                      <p>Read More</p>
                    </div>
                    <div class="in-bl right-arrow-d">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 detail mmt70">
                <p>
                  <i class="far fa-dot-circle"></i>
                  <span class="in-bl ml5 mmt70">Why Choose Nextinn</span>
                </p>
                <div class="heading-container">
                  <h1 class="mmt70">Your Success Is Our</h1>
                  <h1 class="">Mission</h1>
                </div>
                <p class="detail-paragraph mmt70">
                  In the fast-paced digital world, choosing the right marketing partner makes all the difference. At
                  Marko, we don't just create campaigns—we craft strategies that deliver measurable success.
                </p>

                <div
                  style="background-image:url('images/bg-img-3.png');background-size: cover; background-position: center; height:100%;border-radius:22px;max-height:639px;position:relative;">
                  <div class="boxes" style="    max-width: 297px;
    position: absolute;
    bottom: -19px;
    right: 0;
    box-shadow: -15px 17px black, -15px -14px black, 23px -15px black;">
                    <h2 style="font-size: 28px;">Partner with NextInn and take your brand to the next level</h2>
                    <div class="in-bl">
                      <p>Read More</p>
                    </div>
                    <div class="in-bl right-arrow-d">
                      <i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 5 -->

    <style>
      .h-sec6 {
        height: 100px;
        /* adjust as needed */
      }

      .h-sec6 .video-bg {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }

      .h-sec6 .video-bg iframe {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 177.77vh;
        /* 16:9 */
        height: 100%;
        min-width: 100%;
        min-height: 56.25vw;
        transform: translate(-50%, -50%);
        pointer-events: none;
        z-index: 1;
      }

      .h-sec6 .video-bg .content {
        position: relative;
        z-index: 2;
        color: #fff;
        /* text-align: center; */
        padding-top: 40vh;
        padding-left: 240px;
        max-width: 1289px;
      }
    </style>
    <!-- Section 6 -->
    <div class="row h-sec6 mt70">
      <div class="col-lg-12">
        <div class="video-bg mmt70" style="border-radius: 10px;">
          <iframe src="https://www.youtube.com/embed/KLuTLF3x9sA" frameborder="0" allowfullscreen>
          </iframe>
          <!-- Optional content on top -->
          <div class="content">
            <h1>Transform Your Business with Nextinn</h1>
            <h3>Take your digital marketing to the next level with data-driven strategies and innovative solutions.
              Let's create something amazing together!</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 6 -->

    <style>
      .h-sec7 {
        margin-top: 370px;
      }

      .h-sec7 .info p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .h-sec7 .info p i {
        color: var(--clr3);
      }

      .h-sec7 .info p span {
        color: var(--clr1);
      }

      .h-sec7 .info h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .h-sec7 .boxes {
        background: linear-gradient(to bottom right, #0E0E0E, #1F1F1F);
        padding: 17px;
        border-radius: 15px;
        padding-bottom: 26px;
        margin-top: 20px;
      }

      .h-sec7 .boxes .icon-container {
        padding: 15px;
        display: inline-block;
        border-radius: 9px;
        background: linear-gradient(to bottom right, #1F1F1F, #0E0E0E);
        /* margin-top: 75px; */
        /* box-shadow: -1px -1px 2px #c82aef,
                    12px 0px black, 
                    -12px 0px black, 
                    -0px -12px black, 
                    -0px 12px black, 
                    10px -10px black, 
                    10px 10px black, 
                    -10px -10px black, 
                    -10px 10px black, 
                    -25px -11px black, 
                    -25px 11px black */
      }

      .h-sec7 .boxes h1 {
        font-size: 20px;
        color: var(--clr1);
        position: relative;
        top: 17px;
        margin-left: 10px;
      }

      .h-sec7 .boxes .container1 {
        border: 11px solid black;
        display: inline-block;
        border-radius: 18px;
        display: inline-block;
        box-shadow: -1px -1px 1px #c529eb;
      }

      .h-sec7 .boxes .heading-container {
        width: 184px;
      }

      .h-sec7 .boxes .icon-container img {
        max-width: 57px;
      }

      .h-sec7 .boxes .view-details-d {
        border-radius: 30px;
        background-color: black;
        padding: 4px 0px;
        max-width: 370px;
        box-shadow: -3px -2px 3px #c82aef;
        margin-top: 41px;
      }

      .h-sec7 .boxes .view-details-d .icon-d {
        background-color: #C82AEF;
        width: 38px;
        padding: 6px 10px;
        border-radius: 23px;
        margin-left: 5px;
        display: inline-block;
        margin-left: 63px;
      }

      .h-sec7 .boxes .view-details-d .icon-d i {
        color: white !important;
        font-size: 25px;
      }

      .h-sec7 .boxes .view-details-d .text-d {
        display: inline-block;
        margin-left: 93px;
      }

      .h-sec7 .boxes .view-details-d .text-d span {
        color: var(--clr1);
      }

      .h-sec7 .boxes h3 {
        font-size: 18px;
        margin-top: 33px;
        color: var(--clr4);
        line-height: 1.5;
      }

      .h-sec7 .custom-solution-d p {
        color: var(--clr1);
        margin-top: 33px;
      }

      .h-sec7 .custom-solution-d p span {
        color: var(--clr3);
      }

      @media screen and (max-width: 575px) {
        .h-sec7 {
          margin-top: 968px;
        }

        .h-sec7 .boxes .view-details-d .text-d {
          margin-left: 123px;
        }

        .h-sec7 .boxes .view-details-d .icon-d {
          margin-left: 104px;
        }

        .h-sec11 .gd {
          display: inline-block;
          width: 13%;
        }
      }
    </style>

    <!-- Section 7 -->
    <div class="row h-sec7">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row info">
              <div class="col-lg-12">
                <p class="text-center">
                  <i class="far fa-dot-circle"></i>
                  <span class="in-bl ml5">Why Choose Nextinn</span>
                </p>
                <div class="heading-container">
                  <h1 class="text-center">Digital Solutions that Drive</h1>
                  <h1 class="text-center">Real Results</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>AI Chatbot Development</h1>
                </div>
                <h3>
                  Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon2.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>ChatGPT Integration</h1>
                </div>
                <h3>
                  Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon3.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Machine & Deep Learning</h1>
                </div>
                <h3>
                  Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon4.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Predictive Modeling</h1>
                </div>
                <h3>
                  Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon5.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>Custom Software Development</h1>
                </div>
                <h3>
                  Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="boxes">
                <div class="container1">
                  <div class="icon-container">
                    <img class="img-responsive" src="images/sec7icon6.png">
                  </div>
                </div>
                <div class="in-bl heading-container">
                  <h1>UI/UX</h1>
                </div>
                <h3>
                  Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.
                </h3>
                <div class="view-details-d">
                  <div class="text-d">
                    <span>View Details</span>
                  </div>
                  <div class="icon-d">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row custom-solution-d">
            <p class="text-center">Need a custom solution? Let's create strategy tailored for your business. <span
                style="color: var(--clr3);">Get a Free Strategy Call</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 7 -->

    <style>
      .h-sec8 .info p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .h-sec8 .info p i {
        color: var(--clr3);
      }

      .h-sec8 .info p span {
        color: var(--clr1);
      }

      .h-sec8 .info h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .h-sec8 .detail h3 {
        font-size: 18px;
        margin-top: 33px;
        color: var(--clr4);
        line-height: 1.5;
      }

      .h-sec8 .detail p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .h-sec8 .boxes .buttons {
        margin-top: 20px;
        border: 2px solid #c82aef;
        padding: 4px 8px;
        border-radius: 25px;
      }

      .h-sec8 .boxes .buttons p {
        margin-bottom: 0px;
        color: var(--clr1);
      }

      .h-sec8 .boxes h1 {
        font-size: 29px;
        margin-top: 40px;
        color: var(--clr1);
        margin-left: 11px;
      }

      .h-sec8 .boxes h3 {
        font-size: 17px;
        margin-top: 11px;
        margin-left: 11px;
        color: var(--clr4);
      }

      .h-sec8 .boxes {
        background-image: url('images/bg-img-3.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-top: 47px;
        border-radius: 17px;
        padding-bottom: 16px;
        min-height: 351px;
      }

      /* Utility Class */
      .ml20 {
        margin-left: 10px;
      }

      /* Utility Class */
    </style>

    <!-- Section 8 -->
    <div class="row h-sec8 mt70">
      <div class="col-lg-2">
      </div>

      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row info">
              <div class="col-lg-6">
                <p>
                  <i class="far fa-dot-circle"></i>
                  <span class="in-bl ml5">Case Studies</span>
                </p>
                <div class="heading-container">
                  <h1>See How We Help</h1>
                  <h1>Business Thrive</h1>
                </div>
              </div>
              <div class="col-lg-6 detail">
                <h3>We don't just talk about results—we deliver them. Here are some of our most impactful case studies
                  showcasing how our digital marketing strategies drive success.</h3>
                <div class="in-bl" style="margin-top: 11px;">
                  <p>More Case Studies</p>
                </div>
                <div class="in-bl right-arrow-d">
                  <i class="fas fa-arrow-right"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-7">
                <div class="boxes">
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                      <div style="display: inline-block; margin-left: 82px;">
                        <div class="buttons in-bl">
                          <p>Social</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Influencer</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                      <div style="display: inline-block; margin-left: 57px;">
                        <div class="buttons in-bl">
                          <p>Retargeting</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Google</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                      <div class="buttons in-bl">
                        <p>Video</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>Local</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>Community</p>
                      </div>
                    </div>
                  </div>
                  <h1>Local Business Digital Transformation</h1>
                  <h3>5× ROI on social media campaigns & 80% increase in engagement…</h3>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="boxes">
                  <h1 style="padding-top: 40px;">Saas Lead Generation Success</h1>
                  <h3>150% increase in qualified leads & 70% lower customer acquisition cost.</h3>
                  <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                      <div style="display: inline-block; margin-left: 82px;">
                        <div class="buttons in-bl">
                          <p>Content</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>LinkedIn Ads</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                      <div class="buttons in-bl">
                        <p>Email</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>Webinar</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>Landing</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                      <div style="display: inline-block; margin-left: 57px;">
                        <div class="buttons in-bl">
                          <p>CRM</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Retargetting</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="boxes">
                  <h1 style="padding-top: 40px;">Ecommerce Growth Boost</h1>
                  <h3>3x increase in organic traffic & 2x revenue growth in 6 months...</h3>
                  <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                      <div class="buttons in-bl">
                        <p>SEO</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>PPC Ads</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>CRO</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                      <div style="display: inline-block; margin-left: 82px;">
                        <div class="buttons in-bl">
                          <p>Analytics</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Influencer</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                      <div style="display: inline-block; margin-left: 57px;">
                        <div class="buttons in-bl">
                          <p>AB Testing</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Email</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="boxes">
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                      <div class="buttons in-bl">
                        <p>Viral</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>Partnership</p>
                      </div>
                      <div class="buttons in-bl ml20">
                        <p>PR</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                      <div style="display: inline-block; margin-left: 82px;">
                        <div class="buttons in-bl">
                          <p>Growth</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>UGC</p>
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Media</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                      <div style="display: inline-block; margin-left: 57px;">
                        <div class="buttons in-bl">
                          <!-- <p>Retargeting</p> -->
                        </div>
                        <div class="buttons in-bl ml20">
                          <p>Branding</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h1>Startup Brand Awareness Expansion</h1>
                  <h3>200% increase in brand mentions & 60% higher engagement rates...</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 8 -->

    <style>
      .h-sec9 .info p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .h-sec9 .info p i {
        color: var(--clr3);
      }

      .h-sec9 .info p span {
        color: var(--clr1);
      }

      .h-sec9 .info h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .h-sec9 .detail h3 {
        font-size: 18px;
        margin-top: 33px;
        color: var(--clr4);
        line-height: 1.5;
      }

      .h-sec9 .detail p {
        color: var(--clr3);
        margin-top: 21px;
      }

      .h-sec9 .boxRow {
        margin-top: 50px;
        border: 1px solid #542360;
        border-radius: 12px;
        padding-top: 13px;
      }

      .h-sec9 .boxRow img {
        max-width: 52px;
      }

      .h-sec9 .boxRow h1 {
        color: var(--clr1);
        font-size: 17px;
        margin-top: 35px;
      }

      .h-sec9 .boxRow h5 {
        color: var(--clr4);
        margin-top: 22px;
        font-size: 15px;
        text-align: justify;
      }

      .h-sec9 .boxRow p {
        color: var(--clr1);
      }

      .pb13 {
        padding-bottom: 13px;
      }
    </style>
    <!-- Section 9 -->
    <div class="row h-sec9 mt70">
      <div class="col-lg-2">
      </div>

      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row info">
              <div class="col-lg-6">
                <p>
                  <i class="far fa-dot-circle"></i>
                  <span class="in-bl ml5">How It Work</span>
                </p>
                <div class="heading-container">
                  <h1>Simple Steps To</h1>
                  <h1>Digital Success</h1>
                </div>
              </div>
              <div class="col-lg-6 detail">
                <h3>Our streamlined process ensures your digital growth is seamless and effective. ipsum dolor sit amet,
                  consectetur adipiscing elit. In ex ligula, varius at rutrum et, finibus sed felis.</h3>
                <div class="in-bl" style="margin-top: 11px;">
                  <p>Get Started Now</p>
                </div>
                <div class="in-bl right-arrow-d">
                  <i class="fas fa-arrow-right"></i>
                </div>
              </div>
            </div>
            <div class="row boxRow">
              <div class="col-lg-3 pb13">
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <img class="img-responsive" src="images/icon5.png">
                  </div>
                  <div class="col-lg-6 col-3"></div>
                  <div class="col-lg-3 col-3">
                    <p>01</p>
                  </div>
                </div>
                <h1>Discovery and Consult</h1>
                <h5>Lorem ipsum dol consectetur adipiscing elit ut elit tell luctus nec ullamcorper mattis</h5>
              </div>
              <div class="col-lg-3 pb13">
                <div class="row">
                  <div class="col-6 col-lg-3">
                    <img class="img-responsive" src="images/icon6.png">
                  </div>
                  <div class="col-3 col-lg-6"></div>
                  <div class="col-3 col-lg-3">
                    <p>02</p>
                  </div>
                </div>
                <h1>Strategy and Planning</h1>
                <h5>Lorem ipsum dol consectetur adipiscing elit ut elit tell luctus nec ullamcorper mattis</h5>
              </div>
              <div class="col-lg-3 pb13">
                <div class="row">
                  <div class="col-6 col-lg-3">
                    <img class="img-responsive" src="images/icon7.png">
                  </div>
                  <div class="col-3 col-lg-6"></div>
                  <div class="col-3 col-lg-3">
                    <p>03</p>
                  </div>
                </div>
                <h1>Execution and Optimize</h1>
                <h5>Lorem ipsum dol consectetur adipiscing elit ut elit tell luctus nec ullamcorper mattis</h5>
              </div>
              <div class="col-lg-3 pb13">
                <div class="row">
                  <div class="col-6 col-lg-3">
                    <img class="img-responsive" src="images/icon8.png">
                  </div>
                  <div class="col-3 col-lg-6"></div>
                  <div class="col-3 col-lg-3">
                    <p>04</p>
                  </div>
                </div>
                <h1>Result and Growth</h1>
                <h5>Lorem ipsum dol consectetur adipiscing elit ut elit tell luctus nec ullamcorper mattis</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 9 -->

    <!-- Section 10 -->
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row" style="height: 100px; background-image: radial-gradient(#32113b, black);">
              <div class="col-lg-12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 10 -->

    <style>
      .h-sec11 h1 {
        color: var(--clr9);
      }

      .h-sec11 h3 {
        color: var(--clr10);
        margin-top: 30px;
      }

      .h-sec11 span {
        color: var(--clr3);
      }

      .h-sec11 .gd {
        display: inline-block;
        width: 14%;
      }

      .h-sec11 .icons-section {
        margin-top: 15px;
      }

      .h-sec11 .icon-container {
        max-width: 80px;
        margin: auto;
      }

      .h-sec11 .icon-container img {
        max-width: 78px;
      }

      .h-sec11 .sec2 .subscribe-btn-d {
        border-radius: 30px;
        background-color: black;
        padding: 4px 0px;
        max-width: 207px;
        box-shadow: -3px -2px 3px #c82aef;
        background-image: linear-gradient(to bottom left, #1F1F1F, #0E0E0E);
        position: absolute;
        right: 4px;
        top: 9px;
      }

      .h-sec11 .sec2 .subscribe-btn-d .icon-d {
        background-color: #C82AEF;
        width: 38px;
        padding: 6px 10px;
        border-radius: 23px;
        margin-left: 5px;
        display: inline-block;
        margin-left: 63px;
      }

      .h-sec11 .sec2 .subscribe-btn-d .icon-d i {
        color: white !important;
        font-size: 25px;
      }

      .h-sec11 .sec2 .subscribe-btn-d .text-d {
        display: inline-block;
        margin-left: 14px;
      }

      .h-sec11 .sec2 .subscribe-btn-d .text-d span {
        color: var(--clr1);
      }

      .h-sec11 .sec2 input.form-control.email-input {
        padding: 19px 12px;
        border-radius: 29px;
        width: 450px;
        background-color: black;
        border: 1px black;
      }

      .h-sec11 .sec2 input.form-control.email-input::placeholder {
        color: #d1d1d1;
      }

      .h-sec11 .sec2 .input-container {
        position: relative;
        margin-top: 27px;
        max-width: 450px;
        margin: auto;
        margin-top: 42px;
      }

      .h-sec11 .sec2-container {
        border: 1px solid #c82aef;
        border-radius: 19px;
        padding: 50px 103px;
        background-image: linear-gradient(to bottom left, #1F1F1F, #0E0E0E);
      }

      .h-sec11 .sec2-container h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      @media screen and (max-width: 575px) {
        .h-sec11 .gd {
          display: inline-block;
          width: 13%;
        }

        .h-sec11 .sec-2 .input-container {}
      }
    </style>

    <!-- Section 11 -->
    <div class="row h-sec11 mt70">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="text-center">Technology <span>Expertise</span></h1>
                <h3 class="text-center">Our skilled team is dedicated to leveraging the latest technologies to deliver
                  exceptional results.</h3>
              </div>
            </div>
            <div class="row icons-section">
              <div class="col-lg-12">
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon9.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon10.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon11.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon12.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon13.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon30.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon14.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="row icons-section">
              <div class="col-lg-12">
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon15.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon16.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon17.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon28.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon19.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon20.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon21.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="row icons-section">
              <div class="col-lg-12">
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon22.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon23.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon24.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon25.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon26.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon27.png">
                  </div>
                </div>
                <div class="gd">
                  <div class="icon-container">
                    <img src="images/icon28.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="row sec2 mt70">
              <div class="col-lg-12">
                <div class="sec2-container">
                  <h1 class="text-center">Stay Ahead In Digital Marketing</h1>
                  <h3 class="text-center" style="font-size:21px;margin-top:44px;">
                    Get exclusive insights, trends, and strategies delivered straight to your inbox. Subscribe now!
                  </h3>

                  <div class="input-container">
                    <input class="form-control email-input" type="text" placeholder="Give your best email">
                    <div class="subscribe-btn-d">
                      <div class="text-d">
                        <span>Subscribe</span>
                      </div>
                      <div class="icon-d">
                        <i class="fas fa-arrow-right"></i>
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
    <!-- Section 11 -->

    <style>
      .h-sec12 h1 {
        color: var(--clr1);
      }

      .h-sec12 h1 span {
        color: var(--clr3);
      }

      .h-sec12 h3 {
        color: var(--clr2);
        font-size: 16px;
        padding: 13px;
      }

      .h-sec12 .boxes {
        background-image: url('images/bg-img-2.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 300px;
        border-radius: 16px;
        margin-top: 17px;
      }

      .mt35 {
        margin-top: 35px;
      }
    </style>
    <!-- Section 12 -->
    <div class="row h-sec12 mt70">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <h1>Ideas <span>& Insights</span></h1>
            <div class="row mt35">
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-4.png')">
                  <h3>Delivering mission-critical functionality faster and at lower cost</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-5.png')">
                  <h3>Empowering Seamless API Integration with Enterprise-Grade Flexibility</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-6.png')">
                  <h3>Transforming Global Travel Experiences Through Innovation</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-7.png')">
                  <h3>Kubernetes is an open-source system for automating deployment</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-8.png')">
                  <h3>Staff Augmentation services enable organization vast pool of IT</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-9.png')">
                  <h3>Platform as a Service is a cloud development</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-10.png')">
                  <h3>Microservices, Building Scalable Apps for Today’s World</h3>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="boxes" style="background-image:url('images/bg-img-11.png')">
                  <h3>The fundamental elements of the modern hybrid cloud architecture</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 12 -->

    <style>
      .h-sec13 {
        margin-top: 70px;
      }

      .h-sec13 .person-images {
        max-width: 41px;
      }

      .h-sec13 .positive-reviews {
        color: var(--clr1);
        margin-bottom: 0px;
      }

      .h-sec13 .results h1 {
        color: var(--clr1);
        margin-top: 7px;
      }

      .h-sec13 .results h3 {
        color: var(--clr4);
        font-size: 16px;
      }

      .h-sec13 .results .per-imgs-d {
        margin-left: 19px;
      }

      .h-sec13 .results i {
        color: var(--clr3);
        font-size: 18px;
      }

      .h-sec13 .results .buttons {
        padding: 5px 7px;
        max-width: 285px;
        border-radius: 12px;
        margin: auto;
        background-color: #040404;
        margin-top: 14px;
      }

      .h-sec13 h3 {
        margin-left: 15px;
      }

      .h-sec13 .detail p i {
        color: var(--clr3);
      }

      .h-sec13 .detail p span {
        color: var(--clr1);
      }

      .h-sec13 .detail h1 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 51px;
      }

      .h-sec13 .detail h3 {
        font-size: 21px;
        color: var(--clr4);
        margin-left: 0px;
        margin-top: 10px;
      }

      @media screen and (max-width: 575px) {
        .h-sec13 .results .per-imgs-d {
          margin-left: 122px;
        }
      }

      /* .h-sec13 .results i{
        color: var(--clr3);
      } */
    </style>

    <!-- Section 13 -->
    <div class="row h-sec13">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-4 results">
                <div style="padding: 44px 13px;
    border: 1px solid var(--clr3);
    border-radius: 22px;
    background-color: #1F1F1F;">
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="in-bl p-r per-imgs-d">
                        <img class="img-responsive person-images" src="images/person1.png">
                        <img class="img-responsive person-images margin-left-minus-9" src="images/person2.png">
                        <img class="img-responsive person-images margin-left-minus-9" src="images/person3.png">
                        <img class="img-responsive person-images margin-left-minus-9" src="images/person5.png">
                      </div>
                      <h1 class="text-center">97%</h1>
                      <h3 class="text-center">Improved Project</h3>
                    </div>
                    <div class="col-lg-5">
                      <p class="positive-reviews font-bold-7 text-center">2.7k Positive Reviews</p>
                      <h1 class="text-center mt0">47%</h1>
                      <h3 class="text-center">New Project</h3>
                    </div>
                  </div>
                  <div class="buttons">
                    <div style="max-width: 216px;margin: auto;">
                      <i class="far fa-check-circle"></i>
                      <h3 class="in-bl ml15">Social Media Growth</h3>
                    </div>
                  </div>
                  <div class="buttons">
                    <div style="max-width: 216px;margin: auto;">
                      <i class="far fa-check-circle"></i>
                      <h3 class="in-bl ml15">Performance Marketing</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 detail">
                <div style="border: 1px solid #c82aef;
    border-radius: 22px;
    padding: 9px 26px;">
                  <p>
                    <i class="far fa-dot-circle"></i>
                    <span class="in-bl ml5">Why Choose Nextinn</span>
                  </p>
                  <div class="heading-container">
                    <h1>Here from our Satisfied</h1>
                    <h1>Clients, Real Success</h1>
                    <h1>Stories</h1>
                  </div>
                  <h3 class="detail-paragraph">
                    Discover how businesses like yours achieved outstanding growth with Marko's expert digital marketing
                    solutions.
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 13 -->


    <style>
      .h-sec14 img {
        max-width: 50px;
      }

      .h-sec14 .intro {
        position: relative;
      }

      .h-sec14 .intro .colon {
        position: absolute;
        right: 9px;
        color: var(--clr3);
      }

      .h-sec14 .text-warning {
        margin-bottom: 15px;
      }
    </style>

    <!-- Section 14 -->
    <div class="row h-sec14 mt70">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-10">
            <div class="row g-4">
              <!-- Card 1 -->
              <div class="col-lg-4">
                <div class="card h-100 bg-dark text-light shadow rounded-4 p-4">
                  <span class="text-warning fs-5">★★★★★</span>
                  <div class="d-flex align-items-center mb-3 intro">
                    <img src="images/person6.png" class="rounded-circle me-3" alt="Emma Richard">
                    <div>
                      <h6 class="mb-0">Emma Richard</h6>
                      <small class="text-secondary">CEO Nexatech</small>
                    </div>
                    <div class="text-end fs-1 text-purple colon">❞</div>

                  </div>

                  <p class="text-secondary">
                    “Marko completely transformed our online presence. Their digital
                    marketing strategies helped us double our revenue in just six months.”
                  </p>


                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-lg-4">
                <div class="card h-100 bg-dark text-light shadow rounded-4 p-4">
                  <span class="text-warning fs-5">★★★★★</span>
                  <div class="d-flex align-items-center mb-3 intro">
                    <img src="images/person7.png" class="rounded-circle me-3" alt="David Mont">
                    <div>
                      <h6 class="mb-0">David Mont</h6>
                      <small class="text-secondary">Marketing Director</small>
                    </div>
                    <div class="text-end fs-1 text-purple colon">❞</div>
                  </div>

                  <p class="text-secondary">
                    “We've worked with many agencies before, but Marko stands out.
                    Their data-driven approach gave us an edge over competitors.”
                  </p>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-lg-4">
                <div class="card h-100 bg-dark text-light shadow rounded-4 p-4">
                  <span class="text-warning fs-5">★★★★★</span>
                  <div class="d-flex align-items-center mb-3 intro">
                    <img src="images/person8.png" class="rounded-circle me-3" alt="Sophia Lewis">
                    <div>
                      <h6 class="mb-0">Sophia Lewis</h6>
                      <small class="text-secondary">Founder</small>
                    </div>
                    <div class="text-end fs-1 text-purple colon">❞</div>
                  </div>

                  <p class="text-secondary">
                    “From SEO to paid ads, Marko nailed every aspect of our campaign.
                    Website traffic skyrocketed and leads improved massively.”
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 14 -->
    <style>
      .footer {
        margin-left: 5px;
        margin-right: 5px;
        background-image: linear-gradient(to bottom right, #1F1F20, #0E0E0E);
        border: 1px solid var(--clr3);
        padding-top: 42px;
        padding-bottom: 10px;
        border-radius: 21px;
      }

      .footer h1 {
        font-size: 19px;
        margin-top: 28px;
        color: var(--clr1);
      }

      .footer h3 {
        margin-top: 33px;
        font-size: 16px;
        color: var(--clr4);
        text-align: justify;
      }

      .footer h4 {
        font-size: 10px;
        color: var(--clr4);
      }

      .footer ul {
        padding-left: 0px;
      }

      .footer ul li {
        list-style: none;
        color: var(--clr4);
        padding: 5px 0px;
      }

      .footer p {
        color: var(--clr1);
      }

      .footer .links-container {
        margin-top: 22px;
      }

      .footer .icon-container {
        display: inline-block;
        padding: 8px 11px;
        border-radius: 9px;
        background-image: linear-gradient(to bottom right, #1F1F20, #0E0E0E);
        box-shadow: -1px -1px 2px var(--clr3);
        margin-left: 8px;
      }

      .footer .icons {
        margin-top: 13px;
      }

      .mt0 {
        margin-top: 0px !important;
      }

      .mt32 {
        margin-top: 32px !important;
      }
    </style>

    <?php
    include "footer.php";
    ?>
    <div class="row" style="margin-top:20px;">
      <div class="col-lg-12"></div>
    </div>

  </div>

</body>

</html>
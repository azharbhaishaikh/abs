<?php
require_once('apis/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Azhar Shaikh Abs</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Custom Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />

  <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">


    <!-- Header-->
    <header class="py-5">
      <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">


          <div class="col-xxl-3">
            <!-- Header profile picture-->
            <div class="d-flex justify-content-center  mt-xxl-0">
              <div class="profile ">
                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                <img class="profile-img" src="assets/long_photo.jpeg" alt="..." />

              </div>

            </div>
          </div>
          <div class="col-xxl-5">
            <!-- Header text content-->
            <div class="text-center text-xxl-start">

              <h1 class="display-3 fw-bolder mb-5 fs-1"><span class="text-gradient d-inline">अजहर हनिफ शेख</span></h1>
              <h1 class="fs-4 fw-bolder mb-5"><span class="text-gradient d-inline">महाराष्ट्र अध्यक्ष - International
                  Human Rights & Anti Corruption India</span></h1>


              <div class="fw-bolder fs-5 text-muted">
                डॉ. अब्दुल कलाम समाज भूषण
                <br>संस्थापक - ABS सोशल ग्रूप
                <br>जिल्हाध्यक्ष - Medical foundation
                <br>Founder - AV NEWS
                <br>
                <br>अल-शिफा हॉस्पिटल, मिल्लत नगर, श्रीरामपूर, महाराष्ट्र ४१३७०९
                <br><br>
                <a style="color: green; font-size: medium;"
                  href="https://maps.app.goo.gl/njeq74Y6upLmZ1Eg7">https://maps.app.goo.gl/njeq74Y6upLmZ1Eg7
                </a>
                <br> <br>
                <a style="color: purple; font-size: medium;" href="mailto:azharshaikh702097@gmail.com">azharshaikh702097@gmail.com
                </a>

              </div>
            </div>
            <br>
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">

              <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                onclick="window.open('tel:7020979393');">Helpline: 70209 79393</a>
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-xxl-start fs-2 gap-4">
              <a class="text-gradient" target="_blank"
                href="https://twitter.com/Azharshaikhabs?t=WJ4nfwBfO-AQ26_tnTfvOQ&s=08"><i
                  class="bi bi-twitter"></i></a>
              <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/azhar-shaikh-abs-62726426b"><i
                  class="bi bi-linkedin"></i></a>
              <a class="text-gradient" target="_blank"
                href="https://www.facebook.com/profile.php?id=100008158759204&ref=xav_ig_profile_web"><i
                  class="bi bi-facebook"></i></a>
              <a class="text-gradient" target="_blank" href="https://www.instagram.com/azhar___abs/"><i
                  class="bi bi-instagram"></i></a>
              <a class="text-gradient" target="_blank" href="https://www.youtube.com/@azhar_shaikh_abs"><i
                  class="bi bi-youtube"></i></a>
              <a class="text-gradient" target="_blank" href="https://in.pinterest.com/azhar___abs/"><i
                  class="bi bi-pinterest"></i></a>
              <a class="text-gradient" target="_blank" href="https://maps.app.goo.gl/njeq74Y6upLmZ1Eg7"><i
                  class="bi bi-map"></i></a>


            </div>
            </span>
          </div>

          <div class="col-xxl-4" class="justify-content-center" style="height: 600px; overflow: auto;
                      margin-top: 30px;
                            display:block;">
            <?php


            $response = json_decode(file_get_contents(myServerName().'/apis/get-tweets.php'), true);

            for ($i = 0; $i < sizeof($response['data']); $i++) {
              echo $response['data'][$i]['post'];
            }
            ?>
          </div>
        </div>
      </div>
      </div>
    </header>
    <section >
      <div    id="carouselExampleControls" class="carousel slide"  data-bs-ride="carousel">
        <div class="carousel-inner">
          <?php
          $response = json_decode(file_get_contents(myServerName().'/apis/get-banners.php'), true);

          for ($i = 0; $i < sizeof($response['data']); $i++) {
            if($i==0){
            ?>
            <div class="carousel-item active">
            
            <?php
            }else{
              ?>
            <div  class="carousel-item ">
             
              <?php
            }
            ?>
             <img style="height:50%;width:100%;object-fit: fill;" src="<?=$response['data'][$i]['image']?>" class="d-block w-100" alt="...">
            </div>
            <?php
          }
          ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>


    <section class="bg-light py-5">
      <!-- Gallery -->
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img src="assets/slider1.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

          <img src="assets/slider11.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />

          <img src="assets/slider17.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img src="assets/slider3.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

          <img src="assets/slider7.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="assets/slider9.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

          <img src="assets/slider10.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>


      </div>
      <!-- Gallery -->

    </section>

    <!-- About Section-->
    <section class="py-5">
      <div class="container px-5">
        <div class="row gx-5 justify-content-center">
          <div class="col-xxl-8">
            <div class="text-center my-5">
              <h2 class=" fw-bolder"><span class="text-gradient d-inline">संपर्क माध्यम</span></h2>

              <br>
              <h1 class="fs-4 fw-bolder mb-5"><span class="text-gradient d-inline">महाराष्ट्र अध्यक्ष - International
                  Human Rights & Anti Corruption India</span></h1>


              <div class="fw-bolder fs-5 text-muted">
                डॉ. अब्दुल कलाम समाज भूषण
                <br>संस्थापक - ABS सोशल ग्रूप
                <br>जिल्हाध्यक्ष - Medical foundation
                <br>Founder - AV NEWS
                <br>
                <br>अल-शिफा हॉस्पिटल, मिल्लत नगर, श्रीरामपूर, महाराष्ट्र ४१३७०९
                <br><br>
                <a style="color: green; font-size: medium;"
                  href="https://maps.app.goo.gl/njeq74Y6upLmZ1Eg7">https://maps.app.goo.gl/njeq74Y6upLmZ1Eg7
                </a>
                <br> <br>
                <a style="color: purple; font-size: medium;" href="mailto:azharshaikh702097@gmail.com">azharshaikh702097@gmail.com
                </a>
              </div>
            </div>

            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-center mb-3">

              <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                onclick="window.open('tel:7020979393');">Helpline: 70209 79393</a>
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-center fs-2 gap-4">
              <a class="text-gradient" target="_blank"
                href="https://twitter.com/Azharshaikhabs?t=WJ4nfwBfO-AQ26_tnTfvOQ&s=08"><i
                  class="bi bi-twitter"></i></a>
              <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/azhar-shaikh-abs-62726426b"><i
                  class="bi bi-linkedin"></i></a>
              <a class="text-gradient" target="_blank"
                href="https://www.facebook.com/profile.php?id=100008158759204&ref=xav_ig_profile_web"><i
                  class="bi bi-facebook"></i></a>
              <a class="text-gradient" target="_blank" href="https://www.instagram.com/azhar___abs/"><i
                  class="bi bi-instagram"></i></a>
              <a class="text-gradient" target="_blank" href="https://www.youtube.com/@azhar_shaikh_abs"><i
                  class="bi bi-youtube"></i></a>
              <a class="text-gradient" target="_blank" href="https://in.pinterest.com/azhar___abs/"><i
                  class="bi bi-pinterest"></i></a>
              <a class="text-gradient" target="_blank" href="https://maps.app.goo.gl/njeq74Y6upLmZ1Eg7"><i
                  class="bi bi-map"></i></a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>
  <!-- Footer-->
  <footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0">Copyright &copy; Azhar Shaikh Abs</div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>
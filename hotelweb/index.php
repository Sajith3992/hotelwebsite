<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaluwara Resort -Home</title>

    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>



<style>

.avaibility-form{
  margin-top: -50px;
  z-index: 2;
  position: relative;
}

@media screen and (max-width :575px) {
  .avaibility-form{
  margin-top: 25px;
  padding: 0 35px;
}
}
 </style>

</head>
<body class="bg-light">
    

<?php require('inc/header.php'); ?>

<!-- Carrousal -->
 <div class="container-fluid px-lg-4 mt-4">
 <div class="swiper swiper-container">
    <div class="swiper-wrapper">

      <?php
        $res = selectAll('carousel');

        while($row = mysqli_fetch_assoc($res))
        {
            $path = CAROUSEL_IMG_PATH;
            echo <<<data
            
             <div class="swiper-slide">
                <img src="$path$row[image]" class="w-100 d-block" />
              </div>
            data;
        }

      ?>

  </div>
 </div>
<!-- Carrousal end -->

<!-- check avaibilty -->
<div class="container avaibility-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4"> Check Booking Availability </h5>
      <form>

      <div class="row align-items-end">
        <div class="col-lg-3 mb-3">
        <label  class="form-label" style="font-weight: 500;">Check-in</label>
        <input type="date" class="form-control shadow-none" >
        </div>
        <div class="col-lg-3 mb-3">
        <label  class="form-label" style="font-weight: 500;">Check-out</label>
        <input type="date" class="form-control shadow-none" >
        </div>
        <div class="col-lg-3 mb-3">
        <label  class="form-label" style="font-weight: 500;">Adult</label>
        <select class="form-select shadow-none" >
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        </div>
        <div class="col-lg-2 mb-3">
        <label  class="form-label" style="font-weight: 500;">Children</label>
        <select class="form-select shadow-none" >
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        </div>
        <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class="btn text-white shadow-none custom-bg"> Submit</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Our rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
 <div class="container">
  <div class="row">

    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        
        <div class="card-body">
          <h5>Simple Rooms Name</h5>
          <h6 class="mb-4">rs:4500 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Kitchen
            </span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Hot Water
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Wifi
            </span>
          </div>

          <div class="guest mb-4">
            <h6 class="mb-1">Guest</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
             4 Childern
            </span>
            
          </div>

          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
          </div>

          <div class="d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>

        </div>

      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/IMG_11892.png" class="card-img-top">
        
        <div class="card-body">
          <h5>Simple Rooms Name</h5>
          <h6 class="mb-4">rs:4500 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Kitchen
            </span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Hot Water
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Wifi
            </span>
          </div>

          <div class="guest mb-4">
            <h6 class="mb-1">Guest</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
             4 Childern
            </span>
            
          </div>

          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
          </div>

          <div class="d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>

        </div>

      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/IMG_39782.png" class="card-img-top">
        
        <div class="card-body">
          <h5>Simple Rooms Name</h5>
          <h6 class="mb-4">rs:4500 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Kitchen
            </span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Hot Water
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Wifi
            </span>
          </div>

          <div class="guest mb-4">
            <h6 class="mb-1">Guest</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
             4 Childern
            </span>
            
          </div>

          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
              </span>
          </div>

          <div class="d-flex justify-content-evenly">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>

        </div>

      </div>
    </div>



    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >></a>
    </div>
  </div>
 </div>

<!-- Our Facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/AC.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/spa.svg" width="80px">
      <h5 class="mt-3">Spa</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Heater.svg" width="80px">
      <h5 class="mt-3">Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Tv.svg" width="80px">
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
        More facilities >>
      </a>
    </div>
  </div>
</div>

<!-- Our Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Testimonials</h2>
<div class="container">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px" >
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, perferendis!</p>
       <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-half text-warning"></i>
       </div> 
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px" >
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, perferendis!</p>
       <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-half text-warning"></i>
       </div> 
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px" >
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, perferendis!</p>
       <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-half text-warning"></i>
       </div> 
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Reach Us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reach Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iFrame'] ?>"  loading="lazy" ></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-2">
        <h5 class="">Call Us</h5>
        <a href="tel : +<?php echo $contact_r['phone1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>  +<?php echo $contact_r['phone1'] ?></a>
          <br>

          <?php 
          if($contact_r['phone2']!=''){
            echo<<<data
              <a href="tel : +$contact_r[phone2] " class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>  +$contact_r[phone2]
              </a>
            data;
          }
          
          ?>

      </div>

      <div class="bg-white p-4 rounded mb-2">
        <h5 class="">Follow Us</h5>
        <?php

          if($contact_r['twit']!=''){
            echo <<<data
                <a href="$contact_r[twit]" class="d-inline-block mb-3 ">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter-x me-1"></i>  Twitter
                  </span>
                </a>
            data;
          }
        ?>

        <br>
        <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook"></i>  Facebook
          </span>
        </a>
          <br>
          <?php

          if($contact_r['insta']!=''){
            echo <<<data
                <a href="<?php echo $contact_r[insta] ?>" class="d-inline-block mb-3 ">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-instagram"></i>  Instragram
                </span>
              </a>
            data;
          }
          ?>

         <br>
         <?php

          if($contact_r['linked_in']!=''){
            echo <<<data
                <a href="$contact_r[linked_in]" class="d-inline-block mb-3 ">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-linkedin me-1"></i>  LinkedIn
                  </span>
                </a>
            data;
          }
          ?>
         <br>
          <?php

          if($contact_r['tiktok']!=''){
            echo <<<data
                <a href="$contact_r[tiktok]" class="d-inline-block  ">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-tiktok me-1"></i>  Tiktok
                  </span>
                </a>
            data;
          }
          ?>

      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay :{
        delay: 3500,
        disableOnInteraction : false
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView :1,
        },
        640:{
          slidesPerView :1,
        },
        768:{
          slidesPerView :2,
        },
        1024:{
          slidesPerView :3,
        },
      }
    });
  </script>
</body>
</html>
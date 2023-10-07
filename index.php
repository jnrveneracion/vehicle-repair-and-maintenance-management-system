<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
     <title>VRMMS | Home</title>
     <style>
          body {
               background-image: url('Assets/background-picture.jpg');
               background-size: cover;
               background-repeat: no-repeat;
               background-attachment: fixed;
          }

          .f-height {
               height: fit-content;
               margin-top: 50px;
               margin-bottom: 130px;
          }

          .section {
               background-color: rgba(0, 0, 0, 0.29);
               padding: 50px 5%;
               height: fit-content;
               width: 100%;
          }

          .head-text {
               font-family: Avenir Next Condensed;
               font-weight: 600;
               font-size: 30px;
               letter-spacing: 2px;
          }

          .head-sub-text {
               font-family: 'Alex Brush', cursive;
               font-size: 40px;
               margin-top: -20px;
               color: color(srgb 0.9702 0.7395 0.3452);
               line-height: 40px;
          }

          .yellow-btn {
               background-color: color(srgb 0.9702 0.7395 0.3452);
               margin: 4px 5px;
               border-radius: 20px;
               width: 120px;
               padding: 10px 15px;
               text-decoration: none;
               color: white;
               font-weight: bold;
          }

          .yellow-btn:hover {
               color: rgb(226, 226, 226);
          }

          .ribbon {
               background-image: url('Assets/ribbon.png');
               background-position: center;
               background-size: cover;
               height: 280px;
               width: 230px;
          }

          .sched-text, .info-text {
               font-size: 13px;
               color: black;
          }

          .yellow-divider {
               padding: 30px;
               background-color: color(srgb 0.9519 0.7312 0.3439);
               border-radius: 50px;
          }


          /* footer */
          .footer-nav-link {
               color: black;
               text-decoration: none;
          }

          .footer-nav-link:hover {
               color: gray;
          }

          .footer-top-section {
               background-color: #f7bd588a;
               padding: 10px 70px;
          }
     </style>
</head>
<body>
     <?php include "common/navbar.php"?>

     <!-- section 1 -->
     <div class="f-height d-flex justify-content-center">
          <div class="text-white section d-flex justify-content-center text-center">
               <div>
                    <div>
                         <p class="head-text p-0 m-0">CAR REPAIR AND MAINTENANCE MANAGEMENT SYSTEM</p>
                         <p class="head-sub-text">We care about your car</p>
                    </div>
                    <div class="row">
                         <div class="col-xl-4 col-12">
                              <div class="m-2">
                                   <img src="Assets/home-img-1.png" width="350" alt="">
                              </div>
                         </div>
                         <div class="col-xl-4 col-12">
                              <div class="m-2">
                                   <img src="Assets/home-img-2.png" width="350" alt="">
                              </div>
                         </div>
                         <div class="col-xl-4 col-12 d-flex justify-content-center">
                              <div class="ribbon">
                                   <img src="Assets/clock.png" width="150" alt="" style="margin-top: -40px;">
                                   <div style="margin-top: -15px;">
                                        <p class="m-0 text-black fw-bold">OPERATING HOUR</p>
                                        <p class="m-0 sched-text fw-bold">MONDAY - FRIDAY</p>
                                        <p class="m-0 sched-text">09:00PM - 08:00PM</p>
                                        <p class="m-0 sched-text fw-bold">SATURDAY - SUNDAY</p>
                                        <p class="m-0 sched-text">09:00PM - 04:00PM</p>
                                   </div>
                              </div>
                         </div>
                         <div class="col-12">
                              <div class="m-2">
                                   <p>Got a problem with your car? We got you we offer  different service that you probably need.</p>
                                   <a href="" class="yellow-btn">BOOK NOW!</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- section 2 -->
     <div class="f-height d-flex justify-content-center">
          <div class="text-white section d-flex justify-content-center text-center">
               <div>
                    <div>
                         <p class="head-text p-0 m-0">Why choose us?</p>
                         <p class="head-sub-text">We serve for your safety and happiness, not for money</p>
                    </div>
                    <div class="row">
                         <div class="col-xl-4 col-12">
                              <div class="m-2">
                                   <img src="Assets/home-img-3.png" width="300" alt="">
                              </div>
                         </div>
                         <div class="col-xl-4 col-12">
                              <div class="m-2">
                                   <img src="Assets/home-img-4.png" width="300" alt="">
                              </div>
                         </div>
                         <div class="col-xl-4 col-12">
                              <div class="m-2">
                                   <img src="Assets/home-img-5.png" width="300" alt="">
                              </div>
                         </div>
                         <div class="col-12">
                              <div class="m-2">
                                   <div class="yellow-divider"></div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- section 3 -->
     <div class="f-height d-flex justify-content-center">
          <div class="text-white section d-flex justify-content-center text-center">
               <div>
                    <div class="row">
                         <div class="col-xl-4 col-12">
                              <div class="m-4">
                                   <img src="Assets/home-img-6.png" width="300" alt="">
                              </div>
                         </div>
                         <div class="col-xl-4 col-12">
                              <div class="m-4">
                                   <img src="Assets/home-img-7.png" width="300" alt="">
                              </div>
                         </div>
                         <div class="col-xl-4 col-12">
                              <div class="m-4">
                                   <img src="Assets/home-img-8.png" width="300" alt="">
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="footer">
          <div class="footer-top-section">
               <div class="row">
                    <div class="col-xl-3 col-12">
                         <ul class="navbar-nav text-center m-2">
                              <li class="fw-bold fs-5">VRMMS</li>
                              <li><a href="#" class="footer-nav-link">HOME</a></li>
                              <li><a href="#" class="footer-nav-link">ABOUT US</a></li>
                              <li><a href="#" class="footer-nav-link">SERVICES</a></li>
                              <li><a href="#" class="footer-nav-link">CONTACT</a></li>
                         </ul>
                    </div>
                    <div class="col-xl-3 col-12">
                         <div class="text-center m-2">
                              <p class="m-0 text-black fw-bold">OPERATING HOUR</p>
                              <p class="m-0 sched-text fw-bold">MONDAY - FRIDAY</p>
                              <p class="m-0 sched-text">09:00PM - 08:00PM</p>
                              <p class="m-0 sched-text fw-bold">SATURDAY - SUNDAY</p>
                              <p class="m-0 sched-text">09:00PM - 04:00PM</p>
                         </div>
                    </div>
                    <div class="col-xl-3 col-12">
                         <div class="text-center m-2">
                              <p class="m-0 text-black fw-bold">CONTACT INFORMATION</p>
                              <p class="m-0 info-text">
                                   123 Street, Manila, Philippines <br>
                                   +012 345 67890 <br>
                                   crrms@gmail.com <br>
                              </p>
                         </div>
                    </div>
                    <div class="col-xl-3 col-12 d-flex align-items-center justify-content-center">
                         <div class="text-center m-2">
                              <p class="m-0 text-black fw-bold">FOLLOW US ON</p>
                              <div class="icons">
                                   <a href="#"><img src="Assets/fb-icon.png" width="50" alt=""></a>
                                   <a href="#"><img src="Assets/instagram-icon.png" width="50" alt=""></a>
                                   <a href="#"><img src="Assets/twitter-icon.png" width="50" alt=""></a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="footer-bottom-section text-center fst-italic m-2" style="font-size: 13px;">
               ©CRMMS, All Rights Reserved, Designed by Group 5  
          </div>
     </div>
     
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
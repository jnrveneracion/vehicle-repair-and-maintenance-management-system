<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <title>Get In Touch</title>
     <link rel="stylesheet" href="CSS/bg-style-a.css">
     <link rel="stylesheet" href="CSS/style.css">

     <style>
          .contact-section {
               background-color: color(srgb 0.9662 0.7357 0.3442);
               color: white;
               padding: 40px 0px;
               width: 400px;
               height: fit-content;
          }

          .label {
               background-color: color(srgb 0.9702 0.7395 0.3452);
               border: none;
               color: white;
               border-radius: 15px 0px 0px 15px;
               width: 20%;
          }

          .input {
               background-color: color(srgb 0.9662 0.7357 0.3442);
               border: none;
               border-radius: 0px 15px 15px 0px;
               color: white;
               width: 80%;
               padding: 10px;
          }

          .submit-btn {
               background-color: color(srgb 0.9662 0.7357 0.3442);
               border: none;
               border-radius: 10px;
               color: white;
          }

          .submit-btn:hover {
               background-color: color(srgb 0.9662 0.7357 0.3442);
               color: gray;
          }
     </style>
</head>
<body>
     <?php include "common/navbar.php" ?>

     <div>
          <div class="head-section">
               <p class="m-0">Get In Touch</p>
               <p style="font-size: 20px; font-weight: 200; margin: 0px;">Contact Information</p>
          </div>
          <div class="row m-2 p-3  d-flex justify-content-center">
               <div class="col-xl-4 col-12 d-flex justify-content-center">
                    <div class="m-3 contact-section">
                         <div>
                              <div class="text-center">
                                   <img src="Assets/contact-img-1.png" width="300" alt="">
                              </div>
                              <div class="text-center">
                                   <h6 class="m-2">Quick Contact Info</h6>
                              </div>
                              <ul class="navbar-nav">
                                   <li class="d-flex align-items-center">
                                        <div class="m-1"><img src="Assets/location-icon.png" width="40" alt=""></div>
                                        <div>123 Street, Manila, Philippines</div>
                                   </li>
                                   <li class="d-flex align-items-center">
                                        <div class="m-1"><img src="Assets/call-icon.png" width="40" alt=""></div>
                                        <div>+012 345 67890</div>
                                   </li>
                                   <li class="d-flex align-items-center">
                                        <div class="m-1"><img src="Assets/mail-icon.png" width="40" alt=""></div>
                                        <div>crrms@gmail.com</div>
                                   </li>
                              </ul>
                         </div>
                    </div>     
               </div>
               <div class="col-xl-6 col-12">
                    <div class="m-3">
                         <div class="w-100">
                              <form action="POST">
                                   <div class="input-group mb-3">
                                        <span class="input-group-text label" id="name">Name:</span>
                                        <input type="text" class="input" aria-label="name" name="name" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="input-group mb-3">
                                        <span class="input-group-text label" id="email">Email:</span>
                                        <input type="email" class="input" aria-label="email" name="email" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="input-group mb-3">
                                        <span class="input-group-text label" id="subject">Subject:</span>
                                        <input type="text" class="input" aria-label="subject" name="subject" aria-describedby="basic-addon1">
                                   </div>
                                   <div class="input-group mb-3">
                                        <span class="input-group-text label" id="message">Message:</span>
                                        <textarea class="input" aria-label="message" style="height: 150px;"></textarea>
                                   </div>
                                   <button type="submit" class="btn submit-btn">Send Message</button>
                              </form>     
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <?php include "common/footer.php"?>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
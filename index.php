<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mr. Balvesh Puramkar | A Web Developer</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ef8482b73.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <?php include("admin/fetchdata.php") ?>
</head>

    <body>
       <!--########################### Header Starts Here ###################### -->
        <div class="home-screen container-fluid">
          <div class="home-cover">
                <div id="menu-jk" class="header">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-3 logo">
                               <img class="logo-wt" src="assets/images/logo.png" alt="">
                               <img class="logo-gry" src="assets/images/logo-gray.png" alt="">
                               
                               <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                           </div>
                           <div id="menu" class="col-md-9 d-none d-md-block">
                               <ul>
                                   <li><a href="#">Home</a></li>
                                   <li><a href="#about_us">About Us</a></li>
                                   <li><a href="#services">Services</a></li>
                                   <li><a href="#skills">Skills</a></li>
                                   <li><a href="#testimonial">Testimonial</a></li>
                                   <li><a href="#portfolio">Portfolio</a></li>
                                   <li><a href="#cntact_us">Contact Us</a></li>
                               </ul>    
                           </div>
                       </div>
                   </div>
               </div>
                <div class="container">
                   <div class="row home-detail">
                      <div class="col-md-7 animated  bounceInRight homexp">
                           <h5>Hello I'm</h5>
                           <h2><?php echo $name; ?></h2>
                           <span>Professional <a >Web Developer</a> </span>
                           <p>I love making websites that people enjoy using. I'm good at making things look nice and work well. I like working with others to come up with cool ideas and turn them into reality.</p>
                           
                           <ul class="socil-icon">
                                <li>
                                    <a href="https://www.facebook.com/balwesh.puram/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/BalweshPuramkar"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/balveshpuram/"><i class="fab fa-instagram"></i></a> 
                                </li>
                                <li>
                                    <a href="https://in.linkedin.com/in/balvesh-puramkar-6b11b723b"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/developerbalvesh/"><i class="fa-brands fa-github"></i></i></a>
                                </li>
                           </ul>
                       </div>
                       <div class="col-md-5 animated bounceInLeft hom-img">
                        <img src="assets/images/name.png" alt="">
                    </div>
                   </div>

                </div>
          </div>
        </div>
        
        <!--########################### About US Starts Here ###################### -->
        
        <div id="about_us" class="about-us container-fluid">
           <div class="container">
               <div class="session-title row">
                    <h2>About Me</h2>
                    <p>
                    <?php echo $longIntro; ?>
                    </p>
                    <div class="heading-line"></div>
                </div>
                <div class="about-row row">
                   <div class="image-col col-md-4">
                       <img src="assets/images/about.png" alt="">
                       <button class="btn btn-primary"><i class="fas fa-download"></i> Download CV</button>
                   </div>
                   <div class="detail-col col-md-8">
                       <h2><?php echo $name; ?></h2>
                        <h6><?php echo $design; ?></h6>
                        <p><?php echo $longIntro; ?></p>
                          <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="info-list">
                                    <ul>
                                        <li><span>Birthday:</span><?php echo $birthdate ?></li>
                                        <li><span>City:</span><?php echo $city ?></li>
                                        <li><span>Study:</span><?php echo $study ?></li>
                                        <li><span>Website:</span><?php echo $website ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="info-list">
                                    <ul>
                                        <li><span>Age:</span><?php echo $age ?> Years</li>
                                        <li><span>Degree:</span><?php echo $degree ?></li>
                                        <li><span>Mail:</span><?php echo $mail ?></li>
                                        <li><span>Phone:</span><?php echo $phone ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                   </div>
                    
                    
                  
                </div>
           </div>    
            
        </div>
        
           <!--########################### Services Starts Here ###################### -->
           
          <div id="services"  class="services container-fluid">
           <div class="container">
               <div class="session-title row">
                    <h2>Servcies I Provide</h2>
                    <p>There are many variations of passages of Lorem Ipsum available Lorem Ipsum available but the majority</p>
                    <div class="heading-line"></div>
                </div>
                <div class="services-row row">
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="far fa-file-image"></i>
                            <h4>Graphic Design</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                           <i class="fas fa-desktop"></i>
                            <h4>Web Development</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="fas fa-bullhorn"></i>
                            <h4>Digital Marketing</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="fab fa-uikit"></i>
                            <h4>UI/UX Design</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                           <i class="fas fa-suitcase"></i>
                            <h4>Business Analysis</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 seric-div">
                        <div class="service-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Mobile App Development</h4>
                            <p>Lorem ipsum dolor sit aconsect dipisicing elit, sed do eiusmod to incididunt uabore etdolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
               
        <!--########################### Skills Starts Here ###################### -->
         
        <div id="skills" class="skills container-fluid">
            <div class="row">
                <div class="col-md-6 skii-div tech-skill">
                    <div class="title">
                        <h2>Technical Skill</h2>
                        <p>There are many variations available but the majority</p>
                    </div>
                    
                    <ul>
                        <li>
                            <label for="">UI/UX Designer</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         <li>
                            <label for="">JavaScript</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         <li>
                            <label for="">HTML5</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         <li>
                            <label for="">PHP / MYSQL</label>
                                <div class="progress">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </li>
                         
                    </ul>
                </div>
                <div class="col-md-6 skii-div pro-skill">
                    <div class="title">
                        <h2>Technical Skill</h2>
                        <p>Professional Skills</p>
                    </div>
                     <ul>
                        <li>
                            <label for="">Photoshop</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                         <li>
                            <label for="">Illustrator</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                         <li>
                            <label for="">AngularJS</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                         <li>
                            <label for="">PHP</label>
                            <div class="progress">
                              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
               
         <!--  ************************* Testimonial  Starts Here ************************** -->

     <section id="testimonial" class="customer-serv">
            <div class="container">
                <div class="row session-title">
                    <h2>Happy Customers</h2>
                   
                </div>
    
                <div class="row ro-clo">
                    <div data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal" class="col-12  col-md-6 col-lg-4">
                        <div class="shado-2 card-b">
                            <p>Classic Aqua water purify is good.Because its cure our purify that is called  health and gives good life. I suggest classic aqua for its best purify of water</p>
                        </div>
                        <div class="cust-det row">
                            <div class="col-sm-3 col-3 img-circl">
                                <img alt="" src="assets/images/testimonial/member-01.jpg">
                            </div>
                            <div class="col-sm-5 col-5 an-mtc no-padding">
                                <b>Sarath Ali</b>
                                <p>(Sales Agent)</p>
                            </div>
                            <div class="col-sm-4 col-4 star-par">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-6 col-lg-4">
                        <div class="shado-2 card-b">
                            <p> have use this product at my home last 1 and half year of this. This product quality is good.Its good quality product for use it can improve water Quality.
                            </p>
                        </div>
                        <div class="cust-det row">
                            <div class="col-sm-3 col-3 img-circl">
                                <img alt="" src="assets/images/testimonial/member-02.jpg">
                            </div>
                            <div class="col-sm-5 col-5 an-mtc no-padding">
                                <b>Binny Aderson</b>
                                <p>(Sales Agent)</p>
                            </div>
                            <div class="col-sm-4  col-4 star-par">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-anijs="if: scroll, on: window, do: bounceInRight animated, before: scrollReveal" class="col-12  col-md-6 col-lg-4">
                        <div class="shado-2 card-b">
                            <p>Very essensial product.it is clean and helthy water is mutually most important so that acqa is fufil its quality.our life now a days very tressful and restless</p>
                        </div>
                        <div class="cust-det row">
                            <div class="col-sm-3 col-3 img-circl">
                                <img alt="" src="assets/images/testimonial/member-03.jpg">
                            </div>
                            <div class="col-sm-5 col-5 an-mtc no-padding">
                                <b>Arjun Samluel</b>
                                <p>(Sales Agent)</p>
                            </div>
                            <div class="col-sm-4 col-4 star-par">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </section>   
              
    
              
     <!--*************** Pricing Starts Here ***************-->
       <div id="generic_price_table">
       <section class="container-fluid price-tab">
           <div class="container">
                <div class="row session-title">
                   <h2>Our Attractive Pricing</h2>
                   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
               </div>
           </div>
           <div class="container">

               <!--BLOCK ROW START-->
               <div class="row price-row">
                   <div class="col-md-4">

                       <!--PRICE CONTENT START-->
                       <div class="generic_content clearfix nnj">

                           <!--HEAD PRICE DETAIL START-->
                           <div class="generic_head_price clearfix">

                               <!--HEAD CONTENT START-->
                               <div class="generic_head_content clearfix">

                                   <!--HEAD START-->
                                   <div class="head_bg"></div>
                                   <div class="head">
                                       <span>Basic</span>
                                   </div>
                                   <!--//HEAD END-->

                               </div>
                               <!--//HEAD CONTENT END-->

                               <!--PRICE START-->
                               <div class="generic_price_tag clearfix">
                                   <span class="price">
                                       <span class="sign">$</span>
                                       <span class="currency">99</span>
                                       <span class="cent">.99</span>
                                       <span class="month">/MON</span>
                                   </span>
                               </div>
                               <!--//PRICE END-->

                           </div>
                           <!--//HEAD PRICE DETAIL END-->

                           <!--FEATURE LIST START-->
                           <div class="generic_feature_list">
                               <ul>
                                   <li><span>2GB</span> Bandwidth</li>
                                   <li><span>150GB</span> Storage</li>
                                   <li><span>12</span> Accounts</li>
                                   <li><span>7</span> Host Domain</li>
                                   <li><span>24/7</span> Support</li>
                               </ul>
                           </div>
                           <!--//FEATURE LIST END-->

                           <!--BUTTON START-->
                           <div class="generic_price_btn clearfix">
                               <a class="" href="">Sign up</a>
                           </div>
                           <!--//BUTTON END-->

                       </div>
                       <!--//PRICE CONTENT END-->

                   </div>

                   <div class="col-md-4">

                       <!--PRICE CONTENT START-->
                       <div class="generic_content active clearfix nnj">

                           <!--HEAD PRICE DETAIL START-->
                           <div class="generic_head_price clearfix">

                               <!--HEAD CONTENT START-->
                               <div class="generic_head_content clearfix">

                                   <!--HEAD START-->
                                   <div class="head_bg"></div>
                                   <div class="head">
                                       <span>Standard</span>
                                   </div>
                                   <!--//HEAD END-->

                               </div>
                               <!--//HEAD CONTENT END-->

                               <!--PRICE START-->
                               <div class="generic_price_tag clearfix">
                                   <span class="price">
                                       <span class="sign">$</span>
                                       <span class="currency">199</span>
                                       <span class="cent">.99</span>
                                       <span class="month">/MON</span>
                                   </span>
                               </div>
                               <!--//PRICE END-->

                           </div>
                           <!--//HEAD PRICE DETAIL END-->

                           <!--FEATURE LIST START-->
                           <div class="generic_feature_list">
                               <ul>
                                   <li><span>2GB</span> Bandwidth</li>
                                   <li><span>150GB</span> Storage</li>
                                   <li><span>12</span> Accounts</li>
                                   <li><span>7</span> Host Domain</li>
                                   <li><span>24/7</span> Support</li>
                               </ul>
                           </div>
                           <!--//FEATURE LIST END-->

                           <!--BUTTON START-->
                           <div class="generic_price_btn clearfix">
                               <a class="" href="">Sign up</a>
                           </div>
                           <!--//BUTTON END-->

                       </div>
                       <!--//PRICE CONTENT END-->

                   </div>
                   <div class="col-md-4">

                       <!--PRICE CONTENT START-->
                       <div class="generic_content clearfix nnj">

                           <!--HEAD PRICE DETAIL START-->
                           <div class="generic_head_price clearfix">

                               <!--HEAD CONTENT START-->
                               <div class="generic_head_content clearfix">

                                   <!--HEAD START-->
                                   <div class="head_bg"></div>
                                   <div class="head">
                                       <span>Unlimited</span>
                                   </div>
                                   <!--//HEAD END-->

                               </div>
                               <!--//HEAD CONTENT END-->

                               <!--PRICE START-->
                               <div class="generic_price_tag clearfix">
                                   <span class="price">
                                       <span class="sign">$</span>
                                       <span class="currency">299</span>
                                       <span class="cent">.99</span>
                                       <span class="month">/MON</span>
                                   </span>
                               </div>
                               <!--//PRICE END-->

                           </div>
                           <!--//HEAD PRICE DETAIL END-->

                           <!--FEATURE LIST START-->
                           <div class="generic_feature_list">
                               <ul>
                                   <li><span>2GB</span> Bandwidth</li>
                                   <li><span>150GB</span> Storage</li>
                                   <li><span>12</span> Accounts</li>
                                   <li><span>7</span> Host Domain</li>
                                   <li><span>24/7</span> Support</li>
                               </ul>
                           </div>
                           <!--//FEATURE LIST END-->

                           <!--BUTTON START-->
                           <div class="generic_price_btn clearfix">
                               <a class="" href="">Sign up</a>
                           </div>
                           <!--//BUTTON END-->

                       </div>
                       <!--//PRICE CONTENT END-->

                   </div>
               </div>
               <!--//BLOCK ROW END-->

           </div>
       </section>

   </div>
          
              
              
               
  
    
    <!--  ************************* Gallery Starts Here ************************** -->
        <div id="portfolio" class="gallery">    
           <div class="container">
              <div class="session-title row">
                    <h2>Portfolio</h2>
                    <p>Take a look at some of our latest work</p>
                    <div class="heading-line"></div>
                </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_09.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_08.jpg" class="img-responsive">
            </div>

            
        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->    
        
          
             <!--  ************************* Contact  Starts Here ************************** -->
                                      
    <section id="cntact_us" class="contact-us-single">
        <div class="row no-margin">
            <div class="col-sm-6 no-padding">
                 <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div  class="col-sm-6 cop-ck">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-primary btn-sm">Send Message</button>
                        </div>
                </div>
            </div>
        </div>
    </section>   
    
                          
    <!--  ************************* Footer  Starts Here ************************** -->

    <footer class="container-fluid footer">
        <div class="container">
            <div class="row footerro">
                <span class="tt">iPhone</span>
                <p> 
                    <span><a href="">HOME</a></span>
                    <span><a href="">ABOUT US</a></span>
                    <span><a href="">SKILLS</a></span>
                    <span><a href="">SERVICES</a></span>
                    <span><a href="">PORTFOLIO</a></span>
                 </p>
                <a href="">Copyright © Smarteyeapps.com | All right reserved.</a>
            </div>
        </div>
    </footer>                                                                                                                                          
                
        
    </body>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>


<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

    <!-- HOME SECTION -->

    <section class="home-section" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-section-carousel" data-slide-to="1"></li>
                    <li data-target="#home-section-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- FIRST SLIDE -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/img/bg.png" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h3>hello Dear!</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                  This ensures a top-notch grooming experience, so you can look and feel your best.
                    Join us today and book your appointment for a fresh new look!
                            </p>
                        </div>
                    </div>
                    <!-- SECOND SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/img/bg.png" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <h3>It's Not Just a Haircut, It's an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                    <!-- THIRD SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/img/bg.png" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <h3>It's Not Just a Haircut, It's an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PREVIOUS & NEXT -->
                <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</div>
	</section>

    <!-- ABOUT SECTION -->

 <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        <h3>About Us</h3>
                        <h2>KEEPCUT STUDIO, established in 2023</h2>
                        
                        a one-of-a-kind hair cutting establishment. Our studio seamlessly blends the charm of a barbershop with the elegance of a salon. We're committed to delivering top-tier hair cutting
                services to our valued customers. At KEEPCUT STUDIO, each strand of hair is our canvas, and every cut is a masterpiece. Our passion for hairstyling shines through every scissor snip and razor trim. Experience the art of hair
                transformation at KEEPCUT STUDIO..
                        </p>
                        <a href="#" class="default_btn" style="opacity: 1;">More about us</a>
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/img/tempatnya.png" alt="about-1">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->

   <div class="container-fluid position-relative py-5" id="KeepcutServices">
            <div class="container">
              <h2 class="section-title-service">Services</h2>
              <p class="services-description">Here are some of the services we offer:</p>
      
              <div class="image-links">
                <a href="link_ke_halaman1.html"><img src="Design/img/haircut.png" alt="Gambar 1" width="200" height="200" /></a>
                <a href="link_ke_halaman2.html"><img src="Design/img/coloring.png" alt="Gambar 2" width="200" height="200" /></a>
                <a href="link_ke_halaman3.html"><img src="Design/img/perm.png" alt="Gambar 3" width="200" height="200" /></a>
              </div>
      
              <div class="image-links">
                <a href="link_ke_halaman4.html"><img src="Design/img/smoothing.png" alt="Gambar 4" width="200" height="200" /></a>
                <a href="link_ke_halaman5.html"><img src="Design/img/others.png" alt="Gambar 5" width="200" height="200" /></a>
              </div>
            </div>
          </section>
    </div>
    <!-- GALLERY SECTION -->

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
            <h3>How pretty they are</h3>
            <h2>Keepcut Gallery</h2>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (1).png');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (2).png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (3).png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (4).png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (5).png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (6).png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (7).png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model.png');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/img/model (8).png');"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> 


    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
               
                <h2>Our Barbers</h2>
                
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/img/aksa.png" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/img/laras.png" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/img/mia.png" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/img/rusli.png" alt="Team Member">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- REVIEWS SECTION -->

    <section id="reviews" class="testimonial_section">
        <div class="container">
            <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#reviews-carousel" data-slide-to="1"></li>
                    <li data-target="#reviews-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- REVIEW 1 -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/img/background.png" alt="First slide" style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>Its Not Just a Haircut, Its an Experience.</h3>
                            <p>
                                
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                    <!-- REVIEW 2 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/img/background.png" alt="First slide"  style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>Its Not Just a Haircut, Its an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                    <!-- REVIEW 3 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/img/background.png" alt="First slide"  style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>Its Not Just a Haircut, Its an Experience.</h3>
                            <p>
                                Our barbershop is the territory created purely for males who appreciate
                                <br>
                                premium quality, time and flawless look.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PREVIOUS & NEXT -->
                <a class="carousel-control-prev" href="#reviews-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#reviews-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">

        <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

        <!-- END -->

        <div class="container">
            <div class="section_heading">
                
                <h2>Our Barber Pricing</h2>
                
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price">Rp<?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section class="contact-section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                            Get in touch with us & 
                            
                        </h2>
                        
                            Bandung, Keepcut Studio
                            <br>
                            Indonesia
                        </h3>
                        <h4>
                            <span style = "font-weight: bold">Email:</span> 
                            keepcutstudio@gmail.com
                    
                            <br> 
                            <span style = "font-weight: bold">Phone:</span> 
                            +62 82134637184
                            <br> 
                            
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="default_btn">Send Message</button>
                                </div>
                            </div>
                            <img src="Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                            <div id="contact_status_message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                    <img src="Design/img/logokeepcut.png" alt="Brand" width="200" height="200">

                        <p>
                            joy your hair.
                        </p>
                        <ul class="widget_social">
                            <li><a href="https://www.instagram.com/elmijjj/" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/elmijjj/" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/elmijjj/" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/elmijjj/" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/elmijjj/" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Keepcut Studio</h3>
                        <p>
                            Bandung, Indonesia
                        </p>
                        <p>
                            keepcutstudio@gmail.com
                            <br>
                            082134637184  
                        </p>
                     </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form" novalidate="true">
                                <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER  -->

    <?php include "Includes/templates/footer.php"; ?>
<?php include 'enquiry.php'; ?>
<?php include 'navbar.php'; ?>

<style>
    @media (max-width: 576px) {
        .testimonial-box {
            height: auto !important;
        }
    }
</style>
<p>&nbsp;</p><p>&nbsp;</p>
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Trusted <span class="text-primary">real estate partner</span> in Gurgaon for every space you need.</h1>


                    <p class="animated fadeIn mb-4 pb-2"> Since 2014, we’ve been helping families buy, sell & lease homes and commercial spaces with trust and ease.
                    <br>If you need important information or personalized assistance, just click below to get started.</p>
                    <a href="#" class="btn btn-primary py-3 px-5 me-3 animated fadeIn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
    Get Started.
</a>

                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="images/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="images/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" style="margin-top: 70px;">

    <div class="modal-content border-0 shadow-lg rounded-4" style="max-width: 320px; margin: auto;">

      <!-- Header -->
      <div class="modal-header bg-primary text-white py-2 rounded-top-4">
        <h6 class="modal-title w-100 text-center">Quick Enquiry</h6>
        <button type="button" class="btn-close btn-close-white btn-sm position-absolute end-0 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-3 py-2">
        <form action="index.php" method="POST">

          <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control form-control-sm rounded-3" id="nameInput" placeholder="Name" required>
            <label for="nameInput">Name</label>
          </div>

          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control form-control-sm rounded-3" id="emailInput" placeholder="Email" required>
            <label for="emailInput">Email</label>
          </div>

          <div class="form-floating mb-2">
            <input type="text" name="mobile" class="form-control form-control-sm rounded-3" id="mobileInput" placeholder="Mobile" required>
            <label for="mobileInput">Mobile</label>
          </div>

          <div class="form-floating mb-3">
            <textarea name="message" class="form-control form-control-sm rounded-3" placeholder="Message" id="messageInput" style="height: 70px;" required></textarea>
            <label for="messageInput">Message</label>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-sm btn-success rounded-pill">Send Enquiry</button>
            <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<!-- JavaScript to Open Modal on Page Load -->

        <!-- Search Start -->
        <!-- <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Property Types</h1>
            <p>We offer a wide range of property types across Gurgaon, including apartments, villas, builder floors, offices, shops, and land. Backed by years of experience since 2014, our team helps clients find the perfect space—whether for living, working, or investment. With a focus on trust, transparency, and value, we ensure every property meets your unique needs.</p>

        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-apartment.png" alt="Icon">
                        </div>
                        <h6>Apartment</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-villa.png" alt="Icon">
                        </div>
                        <h6>Villa</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-house.png" alt="Icon">
                        </div>
                        <h6>Home</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-housing.png" alt="Icon">
                        </div>
                        <h6>Office</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-building.png" alt="Icon">
                        </div>
                        <h6>Building</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-neighborhood.png" alt="Icon">
                        </div>
                        <h6>Townhouse</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-condominium.png" alt="Icon">
                        </div>
                        <h6>Shop</h6>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="images/icon-luxury.png" alt="Icon">
                        </div>
                        <h6>Garage</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
 
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="images/about.jpg" alt="About Us">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Your Trusted Partner in Gurgaon Real Estate</h1>
                <p class="mb-4">Since 2014, we’ve been helping people find their dream homes, smart investments, and ideal commercial spaces across Gurgaon. With deep local knowledge and a passion for real estate, we turn your vision into reality—whether you're buying, selling, or renting.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Expertise in residential, commercial & land properties</p>
                <p><i class="fa fa-check text-primary me-3"></i>Personalized service & transparent deals</p>
                <p><i class="fa fa-check text-primary me-3"></i>Over a decade of trusted real estate experience</p>
                <a class="btn btn-primary py-3 px-5 mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" href="#">Read More</a>
            </div>
        </div>
    </div>
</div>

        <!-- About End -->


      <!-- Property List Start -->

        <!-- RESIDENTIAL -->
        <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-0 gx-5 align-items-end">
                  <div class="col-lg-6">
                      <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                          <h1 class="mb-3">RESIDENTIAL  PROJECTS</h1>
                      </div>
                  </div>
              </div>
      
              <div class="row g-4">
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="sg-city-92.php"><img class="img-fluid w-100" src="images/on_going_project/sg-city-92-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="sg-city-92.php">Signature Global City 92</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="sg-city-93.php"><img class="img-fluid w-100" src="images/on_going_project/SG-City-93-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="sg-city-93.php">Signature Global City 93</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="sg-city81.php"><img class="img-fluid w-100" src="images/on_going_project/sg-city-81-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="sg-city81.php">Signature Global City 81</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="sg-city-37d.php"><img class="img-fluid w-100" src="images/on_going_project/sg-city-37d-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="sg-city-37d.php">Signature Global City 37D
                              </a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="global-park4and5.php"><img class="img-fluid w-100" src="images/on_going_project/sg-park-4&5-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="global-park4and5.php">Signature Global Park IV & V</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="global-park.php"><img class="img-fluid w-100" src="images/on_going_project/sg-park-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="global-park.php">Signature Global Park</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                      <a class="btn btn-primary py-3 px-5" href="Latest_Residential_Properties.php">Browse More Property</a>
                  </div>
              </div>
          </div>
      </div>
      
      <!-- RESIDENTIAL end -->
      
      
      
      <!-- COMMERCIAL -->
              <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-0 gx-5 align-items-end">
                  <div class="col-lg-6">
                      <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                          <h1 class="mb-3">COMMERCIAL PROJECTS</h1>
                      </div>
                  </div>
              </div>
      
              <div class="row g-4">
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="twin-square-retail.php"><img class="img-fluid w-100" src="images/commercial/twin-square.webp" alt="" style="height:270px;object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="twin-square-retail.php">Signature Global Twin Square
                              </a><br>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="city-of-colours-industrial-hub.php"><img class="img-fluid w-100" src="images/commercial/coc-industrial-hub.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="city-of-colours-industrial-hub.php">Signature Global City of Colours - Industrial Plots</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="deluxe-dxp-commercial.php"><img class="img-fluid w-100" src="images/commercial/projects_dxp_luxury-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="deluxe-dxp-commercial.php">DELUXE DXP (Commercial of Deluxe DXP)</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="signature-global-sco2-88a.php"><img class="img-fluid w-100" src="images/commercial/SCO-88A-II-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="signature-global-sco2-88a.php">Signature Global SCO II 88A
                              </a><br>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="signature-global-sco-88a.php"><img class="img-fluid w-100" src="images/commercial/SCO-88A-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="signature-global-sco-88a.php">Signature Global SCO 88A</a><br>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="signum-plaza-93.php"><img class="img-fluid w-100" src="images/commercial/Signum-plaza-93-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="signum-plaza-93.php">Signum Plaza 93 (Commercial of Signature Global City 93 )</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                      <a class="btn btn-primary py-3 px-5" href="commercial.php">Browse More Property</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- COMMERCIAL end -->
      
      
      <!-- ON GOING PROJECTS -->
      <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-0 gx-5 align-items-end">
                  <div class="col-lg-6">
                      <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                          <h1 class="mb-3">ON GOING PROJECTS</h1>
                      </div>
                  </div>
              </div>
      
              <div class="row g-4">
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="city-of-colours.php"><img class="img-fluid w-100" src="images/on_going_project/township-desktop-min.png" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="city-of-colours.php">Signature Global City of Colours</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="daxin-gurugram-x-factor.php"><img class="img-fluid w-100" src="images/on_going_project/sg-daxin-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="daxin-gurugram-x-factor.php">Signature Global DAXIN</a><br>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="twin-tower-dxp.php"><img class="img-fluid w-100" src="images/on_going_project/sg-twin-towerdxp-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="twin-tower-dxp.php">Signature Global Twin Tower DXP</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="signatureglobal-deluxe.php"><img class="img-fluid w-100" src="images/on_going_project/sggdeluxeimage-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="signatureglobal-deluxe.php">DE-LUXE DXP</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="sg-city-79b.php"><img class="img-fluid w-100" src="images/on_going_project/SG-City-79b-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="sg-city-79b.php">Signature Global City 79B</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="itanium-spr.php"><img class="img-fluid w-100" src="images/on_going_project/SG-Titanium-SPR-800X600-min.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="itanium-spr.php">Signature Global Titanium SPR
                              </a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                      <a class="btn btn-primary py-3 px-5" href="Ongoing_projects.php">Browse More Property</a>
                  </div>
              </div>
          </div>
      </div>
      
      <!-- ON GOING PROJECTS end -->
      
      
      <!-- OUR LUXURY PROJECTS -->
      <!-- part4 ye banane ka h jo baad m banayenge -->
      <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-0 gx-5 align-items-end">
                  <div class="col-lg-6">
                      <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                          <h1 class="mb-3">OUR LUXURY PROJECTS</h1>
                      </div>
                  </div>
              </div>
      
              <div class="row g-4">
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="adani-samsara-ivana.php"><img class="img-fluid w-100" src="images/extra/Aproach road02.webp" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="adani-samsara-ivana.php">Adani Ivana Gurgaon
                              </a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="shiana-amarah-phase-5.php"><img class="img-fluid w-100" src="images/extra/ashiana-amarah-luxurious-3-4-BHK-apartments-in-gurgaon-img1012s.jpg" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="shiana-amarah-phase-5.php">Ashiana Amarah Sector 93</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="ats-homekraft-sanctuary-105.php"><img class="img-fluid w-100" src="images/extra/img515.jpg" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="ats-homekraft-sanctuary-105.php">ATS Homekraft Sanctuary 105</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="birla-arika.php"><img class="img-fluid w-100" src="images/extra/Arika-Aditya-Birla-Real-Estate-Sector-31.webp" alt="" style="height: 270px; object-fit: cover;">
                              </a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="birla-arika.php">Birla Arika Sector 31</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="bptp-amstoria-verti-greens.php"><img class="img-fluid w-100" src="images/extra/bptp_the_amaario-sector_37d-gurgaon-bptp_limited.avif" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="bptp-amstoria-verti-greens.php">BPTP Amstoria Verti Greens</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="property-item rounded overflow-hidden">
                          <div class="position-relative overflow-hidden">
                              <a href="conscient-elaira-residence.php"><img class="img-fluid w-100" src="images/extra/conscient-elaira-residences-project-project-large-image1-1430.jpg" alt="" style="height:270px; object-fit: cover;"></a>
                          </div>
                          <div class="p-4 pb-0">
                              <a class="d-block h5 mb-2" href="conscient-elaira-residence.php">Conscient Elaira Residences</a>
                          </div>
                      </div>
                  </div>
      
                  <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                      <a class="btn btn-primary py-3 px-5" href="luxury.php">Browse More Property</a>
                  </div>
              </div>
          </div>
      </div> 
      
      <!-- OUR LUXURY PROJECTS end -->
      
<!--Our Delivered Projects-->
<div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 10px; background: transparent; text-align: center;">
    <h2>Our Delivered Projects</h2><br>

    <!-- Swiper Slider -->
    <div class="swiper-container" style="width: 100%; padding: 20px 0; overflow: hidden !important;">
        <div class="swiper-wrapper">
            <?php
            $projects = [
                ["The Serenas", "https://www.signatureglobal.in/sector-36-south-gurugram.php", "images/delivered/the-serenas-min.webp"],
                ["Signature Global Mall", "http://signatureglobal.in/signature-global-mall.php", "images/delivered/website-mall.webp"],
                ["Grand IVA", "https://www.signatureglobal.in/grand-iva-sector-103-gurugram.php", "images/delivered/grand-iva-min.webp"],
                ["The Millennia", "https://www.signatureglobal.in/the-millennia.php", "images/delivered/the-millennia-min.webp"],
                ["Solera 2", "https://www.signatureglobal.in/solera2.php", "images/delivered/solera-2-min.webp"],
            ];

            foreach ($projects as $project) {
                echo "<div class='swiper-slide' style='display: flex; justify-content: center;'>
                        <a href='{$project[1]}' target='_blank' style='display: flex; width: 90%; max-width: 400px; color: black; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background: transparent; cursor: pointer; text-decoration: none;'>
                            <img src='{$project[2]}' alt='{$project[0]}' style='width: 50%; height: 150px; object-fit: cover;'>
                            <div style='width: 50%; padding: 15px; display: flex; flex-direction: column; justify-content: center;'>
                                <h3>{$project[0]}</h3>
                            </div>
                        </a>
                      </div>";
            }
            ?>
        </div>
    </div>

    <a href="delivered_projects.php" style="display: block; width: fit-content; margin: 20px auto; padding: 12px 20px; background:rgb(26, 55, 15); color: white; border-radius: 5px; text-decoration: none; font-size: 18px; font-weight: bold; text-align: center;">View More Projects</a>
</div>
<!--Our Delivered Projects End-->




<!-- Clients reviews  -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Our Clients Say!</h1>
            <p>What Our Customers Say: Delve into the genuine experiences and remarkable results shared by our valued clientele, highlighting the tangible impact of our commitment to excellence.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-light rounded p-3 d-flex">
            <div class="bg-white border rounded p-4 testimonial-box" 
     style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;I am booked my flat in Siyom tvasta. I am also satisfied with the company.The staff of the company is very supportive.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_131531.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Sneha</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3 d-flex">
            <div class="bg-white border rounded p-4 testimonial-box" 
     style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;I recently booked my flat with Siyom tvasta, and the entire process was smooth and transparent. The staff was supportive and guided me at every step. I am extremely satisfied with my decision.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_131531.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Gunjan Rana</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3 d-flex">
            <div class="bg-white border rounded p-4 testimonial-box" 
     style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;Siyom tvasta's customer service is outstanding. The staff was always available to answer my queries and made the flat booking process easy and stress-free.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_131756.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Narender Bisht</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;As a first-time homebuyer, I had many questions, but the team at Signatures Globals patiently guided me through everything. I highly recommend them!&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_131914.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Pankaj Dass</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;Its quality and delivery time is good top going company good team its visionary company our investment us safe and all projects in good loaction, I suggest invest in signatureglobal&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_132008.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Arbindo Das</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;Very fast construction completely good located sites .very good staff help to buy and provide all basic details in all over projects .very fast grow construction company .and higher return in your investment and scope to grow your business as a participate to sell the units very great&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_132048.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Rajesh</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;The transparency at Siyom tvasta is commendable. From initial inquiry to booking, everything was explained clearly, leaving no room for confusion&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_132135.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Rekha</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;I got excellent value for money with Siyom tvasta. The flat's quality and the supportive staff made my experience truly satisfying.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_132220.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Manisha Rana</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;Booked Dream Home From Direct Sales I booked my dream home with Siyom tvasta & I am happy with services. All document formality is need and clean. Entire team help on every Stage. Thanks Siyom tvasta.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_132357.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Anju Rajan</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;One thing that stood out about Siyom tvasta is their commitment to timely delivery. I received my flat on schedule without any delays.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_130822.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Komal Rai</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
             <div class="testimonial-item bg-light rounded p-3 d-flex">
             <div class="bg-white border rounded p-4 testimonial-box" 
             style="height: 230px; display: flex; flex-direction: column; justify-content: space-between;">
                    <p>&ldquo;Booked my dream home with Siyom tvasta I am lucky to be a Siyom tvasta customer. All the paper works for the flat that I booked has so far been smooth and easy. Great and helpful customer support team, they help in every stage of paper clearance.&rdquo;</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="images\customer syas\IMG_20250320_131842.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw
                            -bold mb-1">Prashant</h6>
                            <small>Customer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     

<!-- Clients reviews end -->


<!-- footer -->

        <?php include 'footer.php'; ?>

<!-- footer end -->

<!-- enquiry form javascript-->
<script>
//   document.addEventListener("DOMContentLoaded", function () {
//     var enquiryModal = new bootstrap.Modal(document.getElementById('enquiryModal'));
//     enquiryModal.show();
//   });
// </script>
// <script>
//   document.addEventListener("DOMContentLoaded", function () {
//     document.querySelectorAll(".toggle-btn").forEach(button => {
//       button.addEventListener("click", function () {
//         var targetId = this.getAttribute("data-target"); // ID dynamically get karega
//         var target = document.getElementById(targetId);

//         if (!target) return;

//         var collapseInstance = bootstrap.Collapse.getOrCreateInstance(target);

//         // Close all other open dropdowns
//         document.querySelectorAll(".collapse.show").forEach(openDropdown => {
//           if (openDropdown !== target) {
//             bootstrap.Collapse.getOrCreateInstance(openDropdown).hide();
//             let openButton = openDropdown.closest(".card").querySelector(".toggle-btn");
//             if (openButton) openButton.innerText = "View Details"; 
//           }
//         });

//         // Toggle the clicked dropdown
//         if (target.classList.contains("show")) {
//           collapseInstance.hide();
//           this.innerText = "View Details";
//         } else {
//           collapseInstance.show();
//           this.innerText = "Hide Details";
//         }
//       });
//     });
//   });
</script>
<!--end enquiry form javascript-->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- our delivered project script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        speed: 800, // Smooth transition speed
        autoplay: {
            delay: 1000, // Faster slide change (1 second)
            disableOnInteraction: false,
        },
        scrollbar: {
            el: null, // Disable Swiper scrollbar
        },
        pagination: {
            el: null, // Disable pagination (dots)
        },
        breakpoints: {
            640: { slidesPerView: 1, spaceBetween: 20 },
            768: { slidesPerView: 2, spaceBetween: 40 },
            1024: { slidesPerView: 3, spaceBetween: 50 },
        }
    });
</script>
<!-- our delivered project script end -->

</body>

</html>
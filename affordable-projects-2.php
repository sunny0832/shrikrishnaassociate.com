<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Property Listing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php" ?>
<div class="container py-5">
  <div class="row">
    <!-- Left Side: Enquiry Form + Featured Property -->
    <div class="col-lg-4 mb-4">
      <div class="card shadow-sm p-4">
        <h5 class="mb-3">Enquire Now</h5>
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
          </div>

        </form>

       <!-- Featured Property Section -->
<div class="mt-4">
  <h5 class="fw-bold mb-3">Featured Property</h5>
  <div class="d-flex align-items-start">
    <a href="wal-verde-92.php">
      <img src="images/residential_affordable/Gallery-Image-1.jpg" width="80" height="60" class="me-3 rounded shadow-sm" alt="Wal Verde 92">
    </a>
    <div>
      <a href="wal-verde-92.php" class="fw-bold text-decoration-none text-dark">Wal Verde 92</a><br>
      <span class="text-primary fw-semibold">28 Lacs*</span><br>
      <small class="text-muted">Sector-92, Gurgaon</small>
    </div>
  </div>
</div>
<!-- End Featured Property -->


      </div>
    </div>

    <!-- Right Side: Property Cards -->
    <div class="col-lg-8">
      <!-- Card 1 -->
      <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="signature-global-roselia.php">
              <img src="images/residential_affordable/6-min-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="signature-global-roselia.php" class="text-decoration-none text-dark">
                 Signature Global Roselia
                  <span class="badge bg-warning text-dark float-end">Ready to Move</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 95A, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">26.66 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 551-645</small>
                <small><strong>Bedroom:</strong> 2</small>
                <small><strong>Bathroom:</strong> 2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

     <!-- Card 2 -->
     <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="pareena-rama-homes.php">
              <img src="images/residential_affordable/3-min-2.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="pareena-rama-homes.php" class="text-decoration-none text-dark">
                 Pareena Rama Homes
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 89, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">33.43 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 551-645</small>
                <small><strong>Bedroom:</strong> 3</small>
                <small><strong>Bathroom:</strong> 2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 3 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="true-habitat-bodh-affordable-housing.php">
              <img src="images/residential_affordable/3-min-6.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="true-habitat-bodh-affordable-housing.php" class="text-decoration-none text-dark">
                 True Habitat Bodh 79
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 79, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">27.78 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>532.92-644</small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 4 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="signature-global-imperial-sector-88a.php">
              <img src="images/residential_affordable/3-min-6 (2).jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="signature-global-imperial-sector-88a.php" class="text-decoration-none text-dark">
                Signature Global Imperial 88A
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-88A, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">20.92 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>397-643
                </small>
                <small><strong>Bedroom:</strong>1/3</small>
                <small><strong>Bathroom:</strong>1/2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 5 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="royal-green-heights-affordable-housing.php">
              <img src="images/residential_affordable/royal-green-heights-2-min.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="royal-green-heights-affordable-housing.php" class="text-decoration-none text-dark">
                Royal Green Heights
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 62, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">3 years ago</small></p>
              <h6 class="text-primary">26.11 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>551-645
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 6 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="gls-avenue-86-affordable-housing.php">
              <img src="images/residential_affordable/GLS-AVENUE-86-GALLERY11-min.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-avenue-86-affordable-housing.php" class="text-decoration-none text-dark">
                GLS Avenue 86
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 86, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>448-642

                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 7 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="millennium-diplomats-golf.php">
              <img src="images/residential_affordable/Millennium-Diplomats-Golf-Link-110-Gurgaon.png" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="millennium-diplomats-golf.php" class="text-decoration-none text-dark">
                Millennium Diplomats Golf Link
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 110, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">15.78 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>448-642

                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 8 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="gls-arawali-homes.php">
              <img src="images/residential_affordable/GLS-Arawali-Homes-ReadyToMove-Image-5.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-arawali-homes.php" class="text-decoration-none text-dark">
                GLS Arawali Homes
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sohna Road, gurgaon
              </p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">25.90 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>541-745
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Card 9 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="conscient-habitat-prime.php">
              <img src="images/residential_affordable/Conscient-Habitat-Prime-Gallery-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="conscient-habitat-prime.php" class="text-decoration-none text-dark">
                Conscient Habitat Prime 99A
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 99A, Gurgaon
              </p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">22.49-26.33 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>551-645
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 10 -->
<div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="landmark-the-homes-81.php">
              <img src="images/residential_affordable/Landmark-The-Homes-Gallery-2.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="landmark-the-homes-81.php" class="text-decoration-none text-dark">
                Landmark The Homes 81
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector 81, Gurgaon
              </p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>565-645
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

 <!-- Card 12 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="mrg-world-the-skyline.php">
              <img src="images/residential_affordable/MRG-World-The-Skyline-Gallery-4.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="mrg-world-the-skyline.php" class="text-decoration-none text-dark">
                MRG World The Skyline
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 106, Gurgaon
              </p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">25.26 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>565-645
                </small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 12 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="gls-avenue-81-affordable-housing.php">
              <img src="images/residential_affordable/GLS-Avenue-81-Gallery-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-avenue-81-affordable-housing.php" class="text-decoration-none text-dark">
                GLS Avenue 81
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 81, Gurgaon
              </p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">22.79-25.69 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>559-629</small>
                <small><strong>Bedroom:</strong>2/3</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      

    </div>
  </div>
</div>

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

<!-- pagination -->
<?php include "pagination.php" ?>

<?php include "footer.php" ?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

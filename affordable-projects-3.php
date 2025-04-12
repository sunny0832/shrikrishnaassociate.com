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
            <a href="rof-atulyas-sector-93-gugraon.php">
              <img src="images/residential_affordable/ROF-Atulyas-Gallery-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="rof-atulyas-sector-93-gugraon.php" class="text-decoration-none text-dark">
                 ROF Atulyas
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 93, GurgaonHARERA No. 05 OF 2021</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">19.24-26.22 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong> 268-643
                </small>
                <small><strong>Bedroom:</strong> 2</small>
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
            <a href="pyramid-infinity-sector-70-gurgaon.php">
              <img src="images/residential_affordable/Pyramid-Infinity-Gallery-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="pyramid-infinity-sector-70-gurgaon.php" class="text-decoration-none text-dark">
                 Pyramid Infinity
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 70, Gurgaon/p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">12.84-26.23 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>367-720
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

       
      <!-- Card 4 -->
      <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="signature-global-millennia.php">
              <img src="images/residential_affordable/Signature-Global-Millennia-3-Gallery-4.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="signature-global-millennia.php" class="text-decoration-none text-dark">
                Signature Global Millennia 3
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-37D, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">30 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>580-645
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

 <!-- Card 5 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="gls-south-avenue.php">
              <img src="images/residential_affordable/4e3e9daf-4bef-413f-a147-14bfb8990fa4-min-768x442.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="gls-south-avenue.php" class="text-decoration-none text-dark">
                GLS South Avenue
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-92, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years ago</small></p>
              <h6 class="text-primary">23.41 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>563-645</small>
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
            <a href="osb-the-venetian-sector-70-gurgaon.php">
              <img src="images/residential_affordable/OSB-The-Venetian-Gallery-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="osb-the-venetian-sector-70-gurgaon.php" class="text-decoration-none text-dark">
                OSB The Venetian
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-70, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">23.41 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>5556-571</small>
                <small><strong>Bedroom:</strong>2</small>
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
            <a href="hcbs-sports-ville.php">
              <img src="images/residential_affordable/HCBS-Sports-Ville-Gallery-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="hcbs-sports-ville.php" class="text-decoration-none text-dark">
                HCBS Sports Ville
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-70, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">14 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>390</small>
                <small><strong>Bedroom:</strong>1/2</small>
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
            <a href="rof-alante-108.php">
              <img src="images/residential_affordable/ROF-Alante-Gallery-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="rof-alante-108.php" class="text-decoration-none text-dark">
                ROF Alante 108
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 108, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">Price On Call</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>330-645</small>
                <small><strong>Bedroom:</strong>1/2/3</small>
                <small><strong>Bathroom:</strong>1/2</small>
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
            <a href="rof-amaltas-sector-92-gurgaon.php">
              <img src="images/residential_affordable/ROF-Amaltas-Gallery-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="rof-amaltas-sector-92-gurgaon.php" class="text-decoration-none text-dark">
                ROF Amaltas
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 92, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">12.98-26.24 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>312-645</small>
                <small><strong>Bedroom:</strong>1/2</small>
                <small><strong>Bathroom:</strong>1/2</small>
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
            <a href="mrg-world-the-meridian.php">
              <img src="images/residential_affordable/MRG-World-The-Meridian-Gallery-5.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="mrg-world-the-meridian.php" class="text-decoration-none text-dark">
                MRG The Meridian
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 89, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">27.60 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>533-633</small>
                <small><strong>Bedroom:</strong>2</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Card 11 -->
    <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="mrg-world-the-balcony-sector-93.php">
              <img src="images/residential_affordable/MRG-World-The-Balcony-Gallery-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="mrg-world-the-balcony-sector-93.php" class="text-decoration-none text-dark">
                MRG World The BALCONY
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 93, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">24.04-24.73 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>647-699</small>
                <small><strong>Bedroom:</strong>2</small>
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
            <a href="mrg-ultimus-sector-90-gurgaon.php">
              <img src="images/residential_affordable/MRG-Ultimus-Gallery-2.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="mrg-ultimus-sector-90-gurgaon.php" class="text-decoration-none text-dark">
                MRG World Ultimus
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 93, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">229.70 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>570-616</small>
                <small><strong>Bedroom:</strong>2</small>
                <small><strong>Bathroom:</strong>2</small>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>

 <!-- Card 13 -->
 <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-4">
            <a href="adani-aangan-affordable-housing.php">
              <img src="images/residential_affordable/Adani-Aangan-Gallery-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="adani-aangan-affordable-housing.php" class="text-decoration-none text-dark">
                Adani Aangan
                  <span class="badge bg-warning text-dark float-end">Under Construction</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector 88A, Gurgaon</p>
              <p class="card-text mb-1">Affordable Projects, Residential</p>
              <p class="card-text"><small class="text-muted">4 years</small></p>
              <h6 class="text-primary">14.28-26.33 Lakh</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>343-645</small>
                <small><strong>Bedroom:</strong>1/2</small>
                <small><strong>Bathroom:</strong>1/2</small>
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

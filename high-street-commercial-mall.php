<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>commercial high-street-commercial-mall</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php" ?>
<?php include "enquiry.php" ?>

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
            <a href="the-omaxe-state.php">
              <img src="images\commercial\1-7.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="the-omaxe-state.php" class="text-decoration-none text-dark">
                The Omaxe State 
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Dwarka, Delhi</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">1 weeks ago</small></p>
              <h6 class="text-primary">37.5 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>50-8000</small>
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
            <a href="ss-whitewater.php">
              <img src="images\commercial\1-3.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="ss-whitewater.php" class="text-decoration-none text-dark">
                SS Whitewater
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-90, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">10 months ago</small></p>
              <h6 class="text-primary">75 Lakhs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>465-3500/small>
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
            <a href="raheja-the-delhi-mall.php">
              <img src="images\commercial\1-7.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="raheja-the-delhi-mall.php" class="text-decoration-none text-dark">
                Raheja The Delhi Mall
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Delhi</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">1 years ago</small></p>
              <h6 class="text-primary">62.50 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>50-500</small>
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
            <a href="aipl-joy-central.php">
              <img src="images\commercial\Untitled-design-_45_.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="aipl-joy-central.php" class="text-decoration-none text-dark">
                AIPL Joy Central
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-65, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">62.50 Lakh*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>250-1400</small>
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
            <a href="omaxe-chandni-chowk.php">
              <img src="images\commercial\Untitled-design-53.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="omaxe-chandni-chowk.php" class="text-decoration-none text-dark">
                Omaxe Chandni Chowk
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Chandni Chowk, Delhi</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">60 Lacs*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>244-1116</small>
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
            <a href="elan-the-mark-sector-106.php">
              <img src="images\commercial\Untitled-design-2023-06-10T165116.012-1.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="elan-the-mark-sector-106.php" class="text-decoration-none text-dark">
                Elan The Mark
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i>Sector-106, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">1.00 Cr*</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>800-2200</small>
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
            <a href="smart-world-one-dxp-street.php">
              <img src="images\commercial\Untitled-design-40-2.jpg" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="smart-world-one-dxp-street.php" class="text-decoration-none text-dark">
                Smart World One DXP Street
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-113, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">15,250/Sq.Ft</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>250</small>
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
            <a href="m3m-jewel.php">
              <img src="images\commercial\M3M-Jewel-Website-Image.webp" class="img-fluid rounded-start" alt="Wal Verde 92">
            </a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <a href="m3m-jewel.php" class="text-decoration-none text-dark">
                M3M Jewel 25
                  <span class="badge bg-warning text-dark float-end">New Launch</span>
                </a>
              </h5>
              <p class="card-text mb-1"><i class="bi bi-geo-alt-fill"></i> Sector-25, Gurgaon</p>
              <p class="card-text mb-1">Commercial, High Street Commercial Mall</p>
              <p class="card-text"><small class="text-muted">2 years ago</small></p>
              <h6 class="text-primary">35,000 / Sq. Ft.</h6>
              <div class="d-flex justify-content-between mt-3">
                <small><strong>Area:</strong>300-1500</small>
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

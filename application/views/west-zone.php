<!DOCTYPE html>
<html lang="en">
<head>
  <title>Olympiad Foundation West Zone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Olympiad Foundation North Zone">
  <?php $this->load->view('includes/link'); ?>
    <style>
      @media (max-width: 48em) {
          #pad-top{
              padding-top: 25px;
              margin-top:0;
      }}
  </style>
</head>
<body>
<?php $this->load->view('includes/header'); ?>
    <div class="jumbotron jumbotron-fluid p-3 my-1" id="olympiad">
        <h2 data-aos="flip-up" style="text-align: center; font-family: 'Rowdies', cursive; background-color: darkcyan; padding: 10px 10px; color: white;"><i class="fa fa-map-marker" aria-hidden="true"></i> <u>West Zone</u></h2>
        <h6 data-aos="flip-up" style="text-align: center; font-family: 'Rowdies', cursive; background-color: darkcyan; color: white;"><u>Co-ordinator: Dr. Vinod Bidhuri</u><br><a href="mailto:westzone@olympiadfoundation.in" style="text-decoration:none; color:white">Email: westzone@olympiadfoundation.in</a></h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="https://olympiadfoundation.in/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">West Zone</li>
          </ol>
        </nav>
        <br>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><h3>GOA</h3></div>
              <div class="card-body">
                <h5 class="card-title">Co-ordinator: </h5><h6>Email: <br>Address: <br></h6>
                <div style="right:0;"><a href="goa-divisions.php" style="text-decoration:none;">Check Divisions <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="pad-top">
            <div class="card">
                <div class="card-header"><h3>GUJARAT</h3></div>
              <div class="card-body">
                <h5 class="card-title">Co-ordinator: </h5><h6>Email: <br>Address: <br></h6>
                <div style="right:0;"><a href="gujarat-divisions.php" style="text-decoration:none;">Check Divisions <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div></div><br>
          <div class="row">
          <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><h3>MAHARASHTRA</h3></div>
              <div class="card-body">
                <h5 class="card-title">Co-ordinator: </h5><h6>Email: <br>Address: <br></h6>
                <div style="right:0;"><a href="maharashtra-divisions.php" style="text-decoration:none;">Check Divisions <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="pad-top">
            <div class="card">
                <div class="card-header"><h3>DADRA AND NAGER HAVELI AND DAMAN AND DIU</h3></div>
              <div class="card-body">
                <h5 class="card-title">Co-ordinator: </h5><h6>Email: <br>Address: <br></h6>
                <div style="right:0;"><a href="dadra-nager-daman-diu.php" style="text-decoration:none;">Check Divisions <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div></div><br>
        </div>
    </div>
    <?php $this->load->view('includes/footer'); ?>
</body>
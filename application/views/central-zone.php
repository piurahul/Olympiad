<!DOCTYPE html>
<html lang="en">
<head>
  <title>Olympiad Foundation Central Zone</title>
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
        <h2 data-aos="flip-up" style="text-align: center; font-family: 'Rowdies', cursive; background-color: darkcyan; padding: 10px 10px; color: white;"><i class="fa fa-map-marker" aria-hidden="true"></i> <u>Central Zone</u></h2>
	
        <h6 data-aos="flip-up" style="text-align: center; font-family: 'Rowdies', cursive; background-color: darkcyan; color: white;"><u>Co-ordinator: Sanjeev Lakhera</u><br> <a href="mailto:centralzone@olympiadfoundation.in" style="text-decoration:none; color:white">Email: centralzone@olympiadfoundation.in</a></h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="https://olympiadfoundation.in/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Central Zone</a></li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><h3>MADHYA PRADESH</h3></div>
              <div class="card-body">
                <h5 class="card-title">Co-ordinator: </h5><h6>Email: <br>Address: <br></h6>
                <div style="right:0;"><a href="madhya-pradesh-divisions.php" style="text-decoration:none;">Check Divisions <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="pad-top">
            <div class="card">
                <div class="card-header"><h3>CHHATTISGARH</h3></div>
              <div class="card-body">
                <h5 class="card-title">Co-ordinator: </h5><h6>Email: <br>Address: <br></h6>
                <div style="right:0;"><a href="chhattisgarh-divisions.php" style="text-decoration:none;">Check Divisions <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div></div><br>
    </div>
    <?php $this->load->view('includes/footer'); ?>
</body>
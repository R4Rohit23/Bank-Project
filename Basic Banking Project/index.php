<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPARKS BANK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--------------------------- Navigation Section ----------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="img/bank.png" alt="Bank Logo" width="60" height="50" class="d-inline-block align-text-top">
        SPARKS BANK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewcustomer.php">View Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer.php">Transfer Money</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="history.php">Transaction History</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!------------------------------------------------------- Main Section  --------------------------------------->
<div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

<!---------------------------------- Image Section -------------------------------------->

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 border border-2">
      <img src="img/img1.jpg" class="card-img-top" alt="Image 1">
      <div class="card-body">
        <h5 class="card-title">Growing Day By Day</h5>
        <p class="card-text">We are the Largest Bank In the country having <strong>10m</strong> subscribers. The numbers is growing day by day.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-2">
      <img src="img/img2.jpg" class="card-img-top" alt="Image 2">
      <div class="card-body">
        <h5 class="card-title">Highest Security</h5>
        <p class="card-text">We insure that your money will be safe in our Lockers. We have <strong>20 thousand </strong> security guards in the whole country.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-2">
      <img src="img/img3.jpg" class="card-img-top" alt="Image 3">
      <div class="card-body">
        <h5 class="card-title">Instant Money Transfer</h5>
        <p class="card-text">Everyone having smart phone can order or buy something online. Then why our banking system can't work online. So we started online money transfer at your fingertip. Just put some numbers and your money will be transfered. </p>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------ Footer  -------------------------------------->
<div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright - Made with 🧡 by Rohit Chaware 
            </div>
            <!-- Copyright -->
        </footer>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
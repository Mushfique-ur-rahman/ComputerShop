<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

   <title>Document</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand" href="index.php"><h1>SCI-TECH</h1></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="Dasktop.php">Dasktop</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="Monitor.php">Monitor</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     Components
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">CPU</a>
                     <a class="dropdown-item" href="#">GPU</a>
                     <a class="dropdown-item" href="#">MOTHER BOARD</a>
                     <a class="dropdown-item" href="#">RAM</a>
                     <a class="dropdown-item" href="#">SSD</a>
                     <a class="dropdown-item" href="#">POWERSUPPLY</a>
                     <a class="dropdown-item" href="#">CASE</a>
                     <a class="dropdown-item" href="#">COLLER</a>
                  </div>
               </li>


            </ul>
            <form class="d-flex" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
         </div>
      </div>
   </nav>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
    $fO = $_POST["submit"];
    require_once('connect.php');
    $connect = mysqli_connect(HOST, USER, PASS, DB)
        or die("CAN NOT CONNECT");
        $result = mysqli_query($connect, "SELECT * FROM `inventory` WHERE model like '%$fO%'");
        $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Document</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 30px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            text-align: center;
            font-size: 12px;
            font-family: arial;

        }
       
     .card image{
        width: 100%;
        height: 50%;
        object-fit:contain;
     }

        .price {
            color: grey;
            font-size: 14px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
  
        .card button:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <h1>SCI-TECH</h1>
            </a>
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
                            <a class="dropdown-item" href="cpu.php">CPU</a>
                            <a class="dropdown-item" href="gpu.php">GPU</a>
                            <a class="dropdown-item" href="motherboard.php">MOTHER BOARD</a>
                            <a class="dropdown-item" href="ram.php">RAM</a>
                            <a class="dropdown-item" href="ssd.php">SSD</a>
                            <a class="dropdown-item" href="powersupply.php">POWERSUPPLY</a>
                            <a class="dropdown-item" href="case.php">CASE</a>
                            <a class="dropdown-item" href="coller.php">COLLER</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_singup.php">Logid/Singup</a>
                    </li>


                </ul>
                <form action="scarch.php" class="d-flex" role="search">
                    <input type="text" id="product" name="name">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <section class=" my-5">
        <div class="py-5">
            <h2 style="text-align:center ">All product</h2>
            <hr>
        </div>
        <div class="row">
            <?php
             
            while ($rows = mysqli_fetch_assoc($result)) {   extract($rows)?>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="card ">
                        <div class="image">
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['img']).'" class="img-fluid pb-3"  />' ?>
                        </div>
                        <h3 class="name"><?php echo $rows["model"] ?></h3>
                        <p class="price">$<?php echo $rows["price"] ?></p>
                        <p><?php echo $rows["specifications"] ?></p>
                        <p><button>Add to Cart</button></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
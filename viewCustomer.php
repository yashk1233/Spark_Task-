<?php 

$id= $_GET['id'];
// echo $id;


include("config/config.php");
$result = mysqli_query($mysql,"select * from customer where id='$id'");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Task 1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Task 1</a><button data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link " style="color:#fed136" href="customer.php">View
                            Customer</a></li>

                    <li class="nav-item"><a class="nav-link" href="transaction.php">Transaction</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.63),rgba(0, 0, 0, 0.699)),  url('assets/img/copernico-p_kICQCOM4s-unsplash.jpg');">

        



        <div class="container " style="padding-top:10% ;">
            <div class="student-profile py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-sm">
                                <div class="card-header bg-transparent text-center">
                                    <img class="profile" src="assets/img/student.png" style="width: 50%;" alt="student dp">
                                    <h3>
                                       
                                    </h3>
                                </div>
                                <?php
                                while($res=mysqli_fetch_array($result)){

    

                                    ?>
                                <div class="card-body" style="color: black;">
                                    <p class="mb-0"><strong class="pr-1">Customer Name:</strong>
                                    <?php echo $res['name']; ?>
                                    </p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow-sm">
                                <div class="card-header bg-transparent border-0">
                                    <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <table class="table table-bordered">
                                       
                                        <tr>
                                            <th width="30%">Balance </th>
                                            <td width="2%">:</td>
                                            <td>
                                                <?php echo $res['balance']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Email</th>
                                            <td width="2%">:</td>
                                            <td>
                                                <?php echo $res['email']; ?>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <?php
}
?>
                                </div>
                            </div>
                            <!-- <div style="height: 26px"></div> -->

                        </div>
                    </div>
                </div>
            </div>





        </div>

        <!-- </div> -->
    </header>
 




    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html> 
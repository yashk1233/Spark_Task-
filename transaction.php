<?php
include("config/config.php");
$result = mysqli_query($mysql,"select * from transaction order by id");

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
                    <li class="nav-item"><a class="nav-link "  href="customer.php">View
                            Customer</a></li>

                    <li class="nav-item"><a class="nav-link" style="color:#fed136" href="transaction.php">Transaction</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.63),rgba(0, 0, 0, 0.699)),  url('assets/img/copernico-p_kICQCOM4s-unsplash.jpg');">
       
        <div class="container " style="padding-top:10% ;">


            <table class="table table-success table-striped">
                <thead class="table-dark" style="color: #fed136;">
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Sender Name</th>
                        <th scope="col">Reciever Name</th>
                        <th scope="col">Amount</th>
                        <th  scope="col">Date/Time</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($res=mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td>'.$res['id'].'</td>';
                        echo '<td>'.$res['sender'].'</td>';
                        echo '<td>'.$res['reciever'].'</td>';
                        echo '<td>'.$res['amount'].'</td>';
                        echo '<td>'.$res['time'].'</td>';
                       
                        echo '</tr>';
                    }

                    ?>


                </tbody>

            </table>
          


        </div>
        </div>
        
    </header>

    


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
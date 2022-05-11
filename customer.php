<?php
include("config/config.php");
$result = mysqli_query($mysql,"select * from customer order by id");
$result2 = mysqli_query($mysql,"select * from customer order by id");
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
       
        <div class="container " style="padding-top:8% ;">


            <table class="table table-success table-striped">
                <thead class="table-dark" style="color: #fed136;">
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Email</th>
                        <th  scope="col">Details</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($res=mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td>'.$res['id'].'</td>';
                        echo '<td>'.$res['name'].'</td>';
                        echo '<td>'.$res['balance'].'</td>';
                        echo '<td>'.$res['email'].'</td>';
                        echo '<td> <button class="btn btn-primary"> <a style="color: black; list-style:none ; text-decoration: none;" href="ViewCustomer.php?id='.$res['id'].'">View Details  </a></button></td>';







                     
                        echo '</tr>';
                    }


                   
                
    ?>


                </tbody>

            </table>
            <button type="button" style="color: black;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo">Transfer Money</button>


        </div>
        </div>
        <!-- </div> -->
    </header>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transfer Money</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action='transfer.php' method='post'>
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Enter Your Name</label>
                        <input type="text" name="sender" class="form-control" id="recipient-name">
                            <label for="recipient-name" class="col-form-label"> Select Customer</label>

                            <select name="Custname" id="" class="form-control">
                               <option>Select</option>


                                <?php 
                                        
                                       
                                    
                                        while($res2=mysqli_fetch_array($result2)){
                                            ?>
                                            <option value="<?php echo $res2['name']?>"> <?php echo $res2['name']?></option>
                                            
                                            <?php
                                        }
                                        
                                        

            
                                ?>
                            </select>

                        </div>
                        <label for="recipient-name" class="col-form-label">Enter Amount</label>
                        <input type="text" name="amount" class="form-control" id="recipient-name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send Money</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
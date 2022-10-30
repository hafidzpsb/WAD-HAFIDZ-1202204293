<!DOCTYPE html>
<html lang="eng">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="d-flex justify-content-center container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/modul2/Hafidz_home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/modul2/Hafidz_booking.php">Booking</a></li>
            </ul>
        </div>
    </nav>
    <center>
        <h3><b>Thank You Hafidz_1202204293 for Reserving</b></h3>
        <p>Please double check your reservation details<p>
    </center>
    <table class="table">
    <thead>
        <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Car Type</th>
            <th>Phone Number</th>
            <th>Service(s)</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_POST['Name'])){
                if($_POST['Name']!=null){
                    echo '<tr>';
                    echo '<td>'.rand(1,10).'</td>';
                    echo '<td>'.$_POST['Name'].'</td>';
                    echo '<td>'.$_POST['Book_Date'].' '.$_POST['Start_Time'].'</td>';
                    echo '<td>'.date('Y-m-d',strtotime($_POST['Book_Date'].'+'.$_POST['Duration'].'days')).' '.$_POST['Start_Time'].'</td>';
                    echo '<td>'.$_POST['Car_Type'].'</td>';
                    echo '<td>'.$_POST['Phone_Number'].'</td>';
                    echo '<td><ul>';
                    foreach ($_POST['Add_Service'] as $AS){
                        switch ($AS){
                            case '25000':
                                echo '<li>Health Protocol</li>';
                                break;
                            case '100000':
                                echo '<li>Driver</li>';
                                break;
                            case '250000':
                                echo '<li>Full filled</li>';        
                                break;                
                            default:
                                echo '';
                        }
                    }
                    echo '</td></ul>';
                    echo '<td>';
                    switch ($_POST['Car_Type']){
                        case "Toyota":
                            $price=200000;
                            $price=$price*$_POST['Duration'];
                            foreach ($_POST['Add_Service'] as $AS){
                                $price+=(int)$AS;
                            }
                            echo 'Rp.'.$price;
                            echo '</td>';
                            break;
                        case "Honda":
                            $price=100000;
                            $price=$price*$_POST['Duration'];
                            foreach (($_POST['Add_Service']) as $AS){
                                $price+=(int)$AS;
                            }
                            echo 'Rp.'.$price;
                            echo '</td>';
                            break;
                        case "Mitsubishi":
                            $price=250000;
                            $price=$price*$_POST['Duration'];
                            foreach ($_POST['Add_Service'] as $AS){
                                $price+=(int)$AS;
                            }
                            echo 'Rp.'.$price;
                            echo '</td>';
                            break;
                    }
                }
                else{
                    echo '<td colspan="8"><center>No service</center></td>';
                }
            }
            else{
                echo '<td colspan="8"><center>No service</center></td>';
            }
        ?>
    </tbody>
    </table>
</body>
<footer>
    <center>
        <p>Created by MUHAMMAD HAFIDZ ALKHAIR PASARIBU_1202204293
    </center>
</footer>
</html>
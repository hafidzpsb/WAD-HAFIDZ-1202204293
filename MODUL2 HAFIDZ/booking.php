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
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="/modul2/home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/modul2/booking.php">Booking</a></li>
            </ul>
        </div>
    </nav>
    <center>
        <h3><b>Rent your car now!</b></h3>
    </center>
    <div class="row mx-auto w-75 p-3 mt-2">
        <div class="col-6 text-center">
        <?php
            if(isset($_GET['mobil'])){
                if($_GET['mobil']=='toyota'){
                    echo '<img width="350" height="250" src="https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png"></img>';
                }
                elseif($_GET['mobil']=='honda'){
                    echo '<img width="350" height="250" src="https://static.rajamobil.com/resize/600x600/media/images/databasemobil/mobilbaru/color/jazz-rallye-red-.png"></img>';
                }
                elseif($_GET['mobil']=='mitsubishi'){
                    echo '<img width="350" height="250" src="https://assets.mitsubishi-motors.co.id/products/colors/1642040743-cross-black-at-2x-minpng.png"></img>';
                }
            }
            else{
                echo '<img width="350" height="250" src="https://assets.mitsubishi-motors.co.id/products/colors/1642040743-cross-black-at-2x-minpng.png"></img>';
            }
        ?>
        </div>
        <div class="col">
            <form action="mybooking.php" method="POST">
                <div class="mb-3">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="Name" class="form-control form-control-readonly" value="Hafidz_1202204293" readonly>
                </div>
                <div class="mb-3">
                    <label for="Book_Date">Book Date</label>
                    <input type="date" id="Book_Date"" name="Book_Date"" class="form-control" placeholder="mm / dd / yyyy">
                </div>
                <div class="mb-3">
                    <label for="Start_Time">Start Time</label>
                    <input type="time" id="Start_Time" name ="Start_Time" class="form-control" placeholder="-- : --">
                </div>
                <div class="mb-3">
                    <label for="Duration">Duration (Days)</label>
                    <input type="number" id="Duration" name="Duration" class="form-control" min="1" max="7">
                </div>
                <div class="mb-3">
                    <label for="Car_Type">Car Type</label>
                    <select id="Car_Type" name="Car_Type" class="form-select" onchange="priceFunction()" aria-label="Default select example">
                        <option value="Toyota">Toyota Innova</option>
                        <option value="Honda">Honda Jazz</option>
                        <option value="Mitsubishi">Mitsubishi Xpander Cross</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Phone_Number">Phone Number</label>
                    <input type="tel" name="Phone_Number" id="Phone_Number" class="form-control" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="Add_Service"> Add Service(s):</label>
                    <div class="form-check">
                        <input class="form-check-input" name="Add_Service[]" type="checkbox" value="25000" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Health Protocol/Rp.25.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="Add_Service[]" type="checkbox" value="100000" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Driver/Rp.100.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="Add_Service[]" type="checkbox" value="250000" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                            Full filled/Rp.250.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="Add_Service[]" type="hidden" value="checked" id="defaultCheck4" style="display:none">
                        <label class="form-check-label" for="defaultCheck4">
                        </label>
                    </div>
                    <div class="d-grid gap-2">
                        <input class="btn btn-primary" type="submit" name="Book" value="Book">                      
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<footer>
    <center>
        <p>Created by MUHAMMAD HAFIDZ ALKHAIR PASARIBU_1202204293
    </center>
</footer>
</html>
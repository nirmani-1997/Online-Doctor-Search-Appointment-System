<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <nav>
        <label class="logo"> Online Doctor Search and Appointment System </label>
    </nav>

    <center>
        <p style="font-size: 30px;"><b>Login to access the system</b></p>
        <div class='badge-header'>Login As: </div>
        
    </center>


    <div class='row' style='margin-top: 70px;'>
        <div class='col-md-4'>
            <center>
                <div>
                    <img class='img-login-icons' src='img/icons/3678411 - hospital medical nurse.png' alt='login as a admin' />
                </div>
 
                    <a href='login-admin.php'>
                        <div class='badge-header'>Admin</div>
                    </a>
            </center>

        </div>
        <div class='col-md-4'>
            <center>
                <div>
                    <img class='img-login-icons' src='img/icons/3678412 - doctor medical care medical help stethoscope.png' alt='login as a doctor' />
                </div>

                    <a href='login-doctor.php'>
                        <div class='badge-header'>Doctor</div>
                    </a>
            </center>
 
        </div>
        <div class='col-md-4'>
            <center>
                <div>
                    <img class='img-login-icons' src='img/icons/3678443 - ambulance fast fast hospital.png' alt='login as a patient' />
                </div>
 
                    <a href='login-patient.php'>
                        <div class='badge-header'>Patient</div>
                    </a>
 
            </center>
        </div>
    </div>


</body>

</html>
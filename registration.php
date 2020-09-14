<?php
require_once('config.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
</head>
<body>

    <div>
        <?php
            if(isset($_POST['create'])){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $phonenumber = $_POST['phonenumber'];
                $lastname = $_POST['lastname'];
                $password = $_POST['password'];


                $sql = "INSERT INTO registrations (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
                if($result){
                    echo 'Successfully Saved';
                }else{
                    echo " there are errors while saving the data";
                }
                
                echo $firstname;
                echo $lastname;
                echo $email;
                echo $phonenumber;
                echo $password;
            }
        ?>
    </div>

    <form action="registration.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Registration</h1>
                    <p>Fill up the form with correct values</p>
                    <hr class="mb-3">
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" type="text" name="firstname" required>

                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" type="text" name="lastname" required>

                    <label for="email"><b>Email address</b></label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="phonenumber"><b>phone number</b></label>
                    <input class="form-control" type="text" name="phonenumber" required>

                    <label for="firstname"><b>password</b></label>
                    <input class="form-control" type="password" name="password" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
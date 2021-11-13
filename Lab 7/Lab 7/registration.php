<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Travel Agency</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <h1>Register Into Travel Agency</h1>

    <h2>Registration Form</h2>
    
    <div class="card">
        <form action="" method="POST">
            <legend>
                <fieldset>
                    Name: <input type="text" name="name"><br />
                    Username: <input type="text" name="user"><br />
                    Password: <input type="password" name="pass"><br />
                    <input type="submit" value="Register" name="submit" />
                    <p>Already a User? <a href="login.php">Login</a></p>
                </fieldset>
            </legend>
        </form>
    </div>

    <?php
        if(isset($_POST["submit"])){
            if(!empty($_POST['name']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
                
                $name = $_POST['name'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                
                $con = mysqli_connect('localhost','root','',"lab7_database");

                $sql = "SELECT * FROM users WHERE username='".$user."'";
                $query = mysqli_query($con,$sql);
                $numrows = mysqli_num_rows($query);

                if($numrows == 0)
                {
                    $sql = "INSERT INTO users(name,username,password) VALUES('$name','$user','$pass')";
                
                    $result = mysqli_query($con,$sql);
                    
                    if($result){
                        echo "Account Successfully Created";
                    }
                    else {
                    echo "Failed to Create Account!";
                    }
                }
                else {
                echo "That username already exists! Please try again with another.";
                }
            
            }
            else {
                echo "All fields are required!";
            }
        }
    ?>
</body>
</html>
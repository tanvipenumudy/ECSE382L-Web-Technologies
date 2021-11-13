<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Travel Agency</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <h1>Login To Travel Agency</h1>
   
    <h2>Login Form</h2>

    <div class="card">
        <form action="" method="POST">
            <legend>
                <fieldset>
                    Username: <input type="text" name="user"><br />
                    Password: <input type="password" name="pass"><br />
                    <input type="submit" value="Login" name="submit" />
    
                    <p>New User? <a href="registration.php">Register</a></p>
    
                </fieldset>
            </legend>
        </form>
    </div>

    <?php
        if(isset($_POST["submit"])){
        
            if(!empty($_POST['user']) && !empty($_POST['pass'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $con = mysqli_connect('localhost','root','',"lab7_database");
                
                if(mysqli_connect_errno())
                {
                    echo "Failed to connect: " . mysqli_connect_errno();
                }
                
                $sqlQuery = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'";
                $query = mysqli_query($con, $sqlQuery);  
                $numrows = mysqli_num_rows($query);  

                if($numrows != 0)  
                {  
                    while($row = mysqli_fetch_assoc($query))  
                    {  
                        $dbname = $row['name'];
                        $dbusername = $row['username'];  
                        $dbpassword = $row['password'];  
                    }  
            
                    if($user == $dbusername && $pass == $dbpassword)  
                    {  
                        session_start();  
                        $_SESSION['sess_user']=$dbname;  
                
                        /* Redirect browser */  
                        header("Location: landing_page.php");  
                    }  
                }
                else {  
                echo "Invalid username or password!";  
                } 
            }
            else {
                echo "All fields are required!";
            }
        }
    ?>
</body>
</html>
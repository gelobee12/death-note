<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conn = mysqli_connect("sql100.infinityfree.com", "if0_41635519", "roseneth123", "if0_41635519_deathnote_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        $_SESSION['username'] = $username;
        header("Location: dashb.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death note</title>
    <link rel="stylesheet" href="note.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <div class="note">
        <form action="loginpage.php" method="POST" >
            <h1>Sign in</h1>

            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

            <div class="input-box">
                <input type="text" name="username" placeholder="username" required> 
                <i class='bx  bx-user'  ></i> 
            </div>
 
            <div class="input-box">
                <input type="password" name="password" placeholder="password" id="passinput" required>

                <div class="btneye">

                <button  type="button" onclick="togglePassword()"> 
                    <svg  xmlns="http://www.w3.org/2000/svg" id="eyeslash" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" > <path d="M12 17c-5.35 0-7.42-3.84-7.93-5 .2-.46.65-1.34 1.45-2.23l-1.4-1.4c-1.49 1.65-2.06 3.28-2.08 3.31-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68.91 0 1.73-.1 2.49-.26l-1.77-1.77c-.24.02-.47.03-.72.03Zm9.95-4.68c.07-.21.07-.43 0-.63-.02-.07-2.32-6.68-9.95-6.68-1.84 0-3.36.39-4.61.97L2.71 1.29 1.3 2.7l4.32 4.32 1.42 1.42 2.27 2.27 3.98 3.98 1.8 1.8 1.53 1.53 4.68 4.68 1.41-1.41-4.32-4.32c2.61-1.95 3.55-4.61 3.56-4.65m-7.25.97c.19-.39.3-.83.3-1.29 0-1.64-1.36-3-3-3-.46 0-.89.11-1.29.3l-1.8-1.8c.88-.31 1.9-.5 3.08-.5 5.35 0 7.42 3.85 7.93 5-.3.69-1.18 2.33-2.96 3.55z"></path> 
                        </svg> 
                            <svg  xmlns="http://www.w3.org/2000/svg" style="display: none;" id="eyeopen" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" > 
                               <path d="M12 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6"></path><path d="M12 19c7.63 0 9.93-6.62 9.95-6.68.07-.21.07-.43 0-.63-.02-.07-2.32-6.68-9.95-6.68s-9.93 6.61-9.95 6.67c-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68Zm0-12c5.35 0 7.42 3.85 7.93 5-.5 1.16-2.58 5-7.93 5s-7.42-3.84-7.93-5c.5-1.16 2.58-5 7.93-5"></path>
                                  </svg>     
                </button> 
                
                </div>
            </div>

            <div class="box">
                <label for="remember">Remember me</label>
                <input type="checkbox" id="remember">

                </div>
            <button type="submit" class="btn">Sign in</button>  
            <br>
            <a href="signin.html">create new account?</a>
            <br>

            <div class="social-icons">
               <a href="https://www.facebook.com/" > <img src="facebook.png" alt="fb"></a>
               <a href="https://accounts.google.com/"> <img src="google.png" alt="gg"></a>
            </div>

        </form>
    </div>

    <script src="log.js"></script>

</body>
</html>
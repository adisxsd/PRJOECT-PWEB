<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Of Shoe</title>
    <link rel="stylesheet" href="app\assets\css\style.css">
</head>

<body>

    <header>
      <h2 class = "logo"> Home Of Shoes </h2>
      <nav class = "navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <button class = "btnLogin-popup">Login</button>
      </nav>
    </header>
    
    <div class="wrapper">
    <span class="icon-close">
    <ion-icon name="close"></ion-icon>
    </span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="Email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="Password" required>
                    <label>Password</label>
                </div>
                <button type="Submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" 
                    class="Register-Link">Register</a></p>
                </div>
            </form>
        </div>
        <div class="form-box Register">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="Email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="Password" required>
                    <label>Password</label>
                </div>
                <button type="Submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" 
                    class="Login-Link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="app\assets\client\script.js" ></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
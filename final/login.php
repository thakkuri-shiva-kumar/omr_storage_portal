<?php
session_start();

// If already logged in
if(isset($_SESSION['admin'])){
    header("Location: main.php");
    exit();
}

$admin_user = "admin";
$admin_pass = YOUR_SECURE_PASSWORD_HERE; // Change this to a strong password

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST['username'] === $admin_user &&
       $_POST['password'] === $admin_pass){
    
        session_regenerate_id(true);
        $_SESSION['admin'] = true;

        header("Location: main.php");
        exit();
    }
    else{
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>

*{
    box-sizing:border-box;
    margin:0;
    padding:0;
}

body{
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg,#dfe9f3,#ffffff);
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

/* BIGGER LOGO */
.logo{
    width:700px;
    max-width:90%;
    height:auto;
    margin-bottom:30px;
}

/* LOGIN CARD */
.box{
    width:420px;
    padding:40px;
    background:white;
    text-align:center;
    border-radius:14px;
    box-shadow:0 8px 25px rgba(0,0,0,0.15);
}

h2{
    margin-bottom:25px;
}

input{
    width:100%;
    padding:12px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:15px;
    margin:10px 0;
}

.password-container{
    position:relative;
    width:100%;
}

.toggle-password{
    position:absolute;
    right:12px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
    font-size:18px;
}

button{
    width:140px;
    padding:12px;
    margin-top:18px;
    background:#2f6fed;
    color:white;
    border:none;
    border-radius:6px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1c54d1;
}

.error{
    color:red;
    margin-bottom:10px;
}

</style>

</head>

<body>

<!-- BIG LOGO -->
<img src="https://i.ibb.co/5WL0BpXS/images-1.jpg" alt="College Logo" class="logo">

<div class="box">

<h2>Admin Login</h2>

<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<div class="password-container">
    <input type="password" id="password" name="password" placeholder="Password" required>
    <span class="toggle-password" onclick="togglePassword()">👁</span>
</div>

<button type="submit">Login</button>

</form>
</div>

<script>

function togglePassword(){
    const password = document.getElementById("password");

    if(password.type === "password"){
        password.type = "text";
    }
    else{
        password.type = "password";
    }
}

</script>

</body>
</html>

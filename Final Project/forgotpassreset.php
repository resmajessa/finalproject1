<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Reset Password</title>
</head>
<body>
<div class="con">
    <div>
        <div>
            <nav>
                <div class="logo"><img src="nami-modified.png" alt="Nami" class="logoo"></div>
            </nav>
        </div>
    </div>
    <div class="box2">
        <form >
            <h2>Forgot Password</h2>
            <div class="inputbox">
                <i class="fa solid fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="new password" required>
                <i id="Eye" class="fa solid fa-eye-slash" onclick="togglePasswordVisibility('password')"></i>
            </div>
            <div class="inputbox">
                <i class="fa solid fa-lock"></i>
                <input type="password" id="confirmpass" name="confirmpass" placeholder="confirm password" required>
                <i id="eye1" class="fa solid fa-eye-slash" onclick="togglePasswordVisibility('confirmpass')"></i>
            </div>

            <div>
                <a href="index.html"><button class="ok" type="submit">Continue</button></a>
            </div>
        </form>
    </div>
</div>

<script>
    //showpass
    function togglePasswordVisibility(inputId) {
        var passwordInput = document.getElementById(inputId);
        var eyeIcon = document.getElementById("Eye");
        var eyeIcon1 = document.getElementById("eye1");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            if (inputId === "password") {
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else if (inputId === "confirmpass") {
                eyeIcon1.classList.remove("fa-eye-slash");
                eyeIcon1.classList.add("fa-eye");
            }
        } else {
            passwordInput.type = "password";
            if (inputId === "password") {
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else if (inputId === "confirmpass") {
                eyeIcon1.classList.remove("fa-eye");
                eyeIcon1.classList.add("fa-eye-slash");
            }
        }
    }

    // dapat same password
    document.querySelector('form').addEventListener('submit', function (event) {
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirmpass').value;

        if (password !== confirm_password) {
            event.preventDefault();
            alert('Password and Confirm Password do not match');
        }
    });
</script>

<style>
    .box2{
        margin-top: 100px;
    }
    form{

        position: absolute;
        inset: 2px;
        border-radius: 50px 5px;
        background-color: #28292d;
        z-index: 9;
        padding: 30px 30px;
        display: flex;
        flex-direction: column;

    }
    h2{
        color: orange;
        font-size: 50px;
        font-weight: 500;
        text-align: center;
        margin-top: 5%;

    }
    .inputbox{
        position: relative;
        margin-top: 10%;
        width: 100%;
        height: 50px;
        border-bottom: 2px solid orangered;
    }


    #password,
    #confirmpass{
        padding-left: 10%;
        width: 100%;

    }
    .inputbox{
        position: relative;
        margin-top: 60px;
        width: 100%;
        height: 50px;
        border-bottom: 2px solid orangered;
    }
    .inputbox input{
        width: 100%;
        height: 70px;
        background: transparent;
        border: none;
        outline: none;
        color: white;
        font-size: 1em;
        font-weight: 500;
        padding-left: 11%;
        margin-bottom: 10%;


    }
    .inputbox .fa-user, .fa-envelope, .fa-lock ,.fa-circle-user{
        position: absolute;
        bottom: 10px;
        font-size: 1.2em;
        left: 10px;
        color: orange;
        top: 15px;
    }
    .inputbox .fa-eye, .fa-eye-slash{
        right: 20px;
        position: absolute;
        bottom: 16px;
        color: orange;
        font-size: 1.2em;
        cursor: pointer;
    }
    .inputbox label{
        position: absolute;
        top: -2%;
        left: 5px;
        font-size: 1em;
        color: orange;
        font-weight: 600;
        padding-left: 10%;
    }

    .ok{
        padding: 20px;
        margin-top: 8%;
        border-radius: 25px;
        width: 100%;
        border: none;
        outline: none;
        background: orange;
        font-weight: 600;
        transition: tranform 0.2s ease;
        font-size: 18px;
    }
    .ok:hover{
        background: linear-gradient(90deg, #00ffff, #ffa600);
    }
    .ok:active{
        transform: scale(0.9);
    }
    p{
        margin-top: 8%;
        margin-left: 18%;
        color: white;
    }
    a{
        color: orange;
        text-decoration: none;
    }
    a:hover{
        color: cyan;
    }

    .links{
        display: grid;
        justify-content: center;
        text-align: center;
        gap: 15px;
        margin-top: 80px;
        font-size: larger;
    }
</style>



</body>
</html>

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
    <title>Forgot Password</title>
</head>
<body>
<div class="con">
    <div>
        <nav>
            <div class="logo"><img src="nami-modified.png" alt="Nami" class="logoo"></div>
        </nav>
    </div>
    <div class="box2">
        <form>
            <h2>Forgot Password</h2> <br>
            <p style="color: white; font-size: 20px" >To reset the password, enter the email you use.</p>
                <div class="inputbox">
                    <label for="email">Email</label>
                    <i class="fa solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
                </div>
            <button type="submit">Send</button>
        </form>
</div>


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
        h2 {
            color: orange;
            font-size: 50px;
            font-weight: 500;
            text-align: center;
            margin-top: 5%;
        }
            .inputbox {
                position: relative;
                margin-top: 40px;
                width: 100%;
                height: 50px;
                border-bottom: 2px solid orangered;
            }

        .inputbox input {
            width: 100%;
            height: 25px;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-size: 1em;
            font-weight: 500;
            padding-left: 11%;
            margin-bottom: 5%;
            margin-top: 23px;
        }
        button{
            padding: 20px;
            margin-top: 15%;
            border-radius: 25px;
            width: 100%;
            border: none;
            outline: none;
            background: orange;
            font-weight: 600;
            transition: transform 0.2s ease;
            font-size: 18px;
        }
        button:hover{
            background: linear-gradient(90deg, #00ffff, #ffa600);
        }
        button:active {
            transform: scale(0.9);
        }
        i{
            position: absolute;
            bottom: 16px;
            top: 25px;
            font-size: 1.2em;
            left: 5px;
            color: orange;
        }
        .inputbox label {
            position: absolute;
            top: -10%;
            left: 5px;
            font-size: 1em;
            color: orange;
            font-weight: 600;
            padding-left: 10%;
        }

    </style>
</body>
</html>
<?php 
?>
<html lang="en" >
<head>
    <title>login as admin</title>
    <link rel="icon" href="./assets/imgs/Rounded_icon.png">
</head>
<body style="background-color:whitesmoke">
    <form action="admin.php" method="post"> 
         <h3>Alphatech Login <a   href="index.php#team">office</a></h3>
         <br>
        <input type="number" placeholder="Phone" name="num" required >
        <br>
        <input type="password" placeholder="Password" name="pass" required>
        <br>
        <button type="submit">Log In</button>
    </form>
</body>
    <!--Stylesheet-->
    <style>
        html{
            overflow : hidden;
        }
        body{
            background:url(assets/imgs/Cap.png);
            background-size: cover;
            backdrop-filter: blur(20px) ; 
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        
        *{
            font-family: sans-serif;
            letter-spacing: 0.3px;
            font-weight: 600;
            font-size: 2vh;
            text-align: center;
            border-radius: 2vh;
            border: 0;
        }
        form{
            display: flex;
            align-items: center;
            flex-direction: column; 
            justify-content: center;         
            text-align: center;
            padding: 50px;
            width: 30vh;
            height: 40vh;
            box-shadow: 0px 0px 30px 1000px rgb(0, 0, 0 , 0.6);
            background:linear-gradient(160deg ,rgba(0, 0, 0, 0.9) , rgba(58, 58, 58, 0.9));
            border: 10px solid white;
            border-radius: 15px;
        }
        h3 {
            color: white;
            font-size: 4vh;
        }
        h3 a {
            color:white;
        }
        form * {
            width: 100%;
            height: 20%;
        }
        form input{
            border: 1px solid blue;
        }
        button{
            border: 1px solid black;
            cursor:pointer;
            transition: scale 0.5s;
        }
        button:hover{
            scale: 1.05;
        }

    </style>
</html>

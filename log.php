<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Teko:wght@600;700&display=swap');

/* Gritty Dirt & Camo Background */
html {
    min-height: 100vh;
    background-color: #121110;
    background-image: 
        radial-gradient(circle at 50% 30%, rgba(211, 84, 0, 0.15) 0%, transparent 70%),
        repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.2) 10px, transparent 10px, transparent 20px);
}

/* Center Content Cleanly without any Container Box */
body {
    font-family: 'Teko', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    padding: 20px;
    box-sizing: border-box;
    color: #e0e0e0;
    font-size: 36px;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-align: center;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.9);
}

/* Tactical Deploy Button */
body > a {
    display: inline-block;
    padding: 10px 32px;
    margin-top: 25px;
    background-color: #d35400;
    color: #000000;
    border: 2px solid #e67e22;
    font-family: 'Black Ops One', cursive;
    font-size: 20px;
    letter-spacing: 2px;
    text-decoration: none;
    text-transform: uppercase;
    box-shadow: 0 4px 0px #873600;
    transition: all 0.15s ease;
}

body > a:hover {
    background-color: #e67e22;
    transform: translateY(-2px);
    box-shadow: 0 6px 0px #873600;
}

body > a:active {
    transform: translateY(2px);
    box-shadow: 0 1px 0px #873600;
}
</style>
</head>
<body>
    <?php
        session_start();
        
            if(!isset($_SESSION["username"])){
            header("location: login.php");
            exit;
            }
        ?>

        สวัสดี คุณ <?= $_SESSION["username"] ?>

        <a href="index.php">หน้าหลัก</a>
</body>
</html>
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
}

/* Back Link (Rugged Dark Button) */
body > a {
    display: inline-block;
    align-self: center;
    padding: 8px 18px;
    margin-bottom: 20px;
    background-color: #1c1a17;
    color: #b3a998;
    border: 2px solid #3a352e;
    font-family: 'Black Ops One', cursive;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
    box-shadow: 0 4px 0px #000000;
    transition: all 0.15s ease;
}

body > a:hover {
    color: #ffffff;
    border-color: #d35400;
    transform: translateY(-2px);
    box-shadow: 0 6px 0px #000000;
}

body > a:active {
    transform: translateY(2px);
    box-shadow: 0 1px 0px #000000;
}

/* Supply Crate Edit Form Box */
form {
    position: relative;
    background: #1c1a17;
    padding: 40px 30px 30px;
    border: 2px solid #3a352e;
    border-top: 5px solid #d35400;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.9), inset 0 0 15px rgba(0, 0, 0, 0.6);
    width: 100%;
    max-width: 340px;
    box-sizing: border-box;
}

/* Stenciled Header Tag */
form::before {
    content: "LOADOUT // EDIT MEMBER";
    display: block;
    font-family: 'Black Ops One', cursive;
    font-size: 18px;
    letter-spacing: 2px;
    color: #d35400;
    margin-bottom: 25px;
    text-transform: uppercase;
    border-bottom: 2px dashed #3a352e;
    padding-bottom: 10px;
    text-shadow: 1px 1px 0px #000000;
}

/* Labels */
label {
    display: block;
    font-size: 20px;
    letter-spacing: 1.5px;
    color: #b3a998;
    text-transform: uppercase;
    margin-bottom: 4px;
    line-height: 1;
}

/* Input Fields */
input[type="text"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 20px;
    border: 2px solid #3a352e;
    border-radius: 0px;
    box-sizing: border-box;
    font-family: 'Teko', sans-serif;
    font-size: 22px;
    letter-spacing: 1px;
    color: #ffffff;
    background-color: #0e0d0c;
    transition: all 0.15s ease;
}

input[type="text"]:focus {
    outline: none;
    border-color: #d35400;
    background-color: #151311;
}

/* Save / Deploy Button */
button {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background: #d35400;
    color: #000000;
    border: 2px solid #e67e22;
    border-radius: 0px;
    font-family: 'Black Ops One', cursive;
    font-size: 20px;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 4px 0px #873600;
    transition: all 0.15s ease;
}

button:hover {
    background: #e67e22;
    color: #000000;
    transform: translateY(-2px);
    box-shadow: 0 6px 0px #873600;
}

button:active {
    transform: translateY(2px);
    box-shadow: 0 1px 0px #873600;
}
    </style>
</head>
<body>

    <?php
        $id = $_GET["id"];

        include "action/connect.php";

        $sql = "SELECT * FROM players WHERE player_id = '$id' ";

        $result = mysqli_query($con, $sql);

        $order = mysqli_fetch_assoc($result);
    ?>

    <a href="manage_team.php">หน้าจัดการ</a>
    
    <form action="action/update_team.php" method="post">

        <label for="">ชื่อผู้เล่น</label>
        <input type="text" name="name" value="<?= $order["name"] ?>" > <br>

        <label for="">อายุ</label>
        <input type="text" name="age" value="<?= $order["age"] ?>" > <br>

        <label for="">บทบาท</label>
        <input type="text" name="role" value="<?= $order["role"] ?>" > <br>


        <input type="hidden" name="player_id" value="<?= $order['player_id'] ?>">

        <br>
        <button>บันทึก</button>

    </form>

</body>
</html>
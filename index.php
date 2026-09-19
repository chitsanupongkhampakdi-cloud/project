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
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
    box-sizing: border-box;
    color: #e0e0e0;
}

/* Navigation Links Container */
body > a {
    display: inline-block;
    padding: 8px 18px;
    margin-bottom: 20px;
    margin-right: 10px;
    font-family: 'Black Ops One', cursive;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.15s ease;
}

/* Manage Team Link (Hazard Orange) */
body > a[href*="manage_team"] {
    background-color: #d35400;
    color: #000000;
    border: 2px solid #e67e22;
    box-shadow: 0 4px 0px #873600;
}

body > a[href*="manage_team"]:hover {
    background-color: #e67e22;
    transform: translateY(-2px);
    box-shadow: 0 6px 0px #873600;
}

body > a[href*="manage_team"]:active {
    transform: translateY(2px);
    box-shadow: 0 1px 0px #873600;
}

/* Logout Link (Rugged Dark Outline) */
body > a[href*="logout"] {
    background-color: #1c1a17;
    color: #b3a998;
    border: 2px solid #3a352e;
    box-shadow: 0 4px 0px #000000;
}

body > a[href*="logout"]:hover {
    color: #ffffff;
    border-color: #d35400;
    transform: translateY(-2px);
    box-shadow: 0 6px 0px #000000;
}

body > a[href*="logout"]:active {
    transform: translateY(2px);
    box-shadow: 0 1px 0px #000000;
}

/* Supply Crate Roster Table */
table {
    width: 100%;
    border-collapse: collapse !important;
    background-color: #1c1a17;
    border: 2px solid #3a352e;
    border-top: 5px solid #d35400;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.9), inset 0 0 15px rgba(0, 0, 0, 0.6);
}

/* Header Cells */
thead th {
    background-color: #0e0d0c;
    color: #d35400;
    font-family: 'Black Ops One', cursive;
    font-weight: normal;
    font-size: 18px;
    letter-spacing: 1.5px;
    padding: 12px 16px;
    text-align: left;
    text-transform: uppercase;
    border-bottom: 2px solid #3a352e;
    border-right: 1px solid #2a2520;
}

thead th:last-child {
    border-right: none;
}

/* Data Cells */
td {
    padding: 12px 16px;
    font-size: 22px;
    letter-spacing: 1px;
    color: #d0c8b8;
    border-bottom: 1px solid #2a2520;
    border-right: 1px solid #2a2520;
}

td:last-child {
    border-right: none;
}

/* Row Highlight Effect */
tbody tr:hover {
    background-color: rgba(211, 84, 0, 0.12);
}

tbody tr:last-child td {
    border-bottom: none;
}
    </style>
</head>
<body>
    
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include "action/connect.php";
$sql = "SELECT * FROM players";
$result = mysqli_query($con, $sql);
?>

    <a href="manage_team.php">หน้าจัดการ</a>
     <a href="logout.php">ล็อคเอ้าท์</a>
    <table border=1>
        <thead>
            <th>รหัสผู้เล่น</th>
            <th>ชื่อผู้เล่น</th>
            <th>อายุ</th>
            <th>ตำแหน่ง</th>
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["player_id"] ?></td>
                    <td><?= $order["name"] ?></td>
                    <td><?= $order["age"] ?></td>
                    <td><?= $order["role"] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Teko:wght@600;700&display=swap');

/* Gritty Dirt & Camo Vibe Background */
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
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    padding: 20px;
    box-sizing: border-box;
    color: #e0e0e0;
}

/* Military / Supply Crate Container */
form {
    position: relative;
    background: #1c1a17;
    padding: 40px 30px 30px;
    border: 2px solid #3a352e;
    border-top: 5px solid #d35400; /* Rust Orange Accent */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.9), inset 0 0 15px rgba(0, 0, 0, 0.6);
    width: 100%;
    max-width: 340px;
    box-sizing: border-box;
}

/* Stenciled Header Tag */
form::before {
    content: "DROP ZONE // AUTH";
    display: block;
    font-family: 'Black Ops One', cursive;
    font-size: 18px;
    letter-spacing: 2px;
    color: #d35400;
    margin-bottom: 25px;
    text-transform: uppercase;
    border-bottom: 2px dashed #3a352e;
    padding-bottom: 10px;
    text-shadow: 1px 1px 0px #000;
}

/* Field Labels */
label {
    display: block;
    font-size: 20px;
    letter-spacing: 1.5px;
    color: #b3a998;
    text-transform: uppercase;
    margin-bottom: 4px;
    line-height: 1;
}

/* Rugged Combat Inputs */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 20px;
    border: 2px solid #3a352e;
    border-radius: 0px; /* Sharp angles */
    box-sizing: border-box;
    font-family: 'Teko', sans-serif;
    font-size: 22px;
    letter-spacing: 1px;
    color: #ffffff;
    background-color: #0e0d0c;
    transition: all 0.15s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #d35400;
    background-color: #151311;
}

/* Hazardous / High-Contrast Deploy Button */
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
    transition: all 0.1s ease;
}

button:hover {
    background: #e67e22;
    color: #000000;
    box-shadow: 0 4px 0px #a04000;
}

button:active {
    transform: translateY(3px);
    box-shadow: 0 1px 0px #873600;
}
    </style>
</head>
<body>
    
        <form action="check_login.php" method="post">

        <label for="">ชื่อผู้ใช้</label>
        <input type="text" name="username"> <br>


        <label for="">รหัสผ่าน</label>
        <input type="text" name="password"> <br>

        <button>ล็อคอิน</button>
        
        </form>

</body>
</html>

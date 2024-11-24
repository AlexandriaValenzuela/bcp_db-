<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <linkhref="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="forgot.css">
    <title>Forgot Password</title>
</head>
<body>
    <div class="forgot-password-container">
        <h2>Forgot Password?</h2>
        <hr class="border w-full border-[#00446b]">
        <h2>Enter your email address to recover your password.</h2>
        <form action="Reset.php" method="POST">
            <input type="email" name="email" placeholder="Email Address" required>
            <button type="submit">Recover Password</button>
            
        </form>
        <div class="footer-text">
            
        </div>
    </div>
</body>
</html>
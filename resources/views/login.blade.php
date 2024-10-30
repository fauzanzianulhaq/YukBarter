<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login YukBarter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo" style="margin-right: 140px">
                <img src="/images/logo2.png" alt="YukBarter" class="logo-img" width="">
                <h1 class="logo-text">Yuk<span>Barter</span></h1>
            </div>
            <h2>Masuk Akun</h2>
            <p>Masuk dan mulailah barter barang anda!</p>
            <form>
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email">
                
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" placeholder="Password">
                    <span class="toggle-password">&#128065;</span>
                </div>
                
                <div class="remember-forgot">
                    <label><input type="checkbox"> Ingat Saya?</label>
                    <a href="#">Lupa Password?</a>
                </div>
                
                <button type="submit">Masuk</button>
            </form>
            <div class="register-link">
                Belum Punya Akun? <a href="daftar">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Css/css_signup.css">
</head>


<body>

    <div class="container">
        <header>Sign Up Now</header>
        <div>đăng ký tài khoản</div>
        <form>
            <div class="input-field">
                <input type="text" required>
                <label>Email or Username</label>
            </div>
            <div class="input-field">
                <input class="pswrd" type="password" required>
                <span class="showpw show">SHOW</span>
                <label>Password</label>
            </div>
            <div class="input-field">
                <input class="cfpswrd" type="password" required>
                <span class="showcfpw show">SHOW</span>
                <label>Confirm Password</label>
            </div>
            <div class="input-field">
                <input type="text" required>
                <label>Email</label>
            </div>
            <div class="input-field">
                <input type="text" required>
                <label>SĐT</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button>Sign Up</button>
            </div>
        </form>
        <div class="auth">
        quay trở về
            <a href="/view/login/login.php"> trang login</a>
            |<a href="/index.php">Trang chủ</a>
        </div>
       
    </div>

    <script>
        var ip_pw = document.querySelector('.pswrd');
        var ip_cf_pw = document.querySelector('.cfpswrd');
        var showpw = document.querySelector('.showpw');
        var showcfpw = document.querySelector('.showcfpw');
        showpw.addEventListener('click', active_pw);
        showcfpw.addEventListener('click', active_cfpw);
        function active_pw() {
            if (ip_pw.type === "password") {
                ip_pw.type = "text";
                showpw.style.color = "#1DA1F2";
                showpw.textContent = "HIDE";
            } else {
                ip_pw.type = "password";
                showpw.textContent = "SHOW";
                showpw.style.color = "#111";
            }
        }
        function active_cfpw() {
            if (ip_cf_pw.type === "password") {
                ip_cf_pw.type = "text";
                showcfpw.style.color = "#1DA1F2";
                showcfpw.textContent = "HIDE";
            } else {
                ip_cf_pw.type = "password";
                showcfpw.textContent = "SHOW";
                showcfpw.style.color = "#111";
            }
        }
    </script>
</body>

</html>
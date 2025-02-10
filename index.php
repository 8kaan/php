<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş / Kayıt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Giriş Formu -->
                <form action="#" class="sign-in-form">
                    <h2 class="title">Giriş Yap</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Kullanıcı Adı" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Şifre" />
                    </div>
                    <input type="submit" value="Giriş Yap" class="btn solid" />
                    <p class="forgot-password">
                        <a href="#" id="forgot-password">Şifremi Unuttum</a>
                    </p>
                </form>

                <!-- Kayıt Formu -->
                <form action="#" class="sign-up-form">
                    <h2 class="title">Kayıt Ol</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Kullanıcı Adı" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Şifre" />
                    </div>
                    <input type="submit" value="Kayıt Ol" class="btn solid" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Hesabın yok mu?</h3>
                    <p>Hemen ücretsiz hesap oluştur ve aramıza katıl!</p>
                    <button class="btn transparent" id="sign-up-btn">Kayıt Ol</button>
                </div>
                <img src="https://raw.githubusercontent.com/sefyudem/Sliding-Sign-In-Sign-Up-Form/955c6482aeeb2f0e77c1f3c66354da3bc4d7a72d/img/log.svg" class="image" alt="" />
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Zaten üye misin?</h3>
                    <p>Hesabına giriş yaparak devam et!</p>
                    <button class="btn transparent" id="sign-in-btn">Giriş Yap</button>
                </div>
                <img src="https://raw.githubusercontent.com/sefyudem/Sliding-Sign-In-Sign-Up-Form/955c6482aeeb2f0e77c1f3c66354da3bc4d7a72d/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
</body>
</html>

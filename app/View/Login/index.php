<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../Public/Assets/Style/Styles.css">
    <link rel="icon" href="../../../Public/Assets/Img/iclabs.png">

    <title>Pendaftaran calon asisten ICLABS</title>
    <style>
        p {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.5;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="">
                <div>
                    <h1 style="text-align: center;">Buat Akun</h1>
                    <div style="width: 100%; max-width: 400px; margin: auto; padding: 20px;">

                        <div style="position: relative; width: 100%; margin-bottom: 15px;">
                            <img src="../../../Public/Assets/Img/profile.svg" alt="Profile Icon"
                                style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                            <input type="text" id="name" name="username" placeholder="Username"
                                style="padding-left: 40px; width: 100%; height: 45px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
                        </div>

                        <div style="position: relative; width: 100%; margin-bottom: 15px;">
                            <img src="../../../Public/Assets/Img/idcard.svg" alt="ID Card Icon"
                                style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                            <input type="text" class="form-control" id="stambuk" name="stambuk" placeholder="Stambuk"
                                style="padding-left: 40px; width: 100%; height: 45px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
                        </div>

                        <div style="position: relative; width: 100%; margin-bottom: 15px;">
                            <img src="../../../Public/Assets/Img/password.svg" alt="Lock Icon"
                                style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                            <input type="password" id="password" name="password" placeholder="Password"
                                style="padding-left: 40px; width: 100%; height: 45px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
                            <span
                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                id="togglePassword">
                                <i class="bi bi-eye-slash" id="toggleIcon"></i>
                            </span>
                        </div>

                        <div style="position: relative; width: 100%; margin-bottom: 15px;">
                            <img src="../../../Public/Assets/Img/password.svg" alt="Key Icon"
                                style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                            <input type="password" id="confirmPass" name="konfirmasiPassword"
                                placeholder="Konfirmasi Password"
                                style="padding-left: 40px; width: 100%; height: 45px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
                            <span
                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                id="confirmPassword">
                                <i class="bi bi-eye-slash" id="toggleIconConfirmation"></i>
                            </span>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Daftar</button>
                </div>
            </form>
        </div>
        <div class="form-container sign-up">

            <form action="">
                <div>
                    <div style="margin-bottom: 20px; text-align: center; position: relative; top: -10px;">
                        <img src="../../../Public/Assets/Img/umi.png" alt="logo fikom" class="logo"
                            style="margin-right: 10px; width: 80px;">
                        <img src="../../../Public/Assets/Img/fikom.png" alt="" class="logo"
                            style="margin-right: 10px; width: 80px;">
                        <img src="../../../Public/Assets/Img/iclabs.png" alt="" class="logo" style="width: 80px;">
                    </div>
                    <div style="margin-bottom : 50px">
                        <h1 style="text-align: center;">Masuk</h1>
                    </div>
                    <div>
                        <div style="position: relative; width: 100%; margin-bottom: 15px;">
                            <img src="../../../Public/Assets/Img/idcard.svg" alt="ID Card Icon"
                                style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                            <input type="text" class="form-control" id="stambuk" name="stambuk" placeholder="Stambuk"
                                style="padding-left: 40px; width: 100%; height: 45px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
                        </div>

                        <div style="position: relative; width: 100%; margin-bottom: 15px;">
                            <img src="../../../Public/Assets/Img/password.svg" alt="Lock Icon"
                                style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px;">
                            <input type="password" id="passwordLogin" name="password" placeholder="Password"
                                style="padding-left: 40px; width: 100%; height: 45px; font-size: 16px; border-radius: 5px; border: 1px solid #ccc;">
                            <span
                                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                id="loginIconPass">
                                <i class="bi bi-eye-slash" id="togglePassLogin"></i>
                            </span>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Sudah punya akun?</h1>
                    <p>Silahkan login jika anda telah mempunyai akun pendaftaran calon asisten</p>
                    <button class="hidden" id="register">Masuk</button>
                </div>
                <div class="toggle-panel toggle-left">
                    <h1>Belum punya akun?</h1>

                    <p>Silahkan daftar akun untuk melanjutkan proses pendaftaran calon asisten</p>
                    <button class="hidden" id="login">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        <?php require_once("../../../Public/Assets/Script/Login/ScriptLogin.js") ?>
    
    </script>
</body>

</html>
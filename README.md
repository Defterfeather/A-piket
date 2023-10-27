
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="coba.css">
    <title>membuat login dengan php dan mysql</title><link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>
<body>         
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="height: 100vh; width:100%">
            <div class="col-md-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-body" >
                        <div class="row">
                            <form action="actionLogin.php" id="loginForm" method="POST">
                            <div class="card-header">
                                <strong>Login</strong>
                            </div>
                            <input 
                                class="form-control"
                                type="text"
                                name="username"
                                placeholder="Username"
                                autofocus
                                autocomplete="off">
                            <input 
                                class="form-control mt-3"
                                type="password"
                                name="password"
                                placeholder="Password"
                                autofocus
                                autocomplete="off">
                            <button type="sumbit" class="btn btn-primary mt-3" onclick="login()">Login</button>
                            <a href="#" class="btn btn-outline-danger mt-3" onclick="switchForms('registerForm')">Register</a>
                        </form>
                        <form action="registrasi.php" id="registerForm" style="display: none;" method="POST">
                            <div class="card-header mb-3">
                                <strong>Registrasi Akun Baru</strong>
                            </div>
                            <input 
                                class="form-control"
                                type="text"
                                name="regUsername"
                                placeholder="Username register"
                                autofocus
                                autocomplete="off">
                            <input 
                                class="form-control mt-3"
                                type="password"
                                name="regPassword"
                                placeholder="Password register"
                                autofocus
                                autocomplete="off">
                            <button type="sumbit" class="btn btn-primary mt-3" onclick="showAlert()">Register</button>
                            <a href="#" class="btn btn-outline-danger mt-3" onclick="switchForms('loginForm')">Cancel</a>
                        </form>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function register() {
            var username = document.getElementById("regUsername").value;
            var password = document.getElementById("regPassword").value;
            
            if (username && password) {
                // Tambahkan pengguna ke array
                users.push({ username: username, password: password });
                console.log("Pengguna berhasil terdaftar");
                document.getElementById("registerForm").reset();
                switchForms(); // Beralih kembali ke formulir login
            } else {
                console.log("Form harus terisi semua");
            }
        }

        function switchForms() {
            var loginForm = document.getElementById("loginForm");
            var registerForm = document.getElementById("registerForm");

            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registerForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "block";
            }
        }
    </script>
    <script>
        function showAlert(){
            swal.fire({
                        title: 'registrasi Berhasil',
                        text: 'Anda telah berhasil terdartar.',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                      }).then((result) => {
                         if(result.isConfirmed){
                         window.location.href='index.php';
                        }
                      });
        }
    </script>
  </body>
</html>

    <!-- <h1>halaman login</h1>
    <h3>ini merupakan halaman login menggunakan php dan my sql</h3>
    <form action="proses-login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
            </tr>
            <tr>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder=""></td>

            </tr>
        </table>
        <tr>
            <td>
            <input type="submit" name="login" value="masuk">
            </td>
        </tr>
    </form> -->

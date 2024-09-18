<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS (make sure you include it) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional, for the icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h1 class="mb-0"><b>Login</b></h1>
            </div>
            <div class="card-body login-card-body">
                
                <form action="../index3.html" method="post">
                    <!-- User ID -->
                    <div class="input-group mb-1">
                        <div class="form-floating"> 
                            <input id="userId" type="text" class="form-control" placeholder="User ID"> 
                            <label for="userId">User ID</label> 
                        </div>
                    </div>
                    <!-- Username -->
                    <div class="input-group mb-1">
                        <div class="form-floating"> 
                            <input id="username" type="text" class="form-control" placeholder="Username"> 
                            <label for="username">Username</label> 
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="input-group mb-1">
                        <div class="form-floating"> 
                            <input id="loginEmail" type="email" class="form-control" placeholder="Email"> 
                            <label for="loginEmail">Email</label> 
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="input-group mb-1">
                        <div class="form-floating"> 
                            <input id="loginPassword" type="password" class="form-control" placeholder="Password"> 
                            <label for="loginPassword">Password</label> 
                        </div>
                    </div>
                    <!-- Nama Lengkap -->
                    <div class="input-group mb-1">
                        <div class="form-floating"> 
                            <input id="fullName" type="text" class="form-control" placeholder="Nama Lengkap"> 
                            <label for="fullName">Nama Lengkap</label> 
                        </div>
                    </div>
                    <!-- Alamat -->
                    <div class="input-group mb-1">
                        <div class="form-floating"> 
                            <input id="address" type="text" class="form-control" placeholder="Alamat"> 
                            <label for="address">Alamat</label> 
                        </div>
                    </div>
                    <br>
                    <!-- Remember Me and Sign In Button -->
                    <div class="row">
                        <br>
                        <div>
                            <div class="d-grid gap-2"> 
                                <button type="submit" class="btn btn-primary">Sign In</button> 
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box -->

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

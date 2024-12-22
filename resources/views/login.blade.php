<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="text-center mt-5">
    <img src="../img/logo prodauk.png" width="10%">
    <br>
        <p>Silahkan masuk dengan akun yang telah dibuat</p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{route('login.submit')  }} " method="post">
                            @csrf
                            <label >Email</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label >Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Submit Login</button>
                                    
                            <div style="text-align: center;">
                            <a href="/registrasi">Create</a>
                            <span> or </span>
                            <a href="/#">Reset Pasword</a>
                            </div>

               </form>

                        @if(session('gagal'))
                        <p class="text-danger">{{ session('gagal') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

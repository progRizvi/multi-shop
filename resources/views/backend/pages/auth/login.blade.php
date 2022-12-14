<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('css/vertical-layout-light/style.css') }}">
    @notifyCss

    <style>
        .notify {
            z-index: 1000000000;
            margin-top: 2%;
        }
    </style>
</head>

<body>


    <section class="vh-100">
        <div class="container-fluid h-custom">
            <x:notify-messages />
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf


                        <div
                            class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mt-5">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg"
                                value="admin@gmail.com" placeholder="Enter a valid email address" name="email" />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg" value="rizvi"
                                name="password" placeholder="Enter password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('register.show') }}" class="link-danger">Register</a></p>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <button class="btn btn-primary" id="seller" type="button">Seller</button>
                        <button class="btn btn-warning" id="user" type="button">User</button>
                        <button class="btn btn-warning" id="admin" type="button">Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        const email = document.getElementById("email")
        const pass = document.getElementById("password")
        const sellerBtn = document.getElementById("seller")
        const userBtn = document.getElementById("user")
        const adminBtn = document.getElementById("admin")

        function event(a, b) {
            email.value = a
            pass.value = b
        }
        sellerBtn.addEventListener("click", () => event("seller@gmail.com", "seller"))
        user.addEventListener("click", () => event("user@gmail.com", "user"))
        admin.addEventListener("click", () => event("admin@gmail.com", "rizvi"))
    </script>
    @notifyJs
</body>

</html>

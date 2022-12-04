<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://colorlib.com/etc/regform/colorlib-regform-17/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-17/css/style.css">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="wrapper"
        style="background-image: url('https://colorlib.com/etc/regform/colorlib-regform-17/images/bg-registration-form-1.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="https://colorlib.com/etc/regform/colorlib-regform-17/images/registration-form-1.jpg"
                    alt="">
            </div>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <h3>Registration Form</h3>
                <div class="form-group">
                    <input type="text" placeholder="First Name" class="form-control" autocomplete="false"
                        name="firstName" id="FirstName">
                    <input type="text" placeholder="Last Name" class="form-control" autocomplete="false"
                        name="lastName" id="LastName">
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" class="form-control" name="userName">
                    <i class="zmdi zmdi-account" id="userName"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Email Address" class="form-control" autocomplete="false"
                        name="email" id="email">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <select id="" class="form-control" name="gender">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="femal">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <select id="" class="form-control" name="role">
                        <option value="" disabled selected>Role</option>
                        <option value="user">User</option>
                        <option value="seller">Seller</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Password" class="form-control" autocomplete="false"
                        name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" class="form-control"
                        name="password_confirmation">
                    <i class="zmdi zmdi-lock"></i>
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <button>Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
                <div class="mt-5"><a class="mt-5" href="{{ route('login.show') }}">Already Have Account? Login</a>
                </div>
            </form>
        </div>
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"769608967f32ba5b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>

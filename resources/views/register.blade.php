<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Register || TechMarket</title>
    <style>
        .body {
            font-family: "Poppins", sans-serif;
        }

        .orange {
            background: linear-gradient(to bottom, #f07a3c, #000000);
        }

        .backgroundTech {
            background-image: url("/img/background-forms.png");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100%;
        }

        .centerForms {
            width: 100%;
            height: 100vh;
        }

        .signupContainer {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .signupContainer h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-form {
            height: auto;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .brand-logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="orange">
    <div class="backgroundTech">
        <div class="container-fluid signup-container">
            <div class="row w-100 centerForms">
                <!-- left side -->
                <div class="col-md-6 brand-logo">
                    <img src="img/side-logo.png" alt="side-logo" />
                </div>
                <!-- right side -->
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="signup-form pb-md-1">
                        <h2 class="text-center">Create Account</h2>
                        <form action="{{ url('users/register') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control rounded-3"
                                    id="usernameFloatingInput" placeholder="name@example.com" />
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control rounded-3"
                                    id="emailFloatingInput" placeholder="name@example.com" />
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control rounded-3"
                                    id="floatingPassword" placeholder="Password" />
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary signup" type="submit">
                                Sign up
                            </button>
                            <small class="my-lg-3">
                                <a href="/login">Already have an account?</a>
                            </small>
                            <br>
                            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of
                                use.</small>
                            <hr class="my-4" />
                            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                                <svg class="bi me-1" width="16" height="16">
                                    <use xlink:href="#twitter"></use>
                                </svg>
                                Sign up with Facebook
                            </button>
                            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                                <svg class="bi me-1" width="16" height="16">
                                    <use xlink:href="#facebook"></use>
                                </svg>
                                Sign up with Google
                            </button>
                            <p class="d-flex justify-content-center m-lg-4 m-md-2 text-body-secondary">
                                By Gamers for Gamers.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/Public/scripts/redirect.js"></script>
    <!-- <script src="/Public/scripts/auth.js"></script> -->
</body>

</html>

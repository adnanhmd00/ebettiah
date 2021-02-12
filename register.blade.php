<!DOCTYPE html>
<html>
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js	"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
<link rel="stylesheet" href="assets/css/category-header.css">
<link rel="stylesheet" href="assets/css/slick-slide.css">


<style>
</style>
</head>
<body>

<p class="text-center">e Bettiah</p>
    <div class="col d-flex justify-content-center" style="margin-top: 30px;">
        <div style="width: 350px;" class="card">
            <div class="p-4">
                <h4 class="text-left">Create Account</h4>

                <form action="" method="POST">
                    <div class="form-group m-0">
                        <label class="mb-0" for=""><strong class="text-left small-font">Your Name</strong></label>
                        <input type="text" class="form-control placeholder form-control-sm" placeholder="Enter Your Name">
                    </div>

                    <div class="form-group m-0">
                        <label class="mb-0" for=""><strong class="text-left small-font">Mobile Number</strong></label>
                        <input type="text" class="form-control placeholder form-control-sm" placeholder="Enter Mobile Number">
                    </div>

                    <div class="form-group m-0">
                        <label class="mb-0" for=""><strong class="text-left small-font">Email(Optional)</strong></label>
                        <input type="text" class="form-control placeholder form-control-sm" placeholder="Enter Your Email-Id">
                    </div>

                    <div class="form-group m-0">
                        <label class="mb-0" for=""><strong class="text-left small-font">Password</strong></label>
                        <input type="password" class="form-control placeholder form-control-sm" placeholder="Password">
                    </div>

                    <div class="form-group m-0">
                        <label class="mb-0" for=""><strong class="text-left small-font">Confirm Password</strong></label>
                        <input type="password" class="form-control placeholder form-control-sm" placeholder="Confirm Password">
                    </div>

                    <div class="form-group mt-2">
                        <button class="btn btn-outline-danger btn-sm btn-block">Register</button>
                    </div>

                    <p class="small-font text-left">By continuing, you agree to our <a class="brown link" href="">Terms & Conditions</a> and <a class="brown link" href="">Privacy Policy</a>.</p>
                </form>
            </div>
        </div>
    </div>
    <div class="col d-flex justify-content-center">
        <div class="hr-text text-secondary text-center">
            <span style="font-size: 12px; background-color: #fff; padding: 0 10px;">
                Already have an account? <!--Padding is optional-->
            </span>
        </div>
    </div>

    <div class="col mt-4 d-flex justify-content-center">
        <a style="width: 350px;" href="{{ route('/login') }}" class="btn simple-btn btn-sm">Login</a>
    </div>
</body>
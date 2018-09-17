<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HK | Login</title>

    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

    <style>
        .background-image {
            background: url("img/back.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body class="background-image">

<div class="middle-box text-center loginscreen animated fadeInDown" style="margin-top: 100px;">
    <div>
        <div>
            <img src="/img/Dentaa3.png" width="650px" class="img-responsive" alt="">
        </div>
        <h3>Welcome to HK|Clinic</h3>
        <form class="m-t" role="form" action="/dash">
            <div class="form-group">
                <select class="form-control" required>
                    <option value="">Select Your Position</option>
                    <option value="1">Doctor</option>
                    <option value="2">Receptionist</option>
                    <option value="3">Finance</option>
                    <option value="4">Admin</option>
                    <option value="5">other</option>
                </select>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-success block full-width m-b">Login</button>

            <a href="#">
                <small>Forgot password?</small>
            </a>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
</html>

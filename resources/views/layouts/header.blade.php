
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}">
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'.tinymce' });</script>
</head>
<body>
    <!--header starts here-->
    <header class="col-md-12">
        <div class="container">
            <div class="col-md-3" >
                <img src="assets/images/logo.png" style="margin:15px 0px 5px 0px; float:left">
            </div>
            <div class="col-md-2 col-md-offset-6">
                <a href="{{url('logout')}}" class="logoutbtn">Logout</a>
            </div>
        </div>
    </header>
    <!--header ends here-->

    <!--col-md-12 starts here-->
    <div class="col-md-12" style="background:#1C5978"> 
        <!--container starts here-->
        <div class="container">
            <div class="col-md-3">
                <p style="color:white; font-weight:bold; font-family:arial; font-size:12px; margin:7px 0px; float:left; letter-spacing:1; word-spacing:3">Friday, 8th June 2012</p>
            </div>
        </div>
        <!--container ends here-->
    </div>
    <!--col-md-12 ends here-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="navbarst">
    <nav class="navbar navbar-expand-lg" style="background-color:#280033 ;">
        <div class="container-fluid"> <div data-aos="fade-right" class="aos-init aos-animate">
                <div data-aos="fade-right" data-aos-duration="1000" class="aos-init aos-animate">
                    <!-- RING ICON -->
                    <img src="img/icon.ico" width="40" height="35"> </div>
            </div>
            <button onclick="audiolist.play();" class="navbar-toggler rotateicon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon rotateicon"><div class="rotateicon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></div></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <!-- NAVBAR CHOOSE MENU -->
                <div data-aos="fade-right" data-aos-duration="1000" class="aos-init aos-animate">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="index.html"> <i class="fa fa-shield" aria-hidden="true"></i> Kingdoms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author.html"> <i class="fa fa-book" aria-hidden="true"></i> Author</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="our_team.html"><i class="fa fa-users" aria-hidden="true"></i> Our Team</a>
                    </li>
                </ul>
            </div>
        </div></nav>
</div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aliquid architecto consequatur delectus dolorum eius eligendi esse fugiat in laboriosam laudantium modi numquam odit quas quidem reprehenderit, repudiandae suscipit ut.</p>
</body>
</html>

@yield('main_content')

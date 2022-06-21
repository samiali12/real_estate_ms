<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{url('frontend/css/user-dashboard.css')}}">
</head>
<body>

    <section class="menu">

        <div class="logo">
            <h2>Eco Green</h2>
        </div>

        <div class="items">
            <li> <i class="fa-solid fa-chart-pie"></i><a href="">Dashboard</a></li>
            <li> <i class="fa-solid fa-user"></i><a href="">Profile</a></li>
        </div>
    </section>

    <div class="interface">

        <div class="navigation">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="search_bar">
                </div>
                <div class="profile">
                    <i class="fa-solid fa-bell"></i>
                    <img src="{{url('frontend/img/profile.jpg')}}" alt="profile-image">
                </div>
        </div>
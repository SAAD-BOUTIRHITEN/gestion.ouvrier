<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dalia Food</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Josefin Sans', sans-serif;
            box-sizing: border-box;
        }

        .hero {
            height: 100vh;
            width: 100%;
            background: url("/assets/images/d11.jpg");
            background-image: url("/assets/images/dd1.jpg");
            background-size: cover;
            background-position: center;

        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: -2px;
            padding-left: 18%;
            padding-right: 8%;

        }

        .logo {
            padding-top: 0px;
            padding-left: 31px;
            color: aliceblue;
            font-size: 35px;
            letter-spacing: 1px;
            cursor: pointer;
        }


        span {
            color: #f9004d;
        }

        nav ul li {
            list-style-type: none;
            display: inline-block;
            padding: 4px 35px;

        }

        nav ul li a {
            color: antiquewhite;
            text-decoration: none;
            font-weight: bold;
            text-transform: capitalize;
        }

        nav ul li a:hover {
            color: #f9004d;
            transition: .4s;
        }

        .btn {
            background-color: #f9004d;
            color: aliceblue;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 30px;
            transition: transform .4s;

        }

        .btn:hover {
            transform: scale(1.2);
        }

        .content {
            position: absolute;
            top: 50%;
            left: 8%;
            transform: translateY(-50%);

        }






        .news form {
            position: relative;
            width: 380px;
            max-width: 100%;

        }

        .news form input:first-child {
            display: inline-block;
            width: 100%;
            padding: 14px 130px 14px 15px;
            border: 2px solid #f9004d;
            outline: none;
            border-radius: 30px;
            margin-top: 220px;
        }

        .news form input:last-child {
            position: absolute;
            display: inline-block;
            border: none;
            outline: none;
            padding: 10px 30px;
            border-radius: 30px;
            background-color: #f9004d;
            color: aliceblue;
            box-shadow: 0px 0px 5px #000, 0px 0px 15px #f9004d;
            top: 225px;
            right: 6px;
        }

        .about {
            width: 100%;
            padding: 100px 0px;
            background-color: rgb(255, 255, 255);
        }

        img {
            height: auto;
            width: 430px;

        }

        .about2 {
            width: 550px;

        }

        .main {
            width: 1130px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .about2 h2 {
            color: rgb(0, 0, 0);
            font-size: 75px;
            text-transform: capitalize;
            margin-bottom: 20px;

        }

        .about2 h5 {
            color: rgb(5, 5, 5);
            letter-spacing: 2px;
            font-size: 22px;
            margin-bottom: 25px;
            text-transform: capitalize;
        }

        .about2 p {
            color: rgba(172, 4, 172, 0.8);
            font-size: 18px;
            margin-bottom: 45px;
            letter-spacing: 1px;
            line-height: 28px;

        }

        .buton {
            background-color: #f9004d;
            color: #fff;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 13px 30px;
            border-radius: 30px;
            transition: .4s;
        }

        .buton:hover {
            background-color: transparent;
            border: 2px solid #f9004d;
            cursor: pointer;
        }

        .service {
            background: url(d3.jpg);
            width: 100%;
            padding: 100px 0px;
        }

        .hh {
            color: #000;
        }

        .title {
            color: rgb(60, 39, 39);
            font-size: 75px;
            width: 1130px;
            margin: 30px auto;
            text-align: center;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            height: 365px;
            width: 335px;
            padding: 20px 35px;
            background: #fff;
            border-radius: 20px;
            margin: 15px;
            text-align: center;
        }

        .card i {
            font-size: 35px;
            display: block;
            text-align: center;
            margin: 25px 0px;
            color: #f9004d;
        }

        .a1 {
            color: aqua;
            font-size: 23px;
            margin-bottom: 15px;
            text-transform: capitalize;
        }

        .pra {
            color: rgba(0, 110, 174, 0.8);
            font-size: 16px;
            line-height: 23px;
            margin-bottom: 15px;
        }

        .button {
            text-align: center;
            background-color: #f9004d;
            color: rgb(255, 255, 255);
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 30px;
            transition: transform .4s;
        }

        .button1 {
            text-align: center;
            background-color: #f9004d;
            color: rgb(255, 255, 255);
            text-decoration: none;

            border: 2px solid transparent;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 30px;
            transition: transform .4s;
        }

        .button:hover {
            background-color: red;
            border: 2px solid #f9004d;
            cursor: pointer;
        }



        .contact {
            width: 100%;
            height: 290px;
            background: rgb(244, 243, 240);
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .contact p {
            color: rgb(0, 0, 0);
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .contact2 {
            background-color: #f9004d;
            color: aliceblue;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 10px 25px;

            border-radius: 30px;
            transition: transform .4s;
        }

        .contact2:hover {
            background-color: transparent;
            border: 2px solid #f9004d;
            cursor: pointer;
        }

        footer {
            position: relative;
            width: 100%;
            height: 400px;
            background: rgb(244, 243, 240);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        footer p:first-child {
            font-size: 30px;
            color: rgb(246, 0, 0);
            font-weight: bold;
            margin-bottom: 20px;
        }

        .aa1 {
            font-size: 35px;
            display: block;
            text-align: center;
            margin: 25px 0px;
            color: #f9004d;
        }

        .ama {
            color: rgb(0, 0, 0);
            font-size: 17px;
            width: 500px;
            text-align: center;
            letter-spacing: 4px;
        }

        .social a {
            display: inline-flex;
            width: 45px;
            height: 45px;
            align-items: center;
            justify-content: center;
            background: #f9004d;
            border-radius: 50%;
            margin: 22px 10px;
            text-decoration: none;
            color: #fff;
        }

        #mo {
            font-size: 22px;
            color: rgb(0, 0, 0);
        }

        .copy {
            margin-top: 34px;
            color: #f9004d;
            letter-spacing: 2px;
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <!--  <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
@else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
                @endauth
            </div>
        @endif


    </div>-->
    <div class="hero">
        <h2 class="logo">Dal<span>ia</span></h2>
        <nav>
            <ul>
                <li> <a href="#">Home</a></li>
                <li> <a href="#">Product</a></li>
                <li> <a href="#">Service</a></li>
                <li> <a href="#">statement</a></li>
                <li> <a href="#">Contact</a></li>
            </ul>
            <a href="{{ route('login') }}" class="btn">Login</a>
        </nav>
        <div class="content">



            <div class="news">
                <form>
                    <input type="email" id="mail" placeholder="Entrer Le Email">
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>

    <section class="about">
        <div class="main">
            <img src="/assets/images/d2.jpg" alt="">
            <div class="about2">
                <h2>Our mission</h2>
                <h5>Dalia <span> && Morocco</span></h5>
                <p> Satisfaire les besoins et attentes des consommateurs, distributeurs,
                    boulangeries et industries alimentaires en produits dérivés de céréales.

                    Pour cela, une organisation spécifique a été mise en place et notamment au niveau de
                    la distribution avec une force de vente dédiée à chaque canal de distribution : Grossistes, GMS,
                    industriels et Boulangeries et ainsi qu’une équipe dédiée à l’international.</p>
                <button class="buton">Check</button>
            </div>
        </div>
    </section>
    <div class="service">
        <h2 class="title"> <span style="color: red;">Our</span>Products</h2>
        <div class="box">
            <div class="card">
                <i class="fa-solid fa-wheat-awn"></i>
                <h5 class="a1">Farines & semoules</h5>

                <p class="pra">Les farines et semoules Dalia, idéales pour toutes vos recettes !.
                    Une gamme large de farines et semoules pour
                    préparer toutes sortes de plats : pains, gâteaux, pâtisseries, ….</p>

                <a class="button" href="#">Read More</a>
            </div>

            <div class="card">
                <i class="fa-solid fa-bowl-rice"></i>
                <h5 class="a1">Couscous</h5>

                <p class="pra">Au Maroc, plusieurs recettes existent, du couscous aux fruits secs au couscous au
                    poisson
                    en passant
                    par le fameux couscous aux 7 légumes. Ce dernier est très certainement le couscous...
                </p>

                <a class="button" href="#">Read More</a>

            </div>

            <div class="card">
                <i class="fa-solid fa-bacon"></i>
                <h5 class="a1">Les Pates</h5>

                <p class="pra">Les pates Dalia sont fabriquées, à base de 100% de semoules
                    de blé dur avec une technique italienne,
                    qui leur donne cette
                    saveur et ce goût si particuliers Les pates Dalia sont original au maroc .</p>

                <a class="button1" href="#">Read More</a>
            </div>

        </div>
    </div>
    <div class="contact">
        <p>D'ont forget contact </p>
        <a href="#" class="contact2">Here</a>
    </div>
    <footer>
        <p>Dalia Food</p>
        <div class="aa1"><i class="fa-solid fa-location-pin-lock"></i></div>

        <p class="ama">Dalia corp. Lot 46,
            Zone Industrielle Du Sahel,
            HAD SOUALEM Province De Settat, Casablanca-maroc</p>
        <div class="social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-solid fa-phone"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <p class="copy"><span id="mo">&copy;</span>2022-dalia - tous droits réservés - réalisé par SAAD
            BOUTIRHITEN </p>
    </footer>
</body>

</html>

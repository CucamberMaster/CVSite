<!DOCTYPE html>
<html>
<head>
    <title>Witaj na Stronie ogóra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./resources/css/app.css">
    <link rel="stylesheet" href="./resources/css/style.scss">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        #hrefsDecoration
        {
            text-decoration: 0px;
            color: white;
        }
    </style>
</head>
<body>

    <nav class=" navbar navbar-dark bg-dark  text-center sticky-top text-white" id="navBar">
        <div class="container d-flex  pb-2 h4 pt-2" >
        <div class="container" style="word-spacing: 20vh">
            <a href="{{route('index.index')}}" id="hrefsDecoration">Home</a>
            <a href="{{route('faq.index')}}" id="hrefsDecoration">
                FAQ
            </a>
            <a href="{{route('cv.index')}}" id="hrefsDecoration">
                CV
            </a>
            <a href="{{route('projects.index')}}" id="hrefsDecoration">
               Projects
            </a>
        </div>


        </div>

    </nav>



<div style="background-color: #1c1c1c; height: 100vh" class="container-fluid border border-dark border-1  shadow-lg">
    <div class="row p-5">
        <div class="container-fluid border border-1 rounded-3 shadow-lg" style="background-color: #131313; width: 100vh; height: 71.45vh">
    @yield('content')
        </div>
        </div>
    <div class="text-center justify-content-center h1 text-white " id="footer">
        &copy 2022 All rights reserved:
        <a >Kacper Ogórkiewicz</a>
    </div>

</div>
<style>

    #footer{
        letter-spacing: 3px;
    }
</style>
</body>
</html>

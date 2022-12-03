<!DOCTYPE html>
<html>
<head>
    <title>Witaj na Stronie ogóra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="./resources/css/style.scss">


</head>
<body>

    <nav class=" navbar navbar-dark bg-dark  text-center sticky-top text-white" id="navBar">
        <div class="container d-flex  pb-2 h4 pt-2" >
        <div class="container col-md-12 col-sm-6" style="word-spacing: 20vh">
            <a href="{{route('index.index')}}" id="hrefsDecoration" class="
           col col-md-6 col-lg-6 col-sm-6">Home</a>
            <a href="{{route('faq.index')}}" id="hrefsDecoration" class=" col col-sm-6">
                FAQ
            </a>
            <a href="{{route('cv.index')}}" id="hrefsDecoration" class="  col col-sm-6">
                CV
            </a>
            <a href="{{route('projects.index')}}" id="hrefsDecoration" class="  col col-sm-6">
               Projects
            </a>
        </div>


        </div>

    </nav>



<div style="background-color: #1c1c1c; height: 100vh" class="container-fluid border border-dark border-1  shadow-lg">
    <div class="row p-5">
        <div class="container-fluid border border-1 rounded-3 box shadow-lg" style="background-color: #131313; ">
    @yield('content')
        </div>
        </div>
    <div class="text-center justify-content-center h1 text-white " id="footer">
        &copy 2022 All rights reserved:
        <a >Kacper Ogórkiewicz</a>
    </div>

</div>
    <script src="/js/app.js"></script>
</body>
</html>

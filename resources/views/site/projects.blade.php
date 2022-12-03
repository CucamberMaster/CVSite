@extends('site.layout')

@section('content')
    <div class="container">
        <div class="text-center h1 text-white mt-2 bold  mb-4">
            This is all my Projects
        </div>
        <div class="flex-row  align-items-center d-flex justify-content-center media-content" style="
    margin-left: 8vh; margin-top: 5vh;
"
        >
            <div class=" col-md-3 col-sm-6">
                <a href="https://github.com/CucamberMaster/Discord-BOT/tree/master">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="128"
                         height="128"
                         fill="currentColor"
                         class="bi bi-github"
                         viewBox="0 0 16 16"
                    >
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
                <a class="h1 text-white" style="text-decoration: 0px; " href="https://github.com/CucamberMaster/Discord-BOT/tree/master">
                    Discord <p style="margin-left: 3.2vh;"> BOT</p>
                </a>
            </div>
            <
            <div class=" col-md-3 col-sm-6" style="margin-right: 2vh">
                <a href= "https://github.com/CucamberMaster/Discord-BOT/tree/master">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="128"
                         height="128"
                         fill="currentColor"
                         class="bi bi-github"
                         viewBox="0 0 16 16"
                    >
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
                <a class="h1 text-white" style="text-decoration: 0px;"   href= "{{route('index.index')}}">
                    Cucamber <p style="margin-left: 2.2vh;"> SITE</p>
                </a>
            </div>
            <div class=" col-md-3 col-sm-6">
                <a href="https://github.com/CucamberMaster/LaravelShop">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="128"
                         height="128"
                         fill="currentColor"
                         class="bi bi-github"
                         viewBox="0 0 16 16"
                    >
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
                <a class="h1 text-white" style="text-decoration: 0px;" href="https://github.com/CucamberMaster/LaravelShop" >
                    Laravel <p style="margin-left: 1.2vh;"> SHOP</p>
                </a>
            </div>
            <div class=" col-md-3 col-sm-6">

                <a href="{{route('toDoList.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="128"
                         height="128"
                         fill="currentColor"
                         class="bi bi-github"
                         viewBox="0 0 16 16"
                    >
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
                <a class="h1 text-white" style="text-decoration: 0px;" href="{{route('toDoList.index')}}" >
                    TODO <p style="margin-left: 1vh;"> LIST</p>
                </a>
            </div>
        </div>
    </div>

@endsection()

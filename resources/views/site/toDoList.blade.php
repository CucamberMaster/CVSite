@extends('site.layout')

@section('content')


    <h1 class="text-center mt-5 text-bold text-white ">
        TO DO LIST
    </h1>

    <div class="container-fluid text-center mt-4 text-white" style="height: fit-content;">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <h3 id="dangerous" >To DO


                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="50"
                                 height="50"
                                 fill="currentColor"
                                 class="bi bi-plus icon"
                                 viewBox="0 0 16 16"
                                 id="createToDo"


                            >
                                <path id="1" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z " />
                            </svg>

                    </h3>
                </div>
                <div class="container mt-4 toDo">
                    <div class="toBox">
1
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h3 id="progress">In Progres
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="50"
                             height="50"
                             fill="currentColor"
                             class="bi bi-plus icon"
                             viewBox="0 0 16 16"
                             id="createProgress"

                        >
                            <path  id="2" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </h3>
                </div>
                <div class="container mt-4 inProgress">
                    <div class="toBox">
2
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h3 id="Finished" >Finished
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="50"
                             height="50"
                             fill="currentColor"
                             class="bi bi-plus icon"
                             viewBox="0 0 16 16"
                             id="createFinished"

                        >
                            <path  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </h3>
                </div>
                <div class="container mt-4 Finished">
                    <div class="toBox">
3
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

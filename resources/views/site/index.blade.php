@extends('site.layout')
@section('content')
    <div class="justify-content-center ">
        <div class="text-white d-flex justify-content-center mt-5 pt-5">
            <div class="mt-5">
                <div class="" id="higherPump">
                    <div id="pump" title="Kacper Ogórkiewcz">Kacper Ogórkiewcz</div>
                </div>
                <div id="iS">
                    <span id="I">I</span>
                    <span id="S">S</span>
                </div>
                <div id="lowerPump">
                    Full - Stack Developer
                </div>
                <style>
                    :root {
                        --white: #f1f1f1
                    }

                    #iS {
                        letter-spacing: 2.5vh;
                        font-size: 60px;
                        margin-left: 32vh;
                        margin-top: 2vh;
                    }

                    #I {
                        opacity: 1;
                        animation: flickerI 2s linear reverse infinite;
                    }

                    #I::after {
                        content: '';
                        width: 150%;
                        -webkit-box-shadow: -35px 0px 60px 8px rgba(255, 255, 255, 1);
                        -moz-box-shadow: -35px 0px 60px 8px rgba(255, 255, 255, 1);
                        box-shadow: -35px 0px 60px 8px rgba(255, 255, 255, 1);
                    }

                    @keyframes flickerI {
                        0% {
                            opacity: 0.4;
                        }
                        5% {
                            opacity: 0.5;
                        }
                        10% {
                            opacity: 0.6;
                        }
                        15% {
                            opacity: 0.85;
                        }
                        25% {
                            opacity: 0.5;
                        }
                        30% {
                            opacity: 1;
                        }
                        35% {
                            opacity: 0.1;
                        }
                        40% {
                            opacity: 0.25;
                        }
                        45% {
                            opacity: 0.5;
                        }
                        60% {
                            opacity: 1;
                        }
                        70% {
                            opacity: 0.85;
                        }
                        80% {
                            opacity: 0.4;
                        }
                        90% {
                            opacity: 0.5;
                        }
                        100% {
                            opacity: 1;
                        }
                    }

                    #S {
                        opacity: 1;
                        animation: flickerI 2s linear reverse infinite;
                    }

                    #S::after {
                        content: '';
                        width: 150%;
                        -webkit-box-shadow: -35px 0px 60px 8px rgba(255, 255, 255, 1);
                        -moz-box-shadow: -35px 0px 60px 8px rgba(255, 255, 255, 1);
                        box-shadow: -35px 0px 60px 8px rgba(255, 255, 255, 1);
                    }

                    @keyframes flickerS {
                        0% {
                            opacity: 0.4;
                        }
                        5% {
                            opacity: 0.5;
                        }
                        10% {
                            opacity: 0.6;
                        }
                        15% {
                            opacity: 0.85;
                        }
                        25% {
                            opacity: 0.5;
                        }
                        30% {
                            opacity: 1;
                        }
                        35% {
                            opacity: 0.1;
                        }
                        40% {
                            opacity: 0.25;
                        }
                        45% {
                            opacity: 0.5;
                        }
                        60% {
                            opacity: 1;
                        }
                        70% {
                            opacity: 0.85;
                        }
                        80% {
                            opacity: 0.4;
                        }
                        90% {
                            opacity: 0.5;
                        }
                        100% {
                            opacity: 1;
                        }
                    }


                    #lowerPump {
                        background: #131313;
                        color: #fff;
                        font-size: 40px;
                        font-family: 'Fira Mono', monospace;
                        letter-spacing: 5px;
                        margin-top: 5vh;
                        margin-left: 12vh;
                    }

                    #higherPump {
                        margin-left: 20px;
                        background: #131313;
                        color: #fff;
                        font-size: 96px;
                        font-family: 'Fira Mono', monospace;
                        letter-spacing: -7px;
                    }

                    #pump {
                        animation: glitch 1s linear infinite;
                    }

                    @keyframes glitch {
                        2%, 64% {
                            transform: translate(2px, 0) skew(0deg);
                        }
                        4%, 60% {
                            transform: translate(-2px, 0) skew(0deg);
                        }
                        62% {
                            transform: translate(0, 0) skew(5deg);
                        }
                    }

                    div:before,
                    div:after {
                        content: attr(title);
                        position: absolute;
                        left: 0;
                    }

                    div:before {
                        animation: glitchTop 1s linear infinite;
                        clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
                        -webkit-clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
                    }

                    @keyframes glitchTop {
                        2%, 64% {
                            transform: translate(2px, -2px);
                        }
                        4%, 60% {
                            transform: translate(-2px, 2px);
                        }
                        62% {
                            transform: translate(13px, -1px) skew(-13deg);
                        }
                    }

                    div:after {
                        animation: glitchBotom 1.5s linear infinite;
                        clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
                        -webkit-clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
                    }

                    @keyframes glitchBotom {
                        2%, 64% {
                            transform: translate(-2px, 0);
                        }
                        4%, 60% {
                            transform: translate(-2px, 0);
                        }
                        62% {
                            transform: translate(-22px, 5px) skew(21deg);
                        }
                    }
                </style>
            </div>
        </div>
    </div>
@endsection

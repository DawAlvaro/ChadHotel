@extends('template.auth')
@section('title', 'Login')
@section('content')
<style>
        #btn_submit {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        #btn_submit.isLoading {
            width: 50px;
            border-radius: 100vw;
        }

        .hide {
            display: none;
        }

        #square1, #square2{
            stroke:yellow;
            stroke-opacity:1;
            animation: animateh 6s alternate infinite;
        }

        #star, #star2, #star3{
            stroke: yellow;
            stroke-dasharray:23 ;
            fill: transparent;
            stroke-dashoffset: 23 ;
            animation: animatestar 6s linear forwards infinite;
        }

        @keyframes  animatestar{
            0% {
                stroke-dashoffset: 0;
            }
            40% {
                stroke-dashoffset: 23;
            }
            80%{
                stroke-dashoffset: 46;
                fill: transparent;
            }
            100%{
                stroke-dashoffset: 46;
                fill: yellow;
            }

        }

        @keyframes animateh {
            0% {
                stroke-opacity:1;
            }
            40%{
                stroke-opacity: 0;
            }
            80%{
                stroke-opacity: 1;
            }
            100%{
                stroke-opacity:0;
            }
        }

        .bg-video{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .bg-video video{
            min-width: 100%;
            min-height:100%; 
        }

    </style>

    
    <link href="{{ asset('style/css/stylelogin.css') }}" rel="stylesheet">
    <div class="bg-video">
        <video src="{{ asset('video/videologin1.mp4')}}" autoplay loop></video>
    </div>

    <div class="bg-overlay"></div>

    <div class="container">
        <div class="row vertical-center">
            <div class="col-lg-5 col-md-8 col-sm-12  mx-auto" style="z-index: 1">
                <div class="glassmorphism card-signin my-5">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                                    <!-- Created with Inkscape (http://www.inkscape.org/) -->

                                    <svg
                                    version="1.1"
                                    id="svg9"
                                    width="150"
                                    height="150"
                                    viewBox="0 0 39.383575 42.099583"
                                    sodipodi:docname="logo.svg"
                                    inkscape:version="1.2 (dc2aedaf03, 2022-05-15)"
                                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:svg="http://www.w3.org/2000/svg">
                                    <defs
                                        id="defs13" />
                                    <sodipodi:namedview
                                        id="namedview11"
                                        pagecolor="#ffffff"
                                        bordercolor="yellow"
                                        borderopacity="0.25"
                                        inkscape:showpageshadow="2"
                                        inkscape:pageopacity="0.0"
                                        inkscape:pagecheckerboard="0"
                                        inkscape:deskcolor="#d1d1d1"
                                        showgrid="false"
                                        inkscape:zoom="8.8478261"
                                        inkscape:cx="7.9115479"
                                        inkscape:cy="24.977887"
                                        inkscape:window-width="1920"
                                        inkscape:window-height="1017"
                                        inkscape:window-x="-8"
                                        inkscape:window-y="-8"
                                        inkscape:window-maximized="1"
                                        inkscape:current-layer="g15" />
                                    <g
                                        inkscape:groupmode="layer"
                                        inkscape:label="Image"
                                        id="g15"
                                        transform="translate(-46.122037,-60.186908)">
                                        <g
                                        id="g1213"
                                        transform="translate(-12.627155,-2.0778863)">
                                        <path
                                            style="fill:none;stroke:yellow;stroke-width:1.1;stroke-dasharray:none;stroke-opacity:1"
                                            d="m 91.826589,103.81439 4.715203,-0.15983 1.038943,-1.2787 -0.399593,-38.440898 -1.438537,-1.118862 -34.684717,0.239756 -1.678292,1.598374 -0.07992,37.64171 1.438537,1.43854 27.332196,0.0799"
                                            id="path334" />
                                        <path
                                            style="fill:none;stroke-width:1.1;stroke-dasharray:none;"
                                            d="m 68.889922,71.44732 c -0.07992,-3.516423 0.559431,-3.756179 0.559431,-3.756179 0,0 2.108398,-1.12709 3.116829,-0.559431 1.417939,0.798176 1.278699,2.47748 1.198781,3.036911 -0.07992,0.559431 -0.07992,5.434472 -0.07992,5.434472 l 9.350488,0.07992 c 0,0 -0.319675,-5.674228 0,-7.272602 0.319675,-1.598374 2.717236,-1.438536 2.717236,-1.438536 0,0 0.959024,0 1.518455,1.19878 0.559431,1.198781 0.159837,19.819838 0.159837,19.819838 0,0 -1.118861,1.438538 -1.918048,1.2787 -1.275718,-0.255144 -2.557399,-1.358618 -2.557399,-2.077886 0,-0.719269 -0.159837,-7.512359 -0.159837,-7.512359 l -9.350488,0.239757 -0.07992,7.99187 c 0,0 -0.319675,1.358618 -2.237724,1.278699 -1.918049,-0.07992 -1.918049,-0.799187 -2.077886,-1.997967 C 68.88992,85.992526 68.88992,74.484233 68.88992,74.484233"
                                            id="square1"
                                            sodipodi:nodetypes="ccssccscscsscccssc" />
                                        <path
                                            style="fill:none;stroke:yellow;stroke-width:1.1;stroke-dasharray:none;stroke-opacity:1"
                                            d="m 59.77919,92.545858 37.322034,0.07992"
                                            id="square3" />
                                        <path
                                            sodipodi:type="star"
                                            style="stroke-width:1.1;stroke-opacity:1"
                                            id="star"
                                            inkscape:flatsided="false"
                                            sodipodi:sides="5"
                                            sodipodi:cx="66.33252"
                                            sodipodi:cy="95.34301"
                                            sodipodi:r1="3.4141285"
                                            sodipodi:r2="1.7070642"
                                            sodipodi:arg1="-0.35877067"
                                            sodipodi:arg2="0.26954786"
                                            inkscape:rounded="0"
                                            inkscape:randomized="0"
                                            d="m 69.529268,94.144229 -1.551324,1.653365 0.482533,2.215261 -2.051828,-0.964479 -1.957728,1.143469 0.283225,-2.249445 -1.692476,-1.508558 2.226871,-0.425754 0.91172,-2.07581 1.093057,1.986314 z"
                                            inkscape:transform-center-x="0.04705048"
                                            inkscape:transform-center-y="-0.28094823"
                                            transform="translate(2.7971546,2.7971546)" />
                                        <path
                                            sodipodi:type="star"
                                            style="stroke-width:1.1;stroke-opacity:1"
                                            id="star2"
                                            inkscape:flatsided="false"
                                            sodipodi:sides="5"
                                            sodipodi:cx="66.33252"
                                            sodipodi:cy="95.34301"
                                            sodipodi:r1="3.4141285"
                                            sodipodi:r2="1.7070642"
                                            sodipodi:arg1="-0.35877067"
                                            sodipodi:arg2="0.26954786"
                                            inkscape:rounded="0"
                                            inkscape:randomized="0"
                                            d="m 69.529268,94.144229 -1.551324,1.653365 0.482533,2.215261 -2.051828,-0.964479 -1.957728,1.143469 0.283225,-2.249445 -1.692476,-1.508558 2.226871,-0.425754 0.91172,-2.07581 1.093057,1.986314 z"
                                            inkscape:transform-center-x="0.04705048"
                                            inkscape:transform-center-y="-0.28094823"
                                            transform="translate(12.211824,2.6209402)" />
                                        <path
                                            sodipodi:type="star"
                                            style="stroke-width:1.1;stroke-opacity:1"
                                            id="star3"
                                            inkscape:flatsided="false"
                                            sodipodi:sides="5"
                                            sodipodi:cx="66.33252"
                                            sodipodi:cy="95.34301"
                                            sodipodi:r1="3.4141285"
                                            sodipodi:r2="1.7070642"
                                            sodipodi:arg1="-0.35877067"
                                            sodipodi:arg2="0.26954786"
                                            inkscape:rounded="0"
                                            inkscape:randomized="0"
                                            d="m 69.529268,94.144229 -1.551324,1.653365 0.482533,2.215261 -2.051828,-0.964479 -1.957728,1.143469 0.283225,-2.249445 -1.692476,-1.508558 2.226871,-0.425754 0.91172,-2.07581 1.093057,1.986314 z"
                                            inkscape:transform-center-x="0.04705048"
                                            inkscape:transform-center-y="-0.28094823"
                                            transform="translate(21.322555,2.6209402)" />
                                        </g>
                                    </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="card-title text-center">ChadHotel Information System</h5>
                            </div>
                        </div>
                        <form onsubmit="return disableButton()" class="form-signin" action="/postLogin" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-label-group">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" value="{{ old('email') }}" required autofocus>
                                        <label for="email">Email</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="password" name="password" autocomplete="new-password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}"
                                            required>
                                        <label for="password">Password</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="w-100 d-flex justify-content-center">
                                        <button id="btn_submit" class="btn btn-lg btn-primary text-white fw-bold p-2"
                                            type="submit" style="border-radius: 2rem;">
                                            <div id="loading_submit" class="spinner-border hide" role="status"
                                                style="width: 15px; height: 15px">
                                            </div>
                                            <div id="text_submit">
                                                Login
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="my-4">
                            {{-- <p class="text-center">Doesnt have any account? <a href="/register">register</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        function disableButton() {
            $("#loading_submit").removeClass("hide");
            $("#text_submit").addClass("hide");
            $("#btn_submit").addClass("isLoading").attr('disabled', 'disabled');
        }
    </script>
@endsection

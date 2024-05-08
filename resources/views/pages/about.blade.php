@extends('layout.user.layout')
@section('title', 'Alveo | About us')
@section('about')

    <style>
        /* Custom scrollbar styling */
        .scrollbar-container {
            overflow-y: auto;
            /* Enable vertical scrollbar */
            max-height: 300px;
            /* Set maximum height for scrollbar container */
            scrollbar-width: thin;
            /* Set width of the scrollbar (Firefox) */
            scrollbar-color: #999 transparent;
            /* Set color of the scrollbar (Firefox) */
        }

        /* Webkit browsers (Chrome, Safari) */
        .scrollbar-container::-webkit-scrollbar {
            width: 6px;
            /* Width of the scrollbar */
        }

        .scrollbar-container::-webkit-scrollbar-track {
            background: transparent;
            /* Track color */
        }

        .scrollbar-container::-webkit-scrollbar-thumb {
            background-color: #999;
            /* Thumb color */
            border-radius: 10px;
            /* Rounded corners */
        }

        .scrollbar-container::-webkit-scrollbar-thumb:hover {
            background-color: #888;
            /* Hover state color */
        }
    </style>
    <div id="company-objective" class="bg-light p-lg-5 px-3  py-5 d-none ">
        <div class="container p-lg-5 p-3">
            <div class="px-5">
                <span id="company-objective-content" class=" lh-sm fs-6">
                </span>
            </div>
        </div>
    </div>

    <div id="company-do" class=" p-lg-5 px-3  py-5 d-none" style="background-color: rgb(8, 132, 204)">
        <div class="container p-lg-5 p-sm-3">
            <div class="px-5">
                <span class="fs-5 text-white">WHAT WE DO</span><br><br>
                <span id="company-do-content" class=" text-white lh-sm  fs-6">

                </span>
            </div>
        </div>
    </div>

    <div class=" bg-light p-lg-5 p-3">
        <div id="company-missions" class="container p-lg-5 p-3">
            <div class="px-5">
                <div class="py-lg-5 ">
                    <span class="fs-4 fw-lighter  text-secondary">MISSION</span>
                </div>
                <div id="company-mission-data" class="row fs-6">
                </div>

            </div>



        </div>
        <div id="company-vision" class="container p-lg-5 p-sm-3">
            <div class="px-5">
                <div class="py-lg-5 ">
                    <span class="fs-4 fw-semibold text-secondary">VISION</span>
                </div>
                <div class="row">
                    <div class="col-4 px-3">
                        <div class="border-top fw-lighter  border-2 py-3">

                        </div>
                    </div>
                    <div class="row">
                        <span id="vision-content" class=" fs-6">

                        </span>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div id="company-awards" class=" bg-success p-lg-5 p-3">
        <div class="container p-lg-5 p-3">
            <div class="px-5">
                <div class="py-lg-5 ">
                    <span class="fs-4 fw-semibold text-light  ">AWARDS</span>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div id="awards-button" class="d-flex overflow-auto scrollbar-container py-2">


                            </div>
                        </div>
                    </div>
                    <div id="awards-content-data" class="row pt-5 lh-sm">

                    </div>
                </div>
            </div>
        </div>
    </div>









    <script src="{{ asset('/js/user/about.js') }}"></script>
    <script>
        $(document).ready(function() {
            Objective()
            WeDO()
            Missions()
            Vision()
            Awards()
            AboutBTN()
            Projects()
            $('#page-title').attr('title', 'About')
        });
    </script>

@endsection

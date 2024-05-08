@extends('layout.user.layout')
@section('title', 'Alveo')
@section('index')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="ps-lg-5 ">
        <div class="bg-light rounded-bottom">
            <div class="row pt-4"></div>
            <br>
            <div class="row ps-5 index-size">
                <div class="col-lg-4 px-lg-3 col-sm-12">
                    <div class="d-sm-flex d-lg-block justify-content-center">
                        <img src="https://www.alveoland.com.ph/static/alveo-land-home.svg" height="30" alt="">
                    </div>
                    <div class="lh-1 d-none d-lg-block">
                        <p style="font-size:4rem"><span style=" color:rgb(9, 161, 255)">Innovating </span><span>the way you
                                live</span></p>
                    </div>
                    <div class="lh-1 d-lg-none text-center">
                        <p style="font-size:2rem"><span style=" color:rgb(9, 161, 255)">Innovating </span><span>the way you
                                live</span></p>
                    </div>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade mb-3 d-lg-none">
                        <div class="carousel-inner">
                            @if ($status == 200)
                                @foreach ($projects as $project)
                                    @php
                                        $active = '';
                                        if ($projects[0]) {
                                            $active = 'active';
                                        } else {
                                            $active = '';
                                        }
                                    @endphp
                                    <div data-id="{{ $project->id }}"
                                        class="display-units carousel-item {{ $active }}"
                                        style='cursor:pointer;background: linear-gradient(to top, rgba(7, 148, 236, 0.9), rgba(255, 255, 255, 0.001)), url("{{ asset('project/snapshots') }}/{{ $project->project_banner }}");
                                                                height:100%; width:100%; background-size:cover; background-position:center;'>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="d-lg-block d-none">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <h1 class="d-lg-block d-none"><span class="bg-light rounded-end   px-5 py-2"><i
                                                    class="fa-solid fa-location-dot text-danger"></i>
                                                {{ $project->city }}</span></h1>
                                        <div
                                            class="featured-property-name d-lg-block d-none  text-center text-light py-2 h5">
                                            {{ $project->project_name }}
                                        </div>
                                        <h5 class="d-block d-lg-none text-center "><span
                                                class="bg-light rounded-2   px-5 py-2"><i
                                                    class="fa-solid fa-location-dot text-danger"></i>
                                                {{ $project->city }}</span></h5>
                                        <div
                                            class="featured-property-name d-block d-lg-none  text-center text-light py-2 h5">
                                            {{ $project->project_name }}
                                        </div>

                                    </div>
                                @endforeach

                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    {{-- <form id="index_search_properties_available"> --}}

                    <div class="d-lg-block d-none">
                        <p>
                            Alveo Land Corp. is the Philippines’ leading innovative developer of vibrant communities and
                            groundbreaking living solutions.
                        </p>
                        <a class="btn  fs-6 btn btn-primary" href="/about">Learn more about us?</a> <br>
                        <br>
                        <a href="/send-property" class="btn btn-success">Submit Property</a>

                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 d-lg-block d-none ">
                    <div class="container my-3 mt-5" id="featureContainer">
                        <div class="row mx-auto my-auto justify-content-center">
                            <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                                <!-- Carousel Controls. OPTIONAL -->
                                <div class="float-end pe-md-4">
                                    <a class="indicator" href="#featureCarousel" role="button" data-bs-slide="prev">
                                        <i class="fa-solid fa-less-than"></i>
                                    </a> &nbsp;&nbsp;
                                    <a class="w-aut indicator" href="#featureCarousel" role="button" data-bs-slide="next">
                                        <i class="fa-solid fa-greater-than"></i>
                                    </a>
                                </div>
                                <!-- Add Slides To The Carousel -->
                                <div class="carousel-inner" role="listbox">
                                    @if ($status == 200)
                                        @foreach ($projects as $project)
                                            @php
                                                $active = '';
                                                if ($projects[0]) {
                                                    $active = 'active';
                                                } else {
                                                    $active = '';
                                                }
                                            @endphp
                                            <div class=" carousel-item {{ $active }}">
                                                <div class="col-md-4">
                                                    <div data-id="{{ $project->id }}"
                                                        class="card display-units  rounded-2 "
                                                        style='cursor:pointer;background: linear-gradient(to top, rgba(7, 148, 236, 0.7), rgba(255, 255, 255, 0.001)), url("{{ asset('project/snapshots') }}/{{ $project->project_banner }}");
                                                                height:25rem; background-size:cover;'>

                                                        <div class="featured-city bg-light rounded-end px-3 py-2 h5"> <i
                                                                class="fa-solid fa-location-dot text-danger"></i>
                                                            {{ $project->city }}
                                                        </div>
                                                        <div
                                                            class="featured-property-name  border-bottom text-light py-2 h5">
                                                            {{ $project->project_name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-block d-lg-none px-sm-5 text-center">
                <p class="text-secondary">
                    Alveo Land Corp. is the Philippines’ leading innovative developer of vibrant communities and
                    groundbreaking living solutions.
                </p>
                <a class="btn  fs-6 btn btn-primary" href="/about">Learn more about us?</a> <br>
                <br>
                <a href="/send-property" class="btn btn-success">Submit Property</a>
            </div>
            <div class="d-lg-flex d-none justify-content-start">
                <div class="">
                    <a href="" class="text-dark btn">Privacy</a>
                </div>
                <div class="text-nowrap">
                    <a href="" class="text-dark btn "><small>Terms and Condition</small></a>
                </div>
                <div class="text-nowrap">
                    <a href="" class="text-dark btn">Property Listing</a>
                </div>
            </div>
            <div class="d-flex d-lg-none mt-3 justify-content-center">
                <div class="">
                    <a href="" class="text-dark btn">Privacy</a>
                </div>
                <div class="text-nowrap">
                    <a href="" class="text-dark btn">Terms and Condition</a>
                </div>
                <div class="text-nowrap">
                    <a href="" class="text-dark btn">Property Listing</a>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('/js/user/search.js') }}"></script>
    <script>
        $(document).ready(function() {
            SearchProperty()
            PropertyViewBtn()
            DisplaySaleUnitEvent()
            // featuredProperties()
            $('#page-title').attr('title', 'Home')
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    {{-- 
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script> --}}
    <script>
        let myCarousel = document.querySelectorAll('#featureContainer .carousel .carousel-item');
        myCarousel.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = myCarousel[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>



@endsection

@extends('layout.user.layout')
@section('title', 'Alveo | Lease')
@section('lease')
    <div class="px-3 bg-light" style="height: 100vh" id="for-sale-container px-3 ">
        <div class=" pt-3 display-result">
            <h4 class="text-primary text-center">For Lease Properties</h4>

            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <span class=" text-dark ">Filter Property</span>
                    <form id="lease-search-filter" enctype="multipart/form-data" class="d-lg-flex align-content-center ">
                        <select name="city" class="location-select">
                        </select>
                        <select name="category">
                            <option value="">Select Catgory</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Residential">Residential</option>
                        </select>
                        <select name="type">
                            <option value="">Choose Type</option>
                            <option value="Studio">Studio</option>
                            <option value="1BR">1BR</option>
                            <option value="2BR">2BR</option>
                            <option value="3BR">3BR</option>
                            <option value="PH">PH</option>
                            <option value="Lot">Lot</option>
                            <option value="H&L">H&L</option>
                            <option value="Office">Office</option>
                        </select>


                        <div class="d-lg-block d-none ms-1">
                            <button type="submit" class="btn btn-success rounded-0 ">Filter Now</button>
                            <button type="button" class="btn btn-primary rounded-0 reset-form-btn">Reset</button>
                        </div>
                        <div class="d-block d-lg-none mt-2">
                            <button type="submit" class="btn btn-success rounded-0 ">Filter Now</button>
                            <button type="button" class="btn btn-primary rounded-0 reset-form-btn">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <span class="text-fs-4">Property result found <span class="property-count"></span></span>
        <div id="display-project-lease-units" class="row">

        </div>
    </div>



    <script src="{{ asset('/js/user/lease.js') }}"></script>
    <script>
        $(document).ready(function() {
            Display_Project_Lease_Units()
            UnitsEvents()
        });
    </script>

@endsection

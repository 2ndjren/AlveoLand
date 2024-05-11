@extends('layout.admin.layout')
@section('title', 'Admin | Submitted Properties')
@section('submitted')
    <div class="">
        <p class="fw-bold text-primary">Submitted Clients Properties</p>

    </div>
    <div id="layer1" class="row">
        <div class="col-lg-6 col-12">
            <p class="fw-semibold text-primary ms-3">Incoming Properties</p>
            <div class="table-pending-properties-container bg-light shadow-sm p-3 overflow-x-auto">

            </div>
        </div>
        <div class="col-lg-6 col-12">
            <p class="fw-semibold text-primary ms-3">Approved Properties</p>

            <div class="table-approved-properties-container bg-light shadow-sm p-3 overflow-x-auto">

            </div>
        </div>
        <a id="properties-history-btn" class="fw-semibold me-3 text-end" style="cursor: pointer">History</a>
    </div>
    <div id="layer2" class="col-lg-12 col-12 d-none">
        <a id="backlayer1" class="fw-semibold" href="">Back</a>
        <p class="fw-semibold text-primary ms-3">History </p>
        <div class="table-declined-properties-container bg-light shadow-sm p-3 overflow-x-auto">

        </div>
    </div>



    @include('admin.modals.modals')

    <script src="{{ asset('js/admin/client.js') }}"></script>
    <script></script>
@endsection

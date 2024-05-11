@extends('layout.admin.layout')
@section('title', 'Admin | Inquiry')
@section('inquiry')
    <div class="">
        <p class="fw-bold text-primary">INQUIRIES</p>
    </div>
    <div class="row">
        <div class="col-lg-6 col-12 lh-1">
            <p class="fw-semibold text-primary ms-3">Incoming Inquiries</p>
            <div class="table-inquiry-responded-container bg-light shadow-sm p-3 overflow-x-auto">

            </div>
        </div>
        <div class="col-lg-6 col-12 lh-1">
            <p class="fw-semibold text-primary ms-3">Responded Inquiries</p>
            <div class="table-inquiry-pending-container bg-light shadow-sm p-3 overflow-x-auto">

            </div>
        </div>


    </div>



    @include('admin.modals.inquiry')

    <script src="{{ asset('js/admin/inquiry.js') }}"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            Display_Pending_Inquiry()
            Display_Responded_Inquiry()
            Inquiry_Event()
        });
    </script>
@endsection

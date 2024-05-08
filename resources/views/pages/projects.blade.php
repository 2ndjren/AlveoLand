@extends('layout.user.layout')
@section('title', 'Alveo | Projects')
@section('user_projects')

    <div class="px-3 bg-light  overflow-y-auto" style="height:auto" id="for-sale-container px-3 ">
        <br>
        <h4 class="text-primary text-center">Our Projects</h4>
        <div id="display-project-properties" class="row bg-light">

        </div>



    </div>
    <script src="{{ asset('/js/user/projects.js') }}"></script>
    <script>
        $(document).ready(function() {
            Display_Project()
            DisplaySaleUnitEvent()
        });
    </script>

@endsection

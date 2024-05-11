<!-- Button trigger modal -->
<div class="modal fade" id="schedule_visit_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">

            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>

                <h5 class="text-primary text-center">Schedule A Visit (Complete the form)</h5>
                <form id="schedule_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="full_name" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="contact" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Contact</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="date" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="time" name="time" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Time</label>
                    </div>
                    <input type="hidden" name="unit_id">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

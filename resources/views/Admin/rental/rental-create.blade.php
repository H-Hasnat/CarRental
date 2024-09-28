<div class="modal fade" id="create-rental-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Rental Create</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Start Date:</label>
                                <input type="date" class="form-control" id="startdate">

                                <label class="form-label mt-2">End Date:</label>
                                <input type="date" class="form-control" id="enddate">

                                <label class="form-label mt-2" id="UserSelect">User</label>


                                <br><label class="form-label mt-2" id="car-lable">Car</label>




                                <br><label class="form-label mt-2" >Status</label>

                                <select name="role" id="carstatus" class="form-select">
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>

                                </select>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="RentalCreate()" id="save-btn" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script src="jscode/rental/rental-create.js"></script>

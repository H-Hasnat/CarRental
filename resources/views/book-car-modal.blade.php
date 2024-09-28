<div class="modal fade" id="book-car-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Create Category</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label">Start Date:</label>
                                <input type="date" class="form-control" id="StartDate">

                                <label class="form-label mt-2">End Date:</label>
                                <input type="date" class="form-control" id="EndDate">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <input type="text" name="" id="car_id">

            <input type="text" name="" id="Price" >
            <input type="text" name="" id="Available" >
            <div type="text" name="" id="Start-rental-Date" ></div>
            <div type="text" name="" id="End-rental-Date" ></div>
            <input type="text" name="" id="Rental-Id" >



            <div class="modal-footer">
                <button id="modal-close" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="ConfirmBook()" id="save-btn" class="btn btn-success">Book</button>
            </div>
        </div>
    </div>
</div>



<script src="jscode/book-car.js"></script>

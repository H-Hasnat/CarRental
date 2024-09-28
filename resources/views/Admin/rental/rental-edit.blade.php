<div id="editrentalModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content p-2">

                <h4 class="modal-title">Update</h4>
                <div class="col-12 p-1">
                    <label class="form-label">Start Date:</label>
                    <input type="date" class="form-control" id="startrentaldate">

                    <label class="form-label mt-2">End Date:</label>
                    <input type="date" class="form-control" id="endrentaldate">

                    <label class="form-label mt-2" >User</label>
                    <div id="user-rentalcar">

                    </div>

                    <label class="form-label mt-2" id="car-rental-lable">Car</label>
                    <br>

                    <label class="form-label mt-2" id="statusLabel">Status</label>

                    {{-- <select  id="RentalCarStatus">
                        {{-- <option value="Ongoing">Ongoing</option>
                        <option value="Completed">Completed</option>
                    </select> --}}

                </div>
                <input type="text" name="" class="d-none" id="rentaleditid">
                <input type="text" name="" class="d-none" id="careditid">

                <div class="modal-footer">
                    <button id="edit-modal-customer-close" class="btn bg-gradient-primary" data-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="UpdateRental()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>

        </div>
    </div>
</div>

<script src="jscode/rental/rental-edit.js"></script>

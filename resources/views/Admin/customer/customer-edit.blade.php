<div id="editcustomerModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content p-2">

                <h4 class="modal-title">Update</h4>
                <div class="col-12 p-1">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="cName">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="cEmail">
                    <label class="form-label">password</label>
                    <input type="text" class="form-control" id="cPassword">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="cPhn_number">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" id="cAddress">
                    <select name="role" id="cRole" class="form-select">
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>

                    </select>
                </div>
                <input type="text" name="" class="d-none" id="cid">
                <div class="modal-footer">
                    <button id="edit-modal-customer-close" class="btn bg-gradient-primary" data-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="UpdateCustomer()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>

        </div>
    </div>
</div>

<script src="jscode/customer/customer-edit.js"></script>

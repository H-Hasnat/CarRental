<div class="modal fade" id="create-customer-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Create Category</h6>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" id="Email">
                                <label class="form-label">password</label>
                                <input type="text" class="form-control" id="Password">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="Phn_number">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" id="Address">
                                <select name="role" id="Role" class="form-select">
                                    <option value="customer">Customer</option>
                                    <option value="admin">Admin</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="create-modal-close" class="btn bg-gradient-primary" data-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="SaveCustomer()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>
            </div>
    </div>
</div>


<script src="jscode/customer/customer-create.js"></script>

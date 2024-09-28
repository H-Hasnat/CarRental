
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">

            <div class="mb-4">
                <a href="/Dashboard" class="btn btn-success mt-4">Back</a>

                </div>
                
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Rental Details</h4>
                    </div>
                    <div class="align-items-center col">
                        <button data-bs-toggle="modal" id="create-rental-button" data-bs-target="#create-modal"
                            class="float-end btn  btn-success">Create</button>
                    </div>
                </div>
                <hr class="bg-secondary"/>
                <div class="table-responsive">
                    <table class="table table-bordered-2  text-center" id="tableData">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Total cost</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody id="tableList">

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="jscode/rental/rental-list.js"></script>


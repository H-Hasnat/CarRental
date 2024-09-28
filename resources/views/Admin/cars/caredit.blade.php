<div class="modal fade" id="update-car-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Car</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">


                                <label class="form-label mt-2">Name</label>
                                <input type="text" class="form-control" id="careditName">

                                <label class="form-label mt-2">Brand</label>
                                <input type="text" class="form-control" id="careditBrand">

                                <label class="form-label mt-2">Model</label>
                                <input type="text" class="form-control" id="careditModel">

                                <label class="form-label mt-2">Year</label>
                                <input type="text" class="form-control" id="careditYear">

                                <label class="form-label mt-2">Car Type</label>
                                <input type="text" class="form-control" id="careditType">

                                <label class="form-label mt-2">Daily Rent</label>
                                <input type="text" class="form-control" id="careditRent">



                                <label class="form-label mt-2">Available car</label>
                                <select type="text" class="form-control" id="car-edit-select">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select><br>

                                <br />
                                <img class="w-25" id="neweditImg" src="{{asset('images/default.jpg')}}" />
                                <br />
                                <label class="form-label mt-2">Image</label>
                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="careditImg">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <input type="text" class="d-none" id="editId">
            <div class="modal-footer">
                <button id="update-modal-close" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="CarUpdate()" id="update-btn" class="btn btn-success">Update</button>
            </div>
        </div>
    </div>
</div>

<script src="jscode/cars/caredit.js"></script>

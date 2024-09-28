<div class="modal fade" id="create-car-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Cars</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">


                                <label class="form-label mt-2">Name</label>
                                <input type="text" class="form-control" id="carName">

                                <label class="form-label mt-2">Brand</label>
                                <input type="text" class="form-control" id="carBrand">

                                <label class="form-label mt-2">Model</label>
                                <input type="text" class="form-control" id="carModel">

                                <label class="form-label mt-2">Year</label>
                                <input type="text" class="form-control" id="carYear">

                                <label class="form-label mt-2">Car Type</label>
                                <input type="text" class="form-control" id="carType">

                                <label class="form-label mt-2">Daily Rent</label>
                                <input type="text" class="form-control" id="carRent">



                                <label class="form-label mt-2">Available car</label>
                                <select type="text" class="form-control" id="car-select">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select><br>

                                <br />
                                <img class="w-25" id="newImg" src="{{asset('images/default.jpg')}}" />
                                <br />
                                <label class="form-label mt-2">Image</label>
                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="carImg">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn btn-primary mx-2" data-dismiss="modal" aria-label="Close">Close</button>
                <button onclick="CarCreate()" id="save-btn" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script src="jscode/cars/carcreate.js"></script>

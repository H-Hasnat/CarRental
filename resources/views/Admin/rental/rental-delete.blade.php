<div id="delete-rental-Modal" class="modal fade">
    <div class="modal-dialog modal-confirm">
      <div class="modal-content">
        <div class="text-center">
          <h4 class="modal-title ">Are you sure?</h4>

        </div>
        <div class="modal-body">
          <p>Do you really want to delete these records? This process cannot be undone.</p>
        </div>
        <input type="text" id="deleterentalId" class="d-none">
        <div >
          <button type="button" class="btn btn-info" id="delete-customer-modal" data-dismiss="modal">Cancel</button>
          <button type="button" onclick="deleterental()" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <script src="jscode/rental/rental-delete.js"></script>
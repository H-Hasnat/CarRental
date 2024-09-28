
CustomerList()
async function CustomerList() {

   let res=await axios.get('/detailscustomer')
   console.log(res)

   let tableList=$('#tableList')
   let tableData=$('#tableData')


   tableData.DataTable().destroy();
   tableList.empty();


   res.data.forEach(function(item,indx){
       let row=`<tr>
       <td>${indx+1}</td>
       <td>${item['name']}</td>
       <td><button data-id="${item['id']}" class="btn detailscustomerBtn btn-sm btn-outline-secondary">Details</button></td>
       <td>
           <button data-id="${item['id']}" class="btn edit-customer-Btn btn-sm btn-outline-success">Edit</button>
           <button data-id="${item['id']}" class="btn delete-customer-Btn btn-sm btn-outline-danger">Delete</button>
       </td>
    </tr>`
tableList.append(row)

   });



   $('.detailscustomerBtn').on('click',async function() {

   let id= $(this).data('id');

   $("#detailscustomerModal").modal('show')
   filldata(id)

   })

$('.delete-customer-Btn').on('click', async function () {
   let id= $(this).data('id');
   $("#deleteId").val(id);

   $("#delete-customer-Modal").modal('show')

})

$("#create-customer-button").on('click',function(){
    $("#create-customer-modal").modal('show')

})

$(".edit-customer-Btn").on('click',function(){
  let id= $(this).data('id')
  fillcustomerdata(id)

  $('#editcustomerModal').modal('show')
//   $('#editId').val(id)
   // $('#delete-modal').click()
});



new DataTable('#tableData',{
    order:[[0,'asc']],
    lengthMenu:[5,10,15]
});









}

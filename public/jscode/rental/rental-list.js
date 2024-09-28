RentalList()
async function RentalList() {

   let res=await axios.get('/detailsrental')
   console.log(res)

   let tableList=$('#tableList')
   let tableData=$('#tableData')


   tableData.DataTable().destroy();
   tableList.empty();


   res.data.forEach(function(item,indx){
       let row=`<tr>
       <td>${indx+1}</td>
       <td>${item['start_date']}</td>
       <td>${item['end_date']}</td>
       <td>${item['total_cost']}</td>
       <td>${item['status']}</td>
       <td><button data-id="${item['id']}" class="btn detailsrentalBtn btn-sm btn-outline-secondary">Details</button></td>
       <td>
           <button data-id="${item['id']}" data-car_id="${item['car_id']}" class="btn edit-rental-Btn btn-sm btn-outline-success">Edit</button>
           <button data-id="${item['id']}" class="btn delete-rental-Btn btn-sm btn-outline-danger">Delete</button>
       </td>
    </tr>`
tableList.append(row)

   });


   $('.detailsrentalBtn').on('click',async function() {

   let id= $(this).data('id');

   $("#detailsrentalModal").modal('show')
   fillRentalDetails(id)
//    filldata(id)

   })

$('.delete-rental-Btn').on('click', async function () {
   let id= $(this).data('id');
   $("#deleterentalId").val(id);

   $("#delete-rental-Modal").modal('show')

})

$("#create-rental-button").on('click',function(){

    $("#create-rental-modal").modal('show')

})

$(".edit-rental-Btn").on('click',function(){
  let id= $(this).data('id')
    // alert(id)

    let car_id= $(this).data('car_id');
    // alert(car_id)
  $('#editrentalModal').modal('show')

//   fillselectdata(id)
  FillRentalForm(id,car_id)


//   FillRentalForm(id)
//
//   $('#editId').val(id)
   // $('#delete-modal').click()
});



new DataTable('#tableData',{
    order:[[0,'asc']],
    lengthMenu:[5,10,15]
});

}




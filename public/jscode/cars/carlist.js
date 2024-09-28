CarList()

async function CarList() {

    let res=await axios.get('/detailscar')

    console.log(res)
    let tableList=$('#tableList')
    let tableData=$('#tableData')


    tableData.DataTable().destroy();
    tableList.empty();


    res.data.forEach(function(item,indx){
        let row=`<tr>
        <td>${indx+1}</td>
        <td><img src="${item['image']}" id="img1"></td>
        <td>${item['name']}</td>
        <td>${item['daily_rent_price']}</td>
        <td><button data-id="${item['id']}" class="btn detailscarBtn btn-sm btn-outline-secondary">Details</button></td>

        <td>
            <button data-id="${item['id']}" class="btn editcarBtn btn-sm btn-outline-success">Edit</button>
            <button data-id="${item['id']}" class="btn deletecarBtn btn-sm btn-outline-danger">Delete</button>
        </td>
     </tr>`
tableList.append(row)

    });




// $('.deleteBtn').on('click', async function () {
//     let id= $(this).data('id');

//     $("#deleteModal").modal('show')
//     $("#deleteId").val(id);

// })


$("#createcarbutton").on('click',function(){
   let id= $(this).data('id')
//    alert(id)
   $("#create-car-modal").modal('show')
   console.log(id)

});

$('.detailscarBtn').on('click',async function() {

    let id= $(this).data('id');

    $("#detailscarModal").modal('show')
    cardetails(id)
    })

 $('.deletecarBtn').on('click', async function () {
    let id= $(this).data('id');
    $("#deletecarId").val(id);

    $("#delete-car-Modal").modal('show')

 })



 $(".editcarBtn").on('click',function(){
   let id= $(this).data('id')

   $('#update-car-modal').modal('show')
   CarEdit(id)

 })




new DataTable('#tableData',{
    order:[[0,'desc']],
    lengthMenu:[5,10,15,20,30]
});

}



fillselectdata()
async function fillselectdata(){
    let res=await axios.get('/detailscar')
    let user=await axios.get('/detailscustomer')

    console.log("result")
    console.log(res)
    console.log("user")
    console.log(user)


//car select
    let select=document.createElement('select');
    select.classList.add('form-control')
    select.id="rental-update-car"

    $("#rentalcar").empty()

    res.data.forEach(function(item){

        const newOption = document.createElement('option');

newOption.text =item['name'];


newOption.value = item['id'];


select.appendChild(newOption);


    })

    $("#car-rental-lable").append(select)






    // status
    let select1=document.createElement('select');
    select1.classList.add('form-control')
    select1.id="status-update-Value"

    console.log(select1)
    $("#statusValue").empty()


        const newOption1 = document.createElement('option');

newOption1.text ="Ongoing";


newOption1.value ="Ongoing";


select1.appendChild(newOption1);

const newOption2 = document.createElement('option');

newOption2.text ="Completed";


newOption2.value ="Completed";
select1.appendChild(newOption2);



    $("#statusLabel").append(select1)



    //user select


    let select2=document.createElement('select');
    select2.classList.add('form-control')
    select2.id="user-update"

    $("#user").empty()
    console.log(select2)

    user.data.forEach(function(item){

        const newOption2= document.createElement('option');

newOption2.text =item['name'];


newOption2.value = item['id'];


select2.appendChild(newOption2);



    })

    $("#user-rentalcar").append(select2)







}




async function FillRentalForm(id,car_id){

document.getElementById("rentaleditid").value=id
document.getElementById("careditid").value=car_id

    let result=await axios.post('/detailsrentalbyid',{id:id})
    console.log(result)


    result.data.forEach(function(item){

        try{
            console.log(item['start_date'])


                document.getElementById('startrentaldate').value=item['start_date']
              let sdate=new Date(document.getElementById('startrentaldate').value)

              document.getElementById('endrentaldate').value=item['end_date']
            let edate=new Date(document.getElementById('endrentaldate').value)



            let car=document.getElementById('rental-update-car').value=item['car_id']

            let user=document.getElementById('user-update').value=item['user_id']


           let status= document.getElementById('status-update-Value').value=item['status']



        }catch(e){
            console.log(e)
        }

            })


}


async function UpdateRental(){
    let id=document.getElementById("rentaleditid").value
    let car_id=document.getElementById("rental-update-car").value
    let user_id=document.getElementById('user-update').value
    let sdate=document.getElementById('startrentaldate').value
    let edate=document.getElementById('endrentaldate').value
    let status= document.getElementById('status-update-Value').value

    console.log(car_id)



    //now date

    let now = new Date();

    let year = now.getFullYear();
    let month = ("0" + (now.getMonth() + 1)).slice(-2); // Months are 0-indexed, so we add 1
    let day = ("0" + now.getDate()).slice(-2);

    let formattedDate = `${year}-${month}-${day}`;

    if (sdate.length === 0) {
        error("start date required");
    } else if (edate.length === 0) {
        error("End date required");
    }  else if (formattedDate > edate || sdate > edate) {
        error("Give correct end date");
    }  else if (status==='Completed') {
        error("status will not Completed");
    } else {
        let res=await axios.post('/editrental',{start_date:sdate,end_date:edate,id:id,car_id:car_id,user_id:user_id})
        console.log(res.data)
    if(res.status===200){
        success("Updated Successfully")
        document.getElementById('edit-modal-customer-close').click()
        RentalList()
    }else{
        error('error')
    }
}


}

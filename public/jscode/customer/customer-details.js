
async function filldata(id){

    let customer=await axios.post('/detailscustomerbyid',{id:id})

   let cusid=document.getElementById("cusId").value=customer.data['id']

    document.getElementById('id').innerHTML=customer.data['id']
    document.getElementById('name').innerHTML=customer.data['name']
    document.getElementById('email').innerHTML=customer.data['email']
    document.getElementById('phn_nmber').innerHTML=customer.data['Phone Number']
    document.getElementById('address').innerHTML=customer.data['Address']
    document.getElementById('role').innerHTML=customer.data['role']

    // console.log(a)
    let rental=await axios.post('/detailsrentalbyid',{id:cusid})
    // console.log(rental)
    $("#rentaldetails").empty();
    rental.data.forEach(function(item){

        let data=`{ <p>Car id:${item['car_id']}</p>
         <p>start date: ${item['start_date']}</span></p>
         <p>end date: ${item['end_date']}</span></p>
         <p>total Cost: ${item['total_cost']}</span></p>

         } </br>

         `


       $("#rentaldetails").append(data)

     })





}



RentalDetails()

async function fillRentalDetails(id){
    let res=await axios.post('/detailsrentalbyid',{id:id})
    console.log(res)
    res.data.forEach(function(item){
        document.getElementById("id").innerHTML=item['id']

        document.getElementById("sdate").innerHTML=item['start_date']
        document.getElementById("edate").innerHTML=item['end_date']
        document.getElementById("tcost").innerHTML=item['total_cost']
        document.getElementById("status").innerHTML=item['status']
        document.getElementById("user_id").innerHTML=item['user_id']
        document.getElementById("car_id").innerHTML=item['car_id']

    })



}

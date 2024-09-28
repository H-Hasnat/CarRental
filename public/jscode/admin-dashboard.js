dashboard_data()

async function dashboard_data() {
    let res=await axios.get('/report')
    
    let totalCars=document.getElementById("totalCars").innerText=res.data['cars']
    let availableCars=document.getElementById("availableCars").innerText=res.data['availability']
    let totalRentals=document.getElementById("totalRentals").innerText=res.data['rent']
    let totalEarnings=document.getElementById("totalEarnings").innerText='$'+ res.data['rental_cost']



}

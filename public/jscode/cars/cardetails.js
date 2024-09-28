
async function cardetails(id){

    let res=await axios.post('/detailscarbyid',{id:id})
    console.log(res.data['name'])
    res.data.forEach(function(item){
        document.getElementById('Carname').innerHTML=item.name
        document.getElementById('Cbrand').innerHTML=item['brand']
        document.getElementById('Ctype').innerHTML=item['car_type']
        document.getElementById('Cmodel').innerHTML=item['model']
        document.getElementById('Cavailable').innerHTML=item['availability']
        document.getElementById('Crent').innerHTML=item['daily_rent_price']
        document.getElementById('Cid').innerHTML=item['id']
        document.getElementById('image').src=item['image']
        console.log(document.getElementById(Cname))

        console.log(item)
        console.log(item.name)


    })
}

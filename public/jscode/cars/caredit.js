CarEdit()
async function CarEdit(id){
    let name=document.getElementById('editId').value=id

let res=await axios.post('/detailscarbyid',{id:id})

res.data.forEach((item) => {
    let name=document.getElementById('careditName').value=item['name']
    let brand=document.getElementById('careditBrand').value=item['brand']
    let model=document.getElementById('careditModel').value=item['model']
    let year=document.getElementById('careditYear').value=item['year']
    let type=document.getElementById('careditType').value=item['car_type']
    let rent=document.getElementById('careditRent').value=item['daily_rent_price']
    let avaible=document.getElementById('car-edit-select').value=item['availability']
    let image=document.getElementById('careditImg').files[0]=item['image']
   document.getElementById('neweditImg').src=image


});
// let cusid= document.getElementById('editId').value=id






}



async function CarUpdate(){

    let id=document.getElementById('editId').value

    let name=document.getElementById('careditName').value
    let brand=document.getElementById('careditBrand').value
    let model=document.getElementById('careditModel').value
    let year=document.getElementById('careditYear').value
    let type=document.getElementById('careditType').value
    let rent=document.getElementById('careditRent').value
    let avaible=document.getElementById('car-edit-select').value
    let image=document.getElementById('careditImg').files[0]


let formData= new FormData;
// formData.append('id',id)
    formData.append('id',id)
    formData.append('name',name)
    formData.append('brand',brand)
    formData.append('model',model)
    formData.append('year',year)
    formData.append('car_type',type)
    formData.append('daily_rent_price',rent)
    formData.append(' availability',avaible)
    formData.append('newimg',image)


    const config={
     headers:{
         'content-type': 'multipart/form-data'

     }
    }






    if(name.length===0){
        error("name required")
    }else if(brand.length===0){
        error("brand required")
    }else if(model.length===0){
        error("model required")
    }else if(year.length===0){
        error("year required")
    }else if(type.length===0){
        error("type required")
    }else if(rent.length===0){
        error("rent required")
    }else if(avaible.length===0){
        error("avaible required")
    }else {

    let res=await axios.post('/editcar',formData,config)

    if(res.data['status']==='success'){
        success('Update Successful')
        CarList()
        document.getElementById("update-modal-close").click()
    }else{
        error('error')
    }

    }















}

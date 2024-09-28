async function CarCreate(){

    let name=document.getElementById('carName').value
    let brand=document.getElementById('carBrand').value
    let model=document.getElementById('carModel').value
    let year=document.getElementById('carYear').value
    let type=document.getElementById('carType').value
    let rent=document.getElementById('carRent').value
    let avaible=document.getElementById('car-select').value
    let image=document.getElementById('carImg').files[0]


    let formData= new FormData;
    formData.append('name',name)
    formData.append('brand',brand)
    formData.append('model',model)
    formData.append('year',year)
    formData.append('car_type',type)
    formData.append('daily_rent_price',rent)
    formData.append(' availability',avaible)
    formData.append('img',image)


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
    }else if(image.length===0){
        error("image required")
    }else {
        let res=await axios.post('/addcar',formData,config)

        if(res.data['status']==='success'){
            success('Data Added Successful')
            CarList()
            document.getElementById("modal-close").click()
        }else{
            error('error')
        }

    }



}

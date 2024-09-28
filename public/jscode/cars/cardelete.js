async function deletecar(){
    let id=document.getElementById("deletecarId").value
    let res=await axios.post('/deletecar',{id:id})

    if(res.status===200){
        success('success')
        document.getElementById('delete-customer-modal').click()
        CarList()
    }else{
        error('error')
    }
}

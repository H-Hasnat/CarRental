async function deleterental() {
    let id=document.getElementById('deleterentalId').value
    let res=await axios.post('/deleterental',{id:id})
    console.log(res)
    if(res.status===200){
        RentalList()
        document.getElementById("delete-customer-modal").click()
        success('Deleted')
    }else{
        error('error')
    }

}

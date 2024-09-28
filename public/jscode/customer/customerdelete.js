async function deletecustomer(){
    let cus_id=document.getElementById('deleteId').value
    console.log(cus_id)
    let res=await axios.post('/deletecustomer',{id:cus_id})

    // console.log(res.data)
    if(res.status===200){
        success('Data Deleted')
        CustomerList()
        document.getElementById("delete-customer-modal").click()
    }else{
        error('error')
    }
}

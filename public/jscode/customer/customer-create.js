async function SaveCustomer(){
    let name=document.getElementById('Name').value
    let email=document.getElementById('Email').value
    let role=document.getElementById('Role').value

    let password=document.getElementById('Password').value
    let phn_number=document.getElementById('Phn_number').value
    let address=document.getElementById('Address').value






    if(name.length===0){
        error('name required')
    }else if(email.length===0){
        error('email required')

    }else if(password.length===0){
        error('password required')

    }else if(phn_number.length===0){
        error('Phone Number required')

    }else if(address.length===0){
        error('Address required')

    }else{
    let res=await axios.post('/addcustomer',{name:name,email:email,password:password,phn_number:phn_number,Address:address,role:role})
    console.log(res);

        if(res.status===200){
            success('Data Added Successfully')
            document.getElementById("create-modal-close").click()
            CustomerList()
        }else{
            error('error')
        }
    }

}

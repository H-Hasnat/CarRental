async function fillcustomerdata(id){
    let res=await axios.post('/detailscustomerbyid',{id:id})

    let name=document.getElementById('cName').value=res.data['name']
    document.getElementById('cid').value=res.data['id']

    let email=document.getElementById('cEmail').value=res.data['email']
    let role=document.getElementById('cRole').value=res.data['role']

    let password=document.getElementById('cPassword').value=res.data['password']
    let phn_number=document.getElementById('cPhn_number').value=res.data['Phone Number']
    let address=document.getElementById('cAddress').value=res.data['Address']
}

async function UpdateCustomer(){
    let cid=document.getElementById('cid').value


    let name=document.getElementById('cName').value
    let email=document.getElementById('cEmail').value
    let role=document.getElementById('cRole').value

    let password=document.getElementById('cPassword').value
    let phn_number=document.getElementById('cPhn_number').value
    let address=document.getElementById('cAddress').value



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
        let res=await axios.post('/editcustomer',{id:cid,name:name,email:email,role:role,password:password,phn_number,Address:address})


        if(res.status===200){
            success('updated successful')
            document.getElementById('edit-modal-customer-close').click()
            CustomerList()
        }else{
            error('error')
        }
    }
















}

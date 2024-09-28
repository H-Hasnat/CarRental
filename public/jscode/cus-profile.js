CusProfile()

async function CusProfile()
{

    let res=await axios.get('/profile')
    console.log(res)


    //status


    res.data.forEach(function(item){
        document.getElementById("cus-Id").value=item['id']
        document.getElementById("cus-Name").value=item['name']
        document.getElementById("cus-Email").value=item['email']
        document.getElementById("cus-Password").value=item['password']
    //    document.getElementById("select-update-role").value=item['role']
        document.getElementById("cus-Phone").value=item['Phone Number']
        document.getElementById("cus-Address").value=item['Address']


    })
}


async function CusUpdate() {


   let name= document.getElementById("cus-Name").value

    let password=document.getElementById("cus-Password").value
  let role= document.getElementById("cus-role").value
   let phn_nmbr=document.getElementById("cus-Phone").value
    let address=document.getElementById("cus-Address").value

    let res=await axios.post('/updateprofile',{
        name:name,
        password:password,
        role:role,
        phn_nmbr:phn_nmbr,
        address:address

    })

    if(res.status===200){
        success('Updated Successful')
    }else{
        error('error')
    }

}

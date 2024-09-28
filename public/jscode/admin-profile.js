AdminProfile()

async function AdminProfile()
{

    let res=await axios.get('/profile')
    console.log(res)


    //status

    let select=document.createElement('select');
    select.classList.add('form-control')
    select.id="select-update-role"

    console.log(select)
    // $("#statusValue").empty()


    const newOption1 = document.createElement('option');

    newOption1.text ="Customer";


    newOption1.value ="customer";
    select.appendChild(newOption1);


        const newOption = document.createElement('option');

newOption.text ="Admin";


newOption.value ="admin";


select.appendChild(newOption);

    $("#select-role").append(select)

    res.data.forEach(function(item){
        document.getElementById("profileId").value=item['id']
        document.getElementById("profileName").value=item['name']
        document.getElementById("profileEmail").value=item['email']
        document.getElementById("profilePassword").value=item['password']
       document.getElementById("select-update-role").value=item['role']
        document.getElementById("profilePhone").value=item['Phone Number']
        document.getElementById("profileAddress").value=item['Address']


    })
}


async function Update() {


   let name= document.getElementById("profileName").value

    let password=document.getElementById("profilePassword").value
  let role= document.getElementById("select-update-role").value
   let phn_nmbr=document.getElementById("profilePhone").value
    let address=document.getElementById("profileAddress").value

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

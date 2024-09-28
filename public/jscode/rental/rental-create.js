fillselectdata()
async function fillselectdata(){
    let res=await axios.get('/detailscar')
    let user=await axios.get('/detailscustomer')

    console.log(res)


    let select=document.createElement('select');
    select.classList.add('form-control')
    select.id="car"

    $("#car").empty()
    console.log(select)



    res.data.forEach(function(item){

        const newOption = document.createElement('option');

newOption.text =item['name'];


newOption.value = item['id'];


select.appendChild(newOption);



    })

    $("#car-lable").append(select)



    let select1=document.createElement('select');
    select1.classList.add('form-control')
    select1.id="user-select"

    $("#user-select").empty()
    console.log(select1)


    user.data.forEach(function(item){

        const newOption1= document.createElement('option');

newOption1.text =item['name'];


newOption1.value = item['id'];


select1.appendChild(newOption1);



    })

    $("#UserSelect").append(select1)
}


async function RentalCreate(){


    //now date

    let now = new Date();

    let year = now.getFullYear();
    let month = ("0" + (now.getMonth() + 1)).slice(-2); // Months are 0-indexed, so we add 1
    let day = ("0" + now.getDate()).slice(-2);

    let formattedDate = `${year}-${month}-${day}`;

//start date
    let startDate = new Date(document.getElementById('startdate').value);
    let startyear = startDate.getFullYear();
    let startmonth = startDate.getMonth() + 1;
    let startday = startDate.getDate();

    month = startmonth < 10 ? '0' + startmonth : startmonth;
    day = startday < 10 ? '0' + startday : startday;

    let sdate = startyear + '/' + month + '/' + day;


//end date

    let endDate = new Date(document.getElementById('enddate').value);
let endYear = endDate.getFullYear();
let endMonth = endDate.getMonth() + 1; // Months are 0-based, add 1
let endDay = endDate.getDate();
endMonth = endMonth < 10 ? '0' + endMonth : endMonth;
endDay = endDay < 10 ? '0' + endDay : endDay;
let edate = endYear + '/' + endMonth + '/' + endDay;


    let status=document.getElementById('carstatus').value
    let car=document.getElementById('car').value
    let user_id=document.getElementById('user').value




    if (sdate.length === 0) {
        error("start date required");
    } else if (edate.length === 0) {
        error("End date required");
    } else if (formattedDate > sdate) {
        error("Give correct start date");
    } else if (formattedDate > edate || sdate > edate) {
        error("Give correct end date");
    } else {


    let add=await axios.post('/addrental',{start_date:sdate,end_date:edate,car_id:car,user_id:user_id,status:status})

    console.log(add.data)

    if(add.data['status']==='success'){
        RentalList()
        document.getElementById("modal-close").click()
        success('Data Added successful')
    }else{
        error('error')
    }
}


}

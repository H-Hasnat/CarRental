FillSearchData()

async function FillSearchData(){
    let res=await axios.get('/detailscar')
    console.log(res)

    //brand dynamic
    let brand_select=document.createElement('select')
    brand_select.id="BrandFilter"
    let option1=document.createElement('option')
    option1.textContent="select Brand"
    option1.value=""
    brand_select.append(option1)

    // console.log(option)
    brand_select.classList.add('form-control', 'custom-select', 'text-black','mb-4');

    console.log(brand_select)

    //Type dynamic

    let type_select=document.createElement('select')

    type_select.id="TypeFilter"

    let option2=document.createElement('option')
    option2.textContent="select Type"
    option2.value=""

    type_select.append(option2)
    type_select.classList.add('form-control', 'custom-select', 'text-black','mb-4');
    console.log(type_select)

    //Price

    let price_select=document.createElement('select')

    price_select.id="PriceFilter"

    let option3=document.createElement('option')
    option3.textContent="select Price"
    option3.value=""

    price_select.append(option3)
    price_select.classList.add('form-control', 'custom-select', 'text-black','mb-4');
    console.log(price_select)


    res.data.forEach(function(item,indx){
        //brand option
        const brandOption = document.createElement('option');

    brandOption.text =item['brand'];

    brandOption.value = item['brand'];

    //type option

    const typeOption = document.createElement('option');

    typeOption.text =item['car_type'];

    typeOption.value = item['car_type'];

    // price option

    const priceOption = document.createElement('option');

    priceOption.text =item['daily_rent_price'];

    priceOption.value = item['daily_rent_price'];

        brand_select.append(brandOption)
        type_select.append(typeOption)
        price_select.append(priceOption)

    })

    $("#brandContainer").append(brand_select)
    $("#typeContainer").append(type_select)
    $("#priceContainer").append(price_select)

    let text=document.createElement('h1')
    text.classList.add('col-md-12','text-center','mt-4')
    text.id="title"
     text.textContent="No search Data"

            $("#CarContent").append(text)
    console.log(text)

    $("#searchBtn").on('click', function() {
        // Set the text content of the h1 to an empty string (null equivalent)
        text.textContent = '';
    });



}


async function SearchCar(){
    let brand=document.getElementById("BrandFilter").value
    let type=document.getElementById("TypeFilter").value
    let price=document.getElementById("PriceFilter").value


// $("#title").textContent=null
    let res=await axios.post('/filtercar',{brand:brand,type:type,price:price})
    console.log(res.data)

        $("#CarContent").empty()

    if (Array.isArray(res.data)) {
        // If res.data is an array, check if it has any cars
        if (res.data.length === 0) {
            let noCarsMessage = `
                <div class="col-md-12 text-center mt-4">
                    <h3>No cars found matching your criteria</h3>
                </div>
            `;
            $("#CarContent").append(noCarsMessage);
        } else {
            // Iterate through the cars data and display them
            res.data.forEach(function(item) {
                let content = `
                    <div class="col-md-4 mb-4">
                        <div class="gallery_box">
                            <div class="gallery_img"><img src="${item['image']}" id="carImg"></div>
                            <h3 class="types_text" id="carName">${item['name']}</h3>

                                <h3 class="types_text" id="available">
                ${item['availability'] === 0 ? 'Not Available' : 'Available'}
                        </h3>



                            <p class="looking_text mb-3" id="carPrice">Start per day $${item['daily_rent_price']}</p>
                            <div class="mx-auto">
                           <button class=" BookBtn btn btn-primary" data-id=${item['id']} data-available=${item['availability']}  >Book Now</button>

                            </div>
                        </div>
                    </div>
                `;
                $("#CarContent").append(content);
            });


            $(".BookBtn").on('click',function(){

                let available=$(this).data('available')
                let id=$(this).data('id')

             if(available===1){
                BookingDataFill(id)
                 $("#book-car-modal").modal('show')

                

             }else{
                 error("Car is booked")
             }


             })



        }
    } else if (res.data === '0' || res.data === 0) {

        // If res.data is '0' or 0, show the no cars found message

        let noCarsMessage = `
            <div class="col-md-12 text-center mt-4">
                <h3>No cars found matching your criteria</h3>
            </div>
        `;
        $("#CarContent").append(noCarsMessage);
    } else {
        // Log unexpected formats for debugging
        console.error('Unexpected response format:', res.data);
    }

    // console.log( $("#CarContent"))








}












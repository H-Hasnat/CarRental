BookingDataFill();
let arr = [];
let arr1 = [];
let count;
async function BookingDataFill(id) {



    let res = await axios.post("/detailscarbyid", { id: id });
    console.log(res);


    res.data.forEach(function (item) {
        let price = (document.getElementById("Price").value =
            item["daily_rent_price"]);
        let available = (document.getElementById("Available").value =
            item["availability"]);
        document.getElementById("car_id").value = item["id"];

    });

    let car_id = document.getElementById("car_id").value;
    // console.log(car_id)
    let rental = await axios.post("/rentalmsg", { car_id: car_id });
    console.log("rental");
    console.log(rental);
    rental.data.forEach(function (item) {
        document.getElementById("Rental-Id").value = item["id"];

        arr.push(item["start_date"]);
        arr1.push(item["end_date"]);
    });

    document.getElementById("Start-rental-Date").innerText = arr;
    document.getElementById("End-rental-Date").innerText = arr1;
    console.log(arr);
    console.log(arr1);


}

async function ConfirmBook() {



    let sdate = document.getElementById("StartDate").value;
    let edate = document.getElementById("EndDate").value;

    let price = document.getElementById("Price").value;
    let available = document.getElementById("Available").value;
    let id = document.getElementById("car_id").value;

    let rental_id = document.getElementById("Rental-Id").value;

    let start_date = document.getElementById("Start-rental-Date").value;
    let end_date = document.getElementById("End-rental-Date").value;
    let i;
    for (i = 0; i < arr.length; i++) {


        if (sdate === arr[i]) {
            console.log("sdate match");
            count = 1;
        } else if (edate === arr1[i]) {
            console.log("sdate match");

            count = 1;
        } else if (sdate === arr1[i]) {
            console.log("sdate match");

            count = 1;
        } else if (edate === arr[i]) {
            count = 1;
            console.log("sdate match");
        } else if (sdate <= arr[i] && edate <= arr1[i]) {
            count = 1;
            console.log("sdate match");
        }

        else {
            count = 0;
        }




    }
        let min, max;
        if (arr.length < 0 && arr1.length < 0) {
            //min date find
            let minDate = new Date(
                Math.min(...arr.map((date) => new Date(date)))
            );

            // Convert the Date object back to a string in the original format if needed
            min = minDate.toISOString().split("T")[0];

            //maximum date find

            maxDate = new Date(Math.max(...arr1.map((date) => new Date(date))));

            // Convert the Date object back to a string in the original format if needed
            max = maxDate.toISOString().split("T")[0];
        }

        let now = new Date();

        let year = now.getFullYear();
        let month = ("0" + (now.getMonth() + 1)).slice(-2); // Months are 0-indexed, so we add 1
        let day = ("0" + now.getDate()).slice(-2);

        let formattedDate = `${year}-${month}-${day}`;

        if (sdate.length === 0) {
            error("start date required");
        } else if (edate.length === 0) {
            error("End date required");
        } else if (formattedDate > sdate) {
            error("Give correct start date");
        } else if (formattedDate > edate || sdate > edate) {
            error("Give correct end date");
        } else if (count === 1) {
            let msg = `Car Booked from  ${min} to ${max}`;
            error(msg);
        } else {
            // console.log("Yes")
            let res = await axios.post("/createbookdata", {
                sdate: sdate,
                edate: edate,
                price: price,
                car_id: id,
            });
            // let update = await axios.post("/rental-histroy-updated", {
            //     edate: edate,
            //     rental_id: rental_id,
            // });
            // console.log(res);
            if (res.status === 200) {
                success("Rent successfully");

                document.getElementById("modal-close").click();

                setTimeout(() => {
                    window.location.href = "/rentalhistroy";
                }, 1000);
                await axios.post("/sendmail", { car_id: id });

                console.log("hi");

                // console.log(mail);
            } else {
                error("error");
            }
        }

}

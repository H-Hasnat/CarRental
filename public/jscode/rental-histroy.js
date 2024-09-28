OngoingData();
async function OngoingData() {
    let res = await axios.get("/rentalhistroydata");
    console.log(res);

    //current date
    let now = new Date();

    let year = now.getFullYear();
    let month = ("0" + (now.getMonth() + 1)).slice(-2); // Months are 0-indexed, so we add 1
    let day = ("0" + now.getDate()).slice(-2);

    let formattedDate = `${year}-${month}-${day}`;

    $("#OngoingBody").empty();
    $("#CompleteBody").empty();

    res.data.forEach(async function (item) {
        console.log(item["status"]);

        //Ongoing Data

        if (item["status"] === "Ongoing") {
            console.log(item["start_date"]);

            let row = `<tr>
                    <td>${item.user["name"]}</td>
                    <td>${item.car["name"]}</td>
                    <td>${item["start_date"]}</td>
                    <td>${item["end_date"]}</td>
                    </tr>
                    `;
            if (formattedDate < item["start_date"]) {
                row += `<td><button class="cancleBtn btn btn-danger"  onclick="CancleBook(${item.car_id},${item.id})">Cancel</button></td>`;
            } else if (formattedDate > item["end_date"]) {
                let data = await axios.post("/rental-histroy-updated", {
                    car_id: item.car["id"],
                    start_date:item["start_date"],
                    end_date:item["end_date"],
                    rental_id:item['id']
                });
                console.log("data")
                console.log(data)
                row += `<td><div class="btn btn-success">Completed</div></td>`;

            } else {
                row += `<td><div class="btn btn-success">${item["status"]}</div></td>`;
            }

            row += `</tr>`;
            $("#OngoingBody").append(row);
        } else {
            // $("#Completed").destroy()

            console.log(item["start_date"]);

            let row = `<tr>
                <td>${item.user["name"]}</td>
                <td>${item.car["name"]}</td>
                <td>${item["start_date"]}</td>
                <td>${item["end_date"]}</td>
                </tr>
                `;
            if (formattedDate < item["start_date"]) {
                row += `<td><button class="cancleBtn btn btn-danger"  onclick="CancleBook(${item.car_id},${item.id})">Cancel</button></td>`;
            } else if (formattedDate > item["end_date"]) {
                row += `<td><div class="btn btn-success">Completed</div></td>`;
                await axios.post('/rental-histroy-updated',{car_id:item.car['id']})
            } else {
                row += `<td><div class="btn btn-success">${item["status"]}</div></td>`;
            }

            row += `</tr>`;
            $("#CompleteBody").append(row);
        }
    });
}

$("#ongoing-tab").click(function () {
    window.location.reload();
    // OngoingData()
});

async function CancleBook(carid, rentalid) {
    // console.log(id);

    let res = await axios.post("/canclebook", { car_id: carid, id: rentalid });
    console.log(res);

    if (res.status === 200) {
        success("Deleted successfully");
        $("#OngoingBody").empty();
        OngoingData();
    } else {
        error("error");
    }
}

Slider()
async function Slider(){

    try{
    let res = await axios.get('/detailscar');  // Fetch data from the server
    let carData = res.data;  // Assume the response is an array of car objects

    // Create carousel structure
    let carouselHTML = `
      <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
    `;

    // Loop through carData to dynamically generate carousel items
    carData.forEach(function(item, index) {
      let name = item['name'];
      let rent = item['daily_rent_price'];
      let image = item['image'];  // Make sure the image URL is correct

      const activeClass = index === 0 ? 'active' : '';  // Set the first slide as active
      carouselHTML += `
        <div class="carousel-item ${activeClass}">
          <div class="card text-center">
            <img src="${image}" class=" card-img-top text-center" style="height: 600px"  alt="${name}">
            <div class="card-body">
              <h5 class="card-title">Name: ${name}</h5>
              <p class="card-text">Daily Rent: ${rent}</p>
              <a href="/rejectbook" class="btn btn-primary"  >Book Now</a>
            </div>
          </div>
        </div>
      `;
    });

    // Close carousel structure and add navigation controls
    carouselHTML += `
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <hr>
    `;

    // Append the carousel to the rentalCarousels container
    document.getElementById('rentalCarouselsSlider').innerHTML = carouselHTML;
}catch (error) {
    console.error("Error fetching car details:", error);
  }
}





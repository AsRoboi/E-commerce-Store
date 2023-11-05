<script>
    window.onload =function(){
        getlocation();
    }
        var x = document.getElementById("demo");
        var y = document.getElementById("loclink");
        window.onload = function(){
            getLocation();
        }
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }</script>

       <link rel="stylesheet" href="style/corona.css">
<div id="card body1"></div>
<div class="cards2"></div>
<script src="engine/corona.js"></script>
<div class="card mb-3" style="max-width: 100px height= 50px;">
      
      <div class="col-md-20">
      <div class="col-md-20">
        <div class="card-body">
          <h5 class="card-title">COVID 19 Update</h5>
          <p class="card-text">Country = ${values.country} </p>
          <p>Confirmed Cases = ${values.confirmed}</p>
          <p> Recovered = ${values.recovered} </p>
          <p> Critical Condition = ${values.critical} </p>
          <p> Deaths = ${values.deaths}</p>
              <div class="col-md-4">
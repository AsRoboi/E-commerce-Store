

fetch("https://covid-19-data.p.rapidapi.com/country/code?code=lk", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "covid-19-data.p.rapidapi.com",
		"x-rapidapi-key": "4c3e80d592mshb1c30d3b1400104p14676cjsn86240b8f2f73"
	}
})

.then((data) => {
    //console.log(response);
    return data.json();
}).then((completedata) => {
    //console.log(completedata[1].title);
    let data1 = "";
    completedata.map((values) => {
        data1 = `
       
               
                    <div class="card text-center" style=" width :16rem">
                      <h4 class="fst">Covid 19 Update</h4>
                      <p>Country = ${values.country} </p>
                      <p> Confirmed Cases = ${values.confirmed}</p>
                      <p> Recovered = ${values.recovered} </p>
                      <p> Critical Condition = ${values.critical} </p>
                      <p> Deaths = ${values.deaths}</p></p>
                    </div>
            </div>
          </div>
        </div>
      </div>

`
    })
    document.getElementById("card body1").innerHTML = data1;

}).catch((err) => {
    console.log(err);
})
fetch("https://tech-news3.p.rapidapi.com/verge", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "tech-news3.p.rapidapi.com",
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
			data1 += `

	<div class="cards">
	<center><div class="card col-md-3" >

		<h4 class="card-title">${values.title}</h4>
		<p class="card-text">${values.dateTime}</p>
		<img class="card-img" src=${values.img} alt="Card image cap">
		<div class="card-body">
			<center><a href="{values.link}" class="btn btn-primary">Link for News</a>
		</div>
	</div>
	
	
	</div>`
		})
		document.getElementById("card body").innerHTML = data1;

	}).catch((err) => {
		console.log(err);
	})
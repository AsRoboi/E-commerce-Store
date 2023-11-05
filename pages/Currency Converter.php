
 <!DOCTYPE html>
 <html lang="en">
 <head>
     
    
         
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel ="stylesheet" href="style/Curcon.css"/>

     <h1>Currency Converter</h1>
    <p>Select the currency </p>

    <div class="container">
      <div class="currency">
        <select id="currency-one">
          <option value="AED">AED</option>
          <option value="AUD">AUD</option>
          <option value="CAD">CAD</option>
          <option value="CNY">CNY</option>
          <option value="EUR">EUR</option>
          <option value="GBP">GBP</option>
          <option value="INR">INR</option>
          <option value="JPY">JPY</option>
          <option value="LKR">LKR</option>
          <option value="NZD">NZD</option>
          <option value="PKR">PKR</option>
          <option value="RUB">RUB</option>
          <option value="SGD">SGD</option>  
          <option value="USD" selected>USD</option>
          
        </select>
        <input type="number" id="amount-one" placeholder="0" value="1" />
      </div>

      <div class="swap-rate-container">
        <button class="btn2" id="swap">Switch</button>
        <div class="rate" id="rate"></div>
      </div>

      <div class="currency">
        <select id="currency-two">
        <option value="AED">AED</option>
          <option value="AUD">AUD</option>
          <option value="CAD">CAD</option>
          <option value="CNY">CNY</option>
          <option value="EUR" selected>EUR</option>
          <option value="GBP">GBP</option>
          <option value="INR">INR</option>
          <option value="JPY">JPY</option>
          <option value="LKR">LKR</option>
          <option value="NZD">NZD</option>
          <option value="PKR">PKR</option>
          <option value="RUB">RUB</option>
          <option value="SGD">SGD</option>  
          <option value="USD">USD</option>
          
          
        </select>
        <input type="number" id="amount-two" placeholder="0" />
      </div>
    </div>

<script src="engine/CurrencyCon.js"></script> 
  </body>
</html>










































 
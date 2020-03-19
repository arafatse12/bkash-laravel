<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
       
    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="#">
    	  <div class="w3-container w3-teal w3-padding-16">Paywith Bkash</div>
    	  {{ csrf_field() }}
    	  <h2 class="w3-text-blue">Payment Form</h2>
    	  <p>Demo Bkash form - Integrating Bkash in laravel</p>
          <label class="w3-text-blue"><b>Enter Name</b></label>
          <input class="w3-input w3-border" id="name" type="text" name="name"></p>
           <label class="w3-text-blue"><b>Enter Email</b></label>
          <input class="w3-input w3-border" id="email" type="email" name="email"></p>
          <label class="w3-text-blue"><b>Enter Amount</b></label>
          <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
         
    	  <button class="w3-btn w3-blue">Pay with Bkash</button>
    	</form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="price.css">
</head>
<body>
        <div class="navbar">
            <img src="logo.jpg" alt="" class="logo">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="abtus.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li> 
            </ul>
        </div>
<!-- separation  -->
<div class="main">
<div class="input-group">
    <label>Weight of the package (in kg)</label>
    <input type="text" name="" id="heavy">
    <br>
    
    <label>Senders state</label>
    <input type="text" name="" id="bill amount">
    <br> 
    <label>Recievers state</label>
    <input type="text" name="" id="bill amount1">
    <br> 
    <label>Cgst (@9%)</label>
    <input type="text" name="" id="cgst" disabled>
    <br> 
    <label>sgst (@9%)</label>
    <input type="text" name="" id="sgst" disabled>
    <br> 
    <label>Total Amount (in Rs)</label>
    <input type="text" name="" id="tot" disabled>
    <label>Receiver's Phone Number</label>
    <input type="text" name="" id="heavy">
    <br> 
    <label for="fragile"> Fragile </label>
    <select id="fragile">
        <option value="fragile">select yes or no </option>
        <option value="yes">YES</option>
        <option value="no">NO</option> 
    </select><br>
    <button class="btn" onclick="tipcalcy()"> calculate </button>
</div>
<a href="su.php" class="check">Proceed to Checkout</a>
</div>

<script>
    const tipcalcy = () =>{
        let sa = document.getElementById('bill amount').value;
        let ra = document.getElementById('bill amount1').value;
        let Weight = document.getElementById('heavy').value;

        if (sa==ra) {
            let dis = 25* 15; 
            let sgst = 0.09 * dis;
            let total = dis + sgst  + (Weight*5);
            alert(total);
            document.getElementById('cgst').value = sgst;
            document.getElementById('sgst').value = "Not applicable";
            document.getElementById('tot').value = total;
        }else{
            let dis = 25 * 15; 
            let sgst = 0.09 * dis;
            let total = dis + sgst + sgst + (Weight*5);
            alert(total);
            document.getElementById('cgst').value = sgst;
            document.getElementById('sgst').value = sgst;
            document.getElementById('tot').value = total;
        }
;    }
</script>

</body>

</html>
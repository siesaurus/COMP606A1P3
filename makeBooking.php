<?php include("header.php");


?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link ref style.css>
<!DOCTYPE html>
<title>Make a Booking</title>
<html>
    <body>

<div class="formContainer">
<h2>Make a booking</h2>

<form action="processBooking.php" method="POST">

<div class = "bkContainer">
    <label>First name: </label><br>
    <input type="text"  name="FirstName" required><br>

    <label>Last name: </label><br>
    <input type="text" name="LastName" required><br>

    <label>Email address:</label><br>
    <input type="text" name="Email"><br>

    <label>Therapist:</label><br>
		<select id="therapist" name="Therapist" onChange="getDate(this.value);" ><br>
		<option value="">Select Therapist</option><br><br><br>

    <label>Reason for Appointment:</label><br>
    <textarea name="Reason" id="Reason" maxlength="256"></textarea><br>

    <label>What You Need:</label><br><br><br>
    <select id="massageType" name ="Massage Type">
            <option value="short_massage">Short Massage $40</option>
            <option value="medium_massage">Medium Massage $60</option>
            <option value="long_massage">Long Massage $80</option>


    <label>Date of Visit:</label><br>
		<input type="date" name="dov" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br><br>
		<div id="datestatus"> </div><br>
    </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value = "Submit"></td>
                </tr>
                
</div>
</form>
</div>

</body>
</html>
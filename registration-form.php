<!DOCTYPE html>
<html>
<head>
<title> Registration Form </title>
</head>
<body>
<h1>Registration Form</h1>
<fieldset>
<h3>1. Basic Information</h3>
<form>
First Name: <input type = text = fname>
<br>
Last Name: <input type = text = lname>
<br>
Gender: <input type="radio" name="gender" id="male" value="male">
<label for="male">Male</label>
<input type="radio" name="gender" id="female" value="female">
<label for="female">Female</label>
<br>
Date of Birth: <input type = "date"/>
<br>
Religion: <select name ="Religion">
<option value = "Islam">Islam</option>
<option value = "Hinduism">Hinduism</option>
<option value = "Bouddhism">Bouddhism</option>
<option value = "Christianity">Christianity</option>
</select>
<br>
Father's Name: <input type = text = Fname>
<br>
Mother's Name: <input type = text = mname>
<br>
</fieldset>
<fieldset>
<h3>2. Contact Information</h3>
Present Address: <input type = text = presentadd>
<br>
Parmanent Address: <input type = text = parmanentadd>
<br>
Phone: <input type ="tel"/>
<br>
Email: <input type ="email"/>
<br>
Personal Website Link: <input type = "url"/>
<br>
</fieldset>
<fieldset>
<h3>3. Academic Information</h3>
SSC Year: <input type = "number"/>
<br>
SSC Institution: <input type = text = sscinst/>
<br>
HSC Year: <input type = "number"/>
<br>
HSC Institution: <input type = text = hscinst/>
<br>
</fieldset>
<input type = "submit"/>
</form>
</body>
</html>

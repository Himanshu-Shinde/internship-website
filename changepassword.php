<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style>
	body {
  background-color: #edeff1;
  font-family: "Roboto";
  font-weight: 300;
  color: #34495e;
  font-size: .9em;
}

.form {
  width: 400px;
  margin:auto;
  background: white;
  border-radius: 3px;
  margin-top: 5em;
  margin-bottom: 6em;
  padding: 1.25em;
}

h3 {

  font-size: 1.98em;
  margin-bottom: .8em;
  margin-top: .4em;
  font-weight: 100;
}

.btn-primary {
  box-shadow: 0; 
  border: none; 
  background-color: #48c9b0;
  border-color: #48c9b0;
  color: #ffffff;
  outline: none;
  -webkit-font-smoothing: subpixel-antialiased;
  transition: all .5s;
  padding: 10px 19px;
  font-size: 17px;
  line-height: 1.471;
  width: 30%;
  border-radius: 3px;
  text-transform: uppercase;
  margin: auto;
  margin-top: 1.44em;
  margin-bottom: .55em;
  display: inherit;
}

.btn-primary:hover {
  background-color: #1ABC9C;
}

.form-group {
  position: relative;
  opacity: 1;
  transition: .6s;
}

.input-field-icon {
  color: #bfc9ca;
  font-size: 18px;
  position: absolute;
  right: 10px;
  bottom: 12px;
  transition: .6s;
}

.form-control {
  transition: opacity .6s;
  opacity: 1;
  border: 0;
  border-bottom: 2px solid #bdc3c7;
  border-radius: 0;
  background: white;
  font-size: 15px;
  line-height: 1.467;
  padding: 4px;
  height: 42px;
  -webkit-appearance: none;
}

input, textarea {
  transition: all 800ms;
  font-family: "Roboto";
  resize: none;  /* removes the resize handle */
  overflow: auto; /* removes default scrolling bars in IE */
  outline:none; 
  font-family:inherit; 
  box-sizing:border-box;
  width: 100%;
  padding: 0px 4px;
  color: #34495e;
  margin-top: 1.25em;
}


.has-error input, .has-error textarea {
  color: #e74c3c;
  border-color: #e74c3c;
}

.has-error .input-field-icon {
  color: #e74c3c;
}

.has-success input, .has-success textarea {
  color: #2ecc71;
  border-color: #2ecc71;
}

.has-success .input-field-icon {
  color: #2ecc71;
}


input:focus, textarea:focus {
  border-color: #48c9b0;
  color: #34495e;
}

input:focus + .input-field-icon {
  color: #34495e;
}

textarea.form-control {
  height: 120px;
  transition: .6s;
}

textarea.form-control:focus {
  height: 200px;
  border-color: #48c9b0;
}

.social {
  display: block;
  margin: auto;
  width: 250px;
}

.social li {
  display: inline-block;
  list-style: none;
  margin: auto;
  margin-right: 10px;
}

.social li a {
  display:block;
  text-decoration: none;
  color: #999;
  border: 2px solid #999;
  border-radius: 100%;
  font-size: 26px;
  width: 34px;
  padding: 3px;
  text-align: center;
  transition: all .4s;
}

.social li a:hover {
  background: #999;
  color: white;
}

.social li a span {
  margin-top: 4px;
  text-align: center;
}


@media (max-width: 600px) {
  .form {
    width: 90%;
    margin-top: 12%;
  }
}

</style>	
<div class="form" >
    <form method="POST" action="changepasswordscript.php">
            <h3>Change Your Password</h3>
            <div class="form-group">
              <input type="email" class="form-control" value="" placeholder="Enter email id" name="email_id"/>
              <label class="input-field-icon icon-user"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" value="" placeholder="Enter New Password" name="password"/>
              <label class="input-field-icon icon-email"></label>
            </div>
            
            <div class="form-group">
              <input type="password" class="form-control" value="" placeholder="Enter New Password Again" name="newpassword"/>
              <label class="input-field-icon icon-email"></label>
            </div>
            

            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>
            
           
    </form>          
</div>
<button type="submit" name="updateButton" class="btn btn-primary btn-lg btn-block" ><a href="updateinfo.php">update</a></button>

</body>
</html>
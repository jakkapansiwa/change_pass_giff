<?
// session_start();
// ob_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function check(){
  alert('กรุณากรอก USERNAME');
  alert('กรุณากรอก USERNAME');
  alert('กรุณากรอก USERNAME');


  alert('รหัสผ่านต้องมีตัวอักษรตัวเล็ก');
  alert('รหัสผ่านต้องมีตัวอักษรตัวเล็ก');
  alert('รหัสผ่านต้องมีตัวอักษรตัวเล็ก');
  alert('รหัสผ่านต้องมีตัวอักษรตัวเล็ก');
  alert('รหัสผ่านต้องมีตัวอักษรตัวเล็ก');
  alert('รหัสผ่านต้องมีตัวอักษรตัวเล็ก');


console.log("aaaa")
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap');
</style>

<style type="text/css">

fieldset{
    margin: auto;
    width: 400px;
    background: none repeat scroll 0 0 #6D99CE;
    border: 0px solid #6D99CE;
    padding: 35px 25px 60px;
    background-repeat: repeat;
    background-size: 60px;
    position: relative;
}
h1{
    font-size: 18px;
    color: #1633a7;
    font-family: 'Akaya Telivigala', cursive;
    padding: 10 0 10 0;
  }

h2{
    font-size: 16px;
    /* color: #1633a7; */
    font-family: 'Akaya Telivigala', cursive;
    padding: 10 0 10 0;
  }
.title_giffarine{
  font-family: "Lucida Console", "Courier New", monospace;
  font-size: 10px;
  color: #FFFFFF ;
  padding: 0 0 20 0;

}
.text_title_head{
    font-size: 18px;
    font-family: 'Akaya Telivigala', cursive;
    color: #1633a7;
}
.text_title{
    font-size: 16px;
    font-family: 'Akaya Telivigala', cursive;
    font-weight:bold;
    color: #0000ad;
}
#confirm{
    font-size: 13px;
    height: 32px;
    margin: 1 0.6em 1.2em 0;
    background-color: #6D99CE;
    background-image: -moz-linear-gradient(center top , #4D90FE, #4787ED);
    border: 1.5px solid #00007f;
    color: #FFFFFF;
    text-shadow: 0 1px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    width: 60px;

}
#reset{
    font-size: 13px;
    height: 25px;
    width: 50px;
    margin: 1 0.3em 0 2.5;
    background-color: #696975;
    border: 1.5px solid #000000;
    color: #FFFFFF;

}
input[name="username"], input[name="passold"], 
input[name="passnew"], input[name="passnew1"]{
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    -moz-box-sizing: border-box;
    background: none repeat scroll 0 0 #FFFFFF;
    border-color: #C0C0C0 #D9D9D9 #D9D9D9;
    border-radius: 1px 1px 1px 1px;
    border-right: 1px solid #D9D9D9;
    border-style: solid;
    border-width: 4px;
    display: inline-block;
    height: 29px;
    margin: 5 15px 0 20;
    padding: 0 10px 0 0;
}
.box {
    margin-top: 60px;
    margin-right: 35px;
    margin-bottom: 35px;
    margin-left: 35px;
}
#borderimage {
    background-color: #fafafa;
    border: 2px;
    

}
#td_from_box{
   background-color:#FFFFFF;
}
.set_btnreset{
  padding: 0 0 25 10;
}

span.select {
  font-size: 14px;
  font-family: "Lucida Console", "Courier New", monospace;
  font-weight:bold;
  color: #FFFFFF;
  padding: 80 15 20 32;

}
span.text_select{
  font-size: 12px;
  font-family: "Lucida Console", "Courier New", monospace;
  font-weight:bold;
  color: black;

}

.combobox_choose {
  padding: 15 15 20 32;
}

/*Styling Selectbox*/
.dropdown {
  width: 250px;
  display: inline-block;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 0 2px rgb(204, 204, 204);
  transition: all .5s ease;
  position: relative;
  font-size: 14px;
  color: #474747;
  height: 35px;
  text-align: left;
}
.dropdown .select {
    cursor: pointer;
    display: block;
    padding: 10px
}
.dropdown .select > i {
    font-size: 13px;
    color: #888;
    cursor: pointer;
    transition: all .3s ease-in-out;
    float: right;
    line-height: 20px
}
.dropdown:hover {
    box-shadow: 0 0 4px rgb(204, 204, 204)
}
.dropdown:active {
    background-color: #f8f8f8
}
.dropdown.active:hover,
.dropdown.active {
    box-shadow: 0 0 4px rgb(204, 204, 204);
    border-radius: 2px 2px 0 0;
    background-color: #f8f8f8
}
.dropdown.active .select > i {
    transform: rotate(-90deg)
}
.dropdown .dropdown-menu {
    position: absolute;
    background-color: #fff;
    width: 100%;
    left: 0;
    margin-top: 1px;
    box-shadow: 0 1px 2px rgb(204, 204, 204);
    border-radius: 0 1px 2px 2px;
    overflow: hidden;
    display: none;
    max-height: 144px;
    overflow-y: auto;
    z-index: 9
}
.dropdown .dropdown-menu li {
    padding: 10px;
    transition: all .2s ease-in-out;
    cursor: pointer
} 
.dropdown .dropdown-menu {
    padding: 0;
    list-style: none
}
.dropdown .dropdown-menu li:hover {
    background-color: #f2f2f2
}
.dropdown .dropdown-menu li:active {
    background-color: #e2e2e2
}

#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 5px 20px;
  font-size: 13px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}

</style>
</head>
<body>
<form id="ChangePass" name="ChangePass" method="post" action="checkchange_pass.php" onsubmit="return check()" >
    <div class="box">
    <fieldset>   

    <tr>
      <img src="php/images/logo.jpg" width= "400" height= "150" border ="2" id ="borderimage" name = "borderimage" />
      <div align="center" class="title_giffarine">
        <h2>GIFFARINE SKYLINE UNITY CO. LTD</h2>
      </div>
    
      <span class="select">ประเภทการใช้งาน</span>
      <div class="combobox_choose">

            <div class="dropdown">
            <div class="select">
              <span class="text_select">กรุณาเลือกประเภทการใช้งาน</span>
              <i class="fa fa-chevron-left"></i>
            </div>
            <input type="hidden" name="type_authen" value= "no_select"/>
            <ul class="dropdown-menu">
              
              <li id="authen">Authen Change Password</li>
              <li id="authen_wifi">Authen WIFI Change Password</li>
            </ul>
          </div>
    </div>
       
    <table width="340" border="0" align="center" id="td_from_box" >

      <td colspan="2" align="center">
          <h1>Change Password (Authen Giffarine)</h1>
      </td>
      <tr> 
        <td align="left" valign="middle"><span class="text_title">&nbsp;&nbsp;Username : </span>
        </td>
        <td>
          <label>
            <input type="text" name="username" id="username"/>
          </label>
        </td>
      </tr> 
        <td colspan="2"></td>

      <tr>
        <td align="left"><span class="text_title">&nbsp;&nbsp;Old Password : </span></td>
        <td>
          <label>
            <input type="password" name="passold" id="passold"/>
          </label
        ></td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>

      <tr>
        <td align="left"><span class="text_title">&nbsp;&nbsp;New Password :</span> 
        </td>
        <td>
          <label>
            <input type="password" name="passnew" id="passnew"/>
          </label>
        </td>
      </tr>

      <tr>
        <td align="left"><span class="text_title">&nbsp;&nbsp;Confirm New &nbsp;&nbsp;Password : </span>
        </td>
        <td>
          <label>
            <input type="password" name="passnew1" id="passnew1" />
          </label>
        </td>
      </tr>

      <tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        
        <td colspan="3">
        <div align="right">
          <label>
            <input type="reset" id="reset" />
            &nbsp;
            <input type="submit" id="confirm"/>
          </label>
        </div>

      <div id="message">
        <h2>Password must contain the following:</h2>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
		
        </td>
      </tr>

    </table>
</fieldset>
</div>
</form>

<script>
  
var myInput = document.getElementById("passnew");
var myInput_1 = document.getElementById("passnew1");
var confirm = document.getElementById("confirm");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}
myInput_1.onfocus = function() {
  document.getElementById("message").style.display = "block";
}
confirm.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}
myInput_1.onblur = function() {
  document.getElementById("message").style.display = "none";
}
confirm.onblur = function() {
  document.getElementById("message").style.display = "none";
}


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jqauthen.js "></script>

</body>
</html>
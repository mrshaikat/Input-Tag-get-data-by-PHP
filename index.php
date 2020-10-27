<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

if( isset( $_POST['submit'] )) {

  $name = $_POST["name"];
  $email = $_POST["email"];

  $valid_email = filter_var( $email, FILTER_VALIDATE_EMAIL);

  $pass = $_POST["password"];
  $cell = $_POST["cell"];
  $select = $_POST["select"];
  $gender = $_POST["gender"];
  $check = $_POST["check"];



 

  if( empty( $name || $valid_email || $pass || $cell || $select || $gender || $check )) {

    echo "Fild Must Not be Empty";


    }elseif($valid_email == false){
      echo "Email Is not corret";
    }
    else{
      echo "Data Stable";
    }





  }



?>
  
<div class="log">
  
  <h2>Sign Up Today</h2>
  <hr>


  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
      <tr>
        <td>Name</td>
        <td><input name="name" type="text"></td>
      </tr>

      <tr>
        <td>Email</td>
        <td><input name="email" type="text"></td>
      </tr>

      <tr>
        <td>
          Select Option
        </td>
        <td>
          <select name="select" id="">
            <option value="-Select-">-Select-</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
        </td>
      </tr>

      <tr>
        
        <td>Gender</td>
        <td>
        <input name="gender" type="radio" id="male"> <label for="male">Male</label>

        <input name="gender" type="radio" id="female"> <label for="female">Female</label>

        <input name="gender" type="radio" id="other"> <label for="other">Others</label>
        </td>
      </tr>






      <tr>
        <td>
          Check Box
        </td>

        <td> 
          <input name="check[]" value="A" type="checkbox" id="optionn"><label for="optionn">Apple</label>

          <input name="check[]" value="B" type="checkbox" id="optionn"><label for="optionn">Ball</label>

          <input name="check[]" value="C" type="checkbox" id="optionn"><label for="optionn">Cat</label>

          <input name="check[]" value="D" type="checkbox" id="optionn"><label for="optionn">Dog</label>

        </td>
      </tr>





      <tr>
        <td>Password</td>
        <td><input name="password" type="text"></td>
      </tr>

      <tr>
        <td>Cell</td>
        <td><input name="cell" type="text"></td>
      </tr>

      <tr>
        
      <td><input name="submit" type="submit" value="Send"></td>
      </tr>
    </table>
  </form>
</div>



</body>
</html>

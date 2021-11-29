<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  var_dump($_POST);
}



?>

<!DOCTYPE html>
<html>
<head>
  <title>My website</title>
  <meta charset="utf-8">
</head>
<body>

<form method="post">
  <div>
      <input autofocus name="username">
  </div>

  <div>
    <input name="password" type="password">
  </div>

  <div>
    tel: <input type="tel" name="telephone">
  </div>

  <div>
      url: <input type="url" name="web_address">
  </div>

  <div>
    date: <input type="date" name="date">
  </div>

  <div>
    time: <input type="time" name="time">
  </div>

  <div>
    week:<input type="week" name="week">
  </div>

  <div>
    colour:<input type="color" name="colour">
  </div>

  <div>
    email:<input type="email" name="email">
  </div>

  <div>
    month:<input type="month" name="month">
  </div>

  <div>
    range:<input type="range" name="range">
  </div>

  <div>
    hidden:<input type="hidden" name="hidden" value="1234">
  </div>

  <div>
    number:<input type="number" name="number">
  </div>

  <div>
    search:<input type="search" name="search">
  </div>

  <div>
    datetime-local:<input type="datetime-local" name="datetime_local">
  </div>

  <div>
    textarea: <textarea name="content" placeholder="textbarea text" readonly></textarea>
  </div>

  <select name="marque[]" multiple disabled>
    <optgroup label="cars">
      <option value="bmw" >BMW</option>
      <option value="fmc" selected>Ford</option>
      <option value="saab">Saab</option>
    </optgroup>
  </select>

<fieldset>
  <legend>Terms & Conditions</legend>
  <div>
    <input type="checkbox" name="terms[]" value="yes"  id="terms">
    <label for="terms">I agree to the terms</label>
    <label><input type="checkbox" name="terms[]" value="no" > I agree to the terms</label>
  </div>
</fieldset>

<fieldset>
  <legend>Which colour?</legend>
  <div>


    <input type="radio" name="colour2" value="blue" checked id="colour1"><label for="colour1">Blue</label><br>
    <input type="radio" name="colour2" value="red" id="colour2"><label for="colour2">Red</label><br>
    <label><input type="radio" name="colour2" value="green" >Green</label><br>
  </div>
</fieldset>




  <button>Send</button>
</form>


</body>
</html>

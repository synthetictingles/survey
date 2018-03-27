<!DOCTYPE html>
<html>
<body>
<head>
<script src="js/videopause.js"></script>
<script src="js/timer.js"></script>
<script src="js/hideshow.js"></script>
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
<div>
  <?php
      $keys = array('amount','strength');
      $csv_line = array();
      foreach($keys as $key){
          array_push($csv_line,'' . $_GET[$key]);
      }
      $fname = 'survey_data.csv';
      $csv_line = implode(',',$csv_line);
      if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
      $fcon = fopen($fname,'a');
      $fcontent = $csv_line;
      fwrite($fcon,$csv_line);
      fclose($fcon);
  ?>

<div>
  <iframe id="largeplayer" type="text/html" width="640" height="390"
src="https://www.youtube.com/embed/47o--lNUd4w?enablejsapi=1;rel=0&amp;showinfo=0;autoplay=1;controls=0"
frameborder="0"></iframe>
<br>
<div>
  <br>
<form action="process.php" method="POST">
  <p class="rubrik">I watched this object for <span id="minutes"></span> minutes and <span id="seconds"></span> seconds.</p>
<hr style="height:1px; visibility:hidden;">
  <p class="rubrik">I felt warm chills..</p>

  <label class="container">
  <input type="radio" name="amount" value="zero times" onclick="zerotimes()"> zero times<br>
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="amount" value="one time" onclick="severaltimes()"> one time<br>
  <span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="amount" value="two times" onclick="severaltimes()"> two times<br>
<span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="amount" value="three times" onclick="severaltimes()"> three times<br>
<span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="amount" value="more than three times" onclick="severaltimes()"> more than three times
  <span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="amount" value="I'm not sure if I felt anything" onclick="zerotimes()"> I'm not sure if I felt anything
<span class="radio"></span>
</label>

  <br>

<div display="none" style="display: none" id="hideshow">
  <p class="rubrik">I would describe the chills as..</p>

  <label class="container">
  <input type="radio" name="strength" value="extremely weak"> extremely weak
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="strength" value="very weak"> very weak
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="strength" value="weak"> weak
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="strength" value="moderate"> moderate
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="strength" value="strong"> strong
  <span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="strength" value="very strong"> very strong
<span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="strength" value="extremely strong"> extremely strong
<span class="radio"></span>
</label>

<br>
  <p class="rubrik">The chills lasted for..</p>

  <label class="container">
  <input type="radio" name="duration" value="less than a second"> less than a second
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="duration" value="one second"> one second
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="duration" value="two seconds"> two seconds
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="duration" value="three seconds"> three seconds
  <span class="radio"></span>
</label>

  <label class="container">
  <input type="radio" name="duration" value="four seconds"> four seconds
  <span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="duration" value="five seconds"> five seconds
<span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="duration" value="more than five seconds"> more than five seconds
<span class="radio"></span>
</label>

<label class="container">
<input type="radio" name="duration" value="I'm not sure how long they lasted"> I'm not sure
<span class="radio"></span>
</label>

  <br>
</div>


  <p class="rubrik">In terms of relaxation, I would describe this experience as..</p>
  <label class="container">
  <input type="radio" name="relaxing" value="not at all relaxing"> not at all relaxing<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="relaxing" value="slightly relaxing"> slightly relaxing<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="relaxing" value="moderatly relaxing"> moderatly relaxing<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="relaxing" value="very relaxing"> very relaxing<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="relaxing" value="extremely relaxing"> extremely relaxing<br>
  <span class="radio"></span>
  </label>
  <label class="container">
  <input type="radio" name="relaxing" value="I'm not sure if it was relaxing"> I'm not sure<br>
  <span class="radio"></span>
  </label>
  <br>

  <p class="rubrik">In terms of stress, I would describe this experience as..</p>
  <label class="container">
  <input type="radio" name="stressful" value="not at all stressful"> not at all stressful<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="stressful" value="slightly stressful"> slightly stressful<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="stressful" value="moderatly stressful"> moderatly stressful<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="stressful" value="very stressful"> very stressful<br>
  <span class="radio"></span>
</label>
  <label class="container">
  <input type="radio" name="stressful" value="extremely stressful"> extremely stressful<br>
  <span class="radio"></span>
  </label>
  <label class="container">
  <input type="radio" name="stressful" value="I'm not sure if it was stressful"> I'm not sure<br>
  <span class="radio"></span>
  </label>
  <br>
  <br> <br>

<input type="submit" class="submit" value="Continue">

  <br> <br>  <br>
</form>
</div>


</body>
</html>

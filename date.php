<?php
$day = $_POST['day'] || 31;
$month = $_POST['month'] || 8;
$year = $_POST['year'] || 2012;

$date = new DateTime("$year-$month-$day");
echo $date->format(DateTime::RFC822) ."<br />";
echo $date->getTimestamp();
echo "<br />";
echo date(DateTime::RFC822,'1346342400'); //returns date format from timestamp. also explore mktime() function and strftime() function.
echo "<br />";
?>
<form method='post'>
Day: 
<select name='day'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='21'>21</option>
<option value='31'>31</option>

</select>
Month: 
<select name='month'>
<option value='1'>January</option>
<option value='2'>February</option>
<option value='3'>March</option>
<option value='8'>August</option>
</select>

Year:
<select name='year'>
<option value='2009'>2009</option>
<option value='2010'>2010</option>
<option value='2011'>2011</option>
<option value='2012'>2012</option>

</select>
<input type='submit'>
</form>

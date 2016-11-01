<?php
//make connection to database
mysql_connect("localhost","inmoti5_mysite","mypassword");

//select database
mysql_select_db("inmoti5_mysite");

$sql="SELECT * FROM comments ORDER BY timestamp";


$records=mysql_query($sql);




?>


<html>

<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
Get Started
<title>Tutor Data</title>
</head>

<body>

<table width="600" border="1" cellpadding="1" cellspacing="1" class="pure-table">
<thead>
<tr>

<th>timestamp</th>
<th>Name</th>
<th>Where In The Writing Process Are You</th>
<th>What is The Writing Assignment	</th>
<th>Describe The Assignment</th>
<th>When is the Assignment Due</th>
<th>Who Is Your Teacher	</th>
<th>Prefered Tutor</th>
<th>SelectingATopic</th>
<th>Research</th>
<th>Brainstorming</th>
<th>Supporting details</th>
<th>Transitions</th>
<th>Intro/Conclusion</th>
<th>Incorporating/Citing quotes</th>
<th>Grammar/Spelling</th>
<th>Voice/Style</th>
<th>Other</th>

<tr>
</thead>


<?php
while($comments=mysql_fetch_assoc($records)){
	
echo "<tr>";

echo "<td>".$comments['timestamp']."</td>";
echo "<td>".$comments['name']."</td>";
echo "<td>".$comments['Where In The Writing Process Are You']."</td>";
echo "<td>".$comments['What is The Writing Assignment']."</td>";
echo "<td>".$comments['Describe The Assignment']."</td>";
echo "<td>".$comments['When is the Assignment Due']."</td>";
echo "<td>".$comments['Who Is Your Teacher']."</td>";
echo "<td>".$comments['Prefered Tutor']."</td>";
echo "<td>".$comments['SelectingATopic']."</td>";
echo "<td>".$comments['Research']."</td>";
echo "<td>".$comments['Brainstorming']."</td>";
echo "<td>".$comments['Supporting details']."</td>";
echo "<td>".$comments['Transitions']."</td>";
echo "<td>".$comments['Intro/Conclusion']."</td>";
echo "<td>".$comments['Incorporating/Citing quotes']."</td>";
echo "<td>".$comments['Grammar/Spelling']."</td>";
echo "<td>".$comments['Voice/Style']."</td>";
echo "<td>".$comments['Other']."</td>";


echo "</tr>";

	
} //end while

?>

</table>



</body>
</html>
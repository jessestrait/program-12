<?php
$q = intval($_GET['q']);

$servername = "lineofcode.com";
$username = "itse2302001003";
$password = "8AT7SWCJ";
$message2 = "";
$dbname = "itse2302001003";
$con = new mysqli($servername, $username, $password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM teams WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Team Name</th>
<th>City</th>
<th>Best Player</th>
<th>Year Formed</th>
<th>Website</th>
</tr>";
 
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['teamname'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['bestplayer'] . "</td>";
    echo "<td>" . $row['yearformed'] . "</td>";
    echo "<td>" . $row['website'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<?php


//make connection
//mysqli_connect('localhost', 'root', '');


$link = mysqli_connect("localhost", "root", "root", "challenge", "3307") or die ('Error connecting.');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//select db
//mysqli_select_db('challenge');

$sql="SELECT productnaam, omschrijving, prijs FROM opdr1";

$records=mysqli_query($link, $sql) or die ("Error 1");

?>


<html>
<head>
<title>Opdracht1</title>
</head>

<body>

<div class="flexcontainer">
<div id="tekst">
<table width="2px">

<?php

while($opdr1=mysqli_fetch_assoc($records)) {

    echo "<tr>";

    echo "<td>" .$opdr1['productnaam']. "";

    echo "<td>" .$opdr1['omschrijving']. "" ;

    echo "<td>" .$opdr1['prijs']. "";

    echo "<tr>";
}
//end while

?>

</table>
</div>


<div id="plaatjes">

<img width= "150px" height="120px" id="nat" src="plaatjes/nat.jpg">
<img width= "150px" height="120px" id="droog" src="plaatjes/droog.jpg">
<img width= "150px" height="120px" id="vitamines" src="plaatjes/vitamines.jpg">
</div>


    <div id="laatstedingetje">

        <article id="tekstje">
            Binnenkort verkrijgbaar:
            Binnenkort verkrijgbaar
        </article>

        <img width="150px" height="120px" id="binnenkort" src="plaatjes/binnenkort.jpg">


    </div>
</div>
<style>
    .flexcontainer {
        display: flex;
        margin-left: 200px;
        margin-top: 100px;
    }
    #plaatjes {
        margin-left: 250px
        margin-top: 250px
    }
    #tekst {
        width: 16%;
    }
    img { display: block}

    #tekstje {
        width: 15%;
    }
    #laatstedingetje {
        margin-top: 100px;
        margin-left: 200px;
    }
</style>





</body>
</html>





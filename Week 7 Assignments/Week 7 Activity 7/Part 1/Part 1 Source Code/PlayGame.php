<html>
<!-- 
Project name and version: CST-126 Activity Guide.Activity_6.2
 Programmer Name: Daniel Cutrara
 Date: 6/09/2019
 Synopsis: Create classes in PHP and apply inheritance.
 -->
<head>
<title>Batman Vs Superman</title>
</head>
<body>
<h2>Batman Vs Superman</h2>

<?php
include_once 'Batman.php';
include_once 'Superman.php';

$Batman = new Batman();
$Superman = new Superman();


While(!$Batman->isDead() && !$Superman->isDead())
{
    $Batman->DetermineHealth($Superman->attack());
    $Superman->DetermineHealth($Batman->attack());
    
    echo "<label>Batman has " . $Batman->DetermineHealth(0) . " Health Points</label><br>";
    echo "<lable>Superman has " .$Superman->DetermineHealth(0) . " Health Points</label><br>";
    echo "<br>";
}

if($Batman->isDead())
{
    echo "<label>Batman is Dead! Superman wins with " . $Superman->DetermineHealth(0) . " Points remaining</label>";
}
else
{
    echo "<label>Superman is Dead! Batman wins with " . $Batman->DetermineHealth(0) . " Points remaining</label>";
}

?>
</body>
</html>
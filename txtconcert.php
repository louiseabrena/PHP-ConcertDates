<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomorrow X Together Concert Dates</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1> Act: Sweet Mirage World Tour </h1>
    <h2> Tomorrow X Together </h2>

    <?php

    $connect = mysqli_connect(
        'sql109.epizy.com',
        'epiz_33366135',
        'QssJruUhKnh',
        'epiz_33366135_txtconcerts'
    );

    if(mysqli_connect_error())
    {
        echo mysqli_connect_error();
        exit();
    }

    $query = "SELECT * 
        FROM concerts
        ORDER BY date ASC";
    $result = mysqli_query($connect, $query)
        or die(mysqli_error($connect));

    while($concerts = mysqli_fetch_assoc($result))
    {
        echo '<div class="concerts">';
        echo '<img src="'.$concerts['poster'].'" width = 300>';
        echo '<div class="concertInfo">';
        echo '<h2> ACT: Sweet Mirage in '.$concerts['city'].'</h2>';
        echo '<p> Venue: '.$concerts['venue'].'</p>';
        echo '<p> Date: '.$concerts['date'].'</p>';
        echo '<a href="'.$concerts['ticket'].'">Buy your ticket here</a>';
        echo '</div>';
        echo '</div>';
    }

    ?>

</body>
</html>
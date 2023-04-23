<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    
    //creazione di array differenti per il controllo siParcheggio/NoParcheggio
    $newHotels = [];
    $noParking = [];
    $yesParking =[];

    foreach($hotels as $hotel) {
        if($hotel['parking'] == false) {
            $noParking[] = $hotel;

        } elseif($hotel['parking'] == true) {
            $yesParking[] = $hotel;
        }
    };

    //controllo del valore booleano del Parcheggio dalla select 

    if(isset($_GET['parking'])) {

        if($_GET['parking'] == '1') {

            $newHotels = $yesParking;
                
        } elseif ($_GET['parking'] == '0') {

            $newHotels = $noParking;

        } else {

            $newHotels = $hotels;
        }
    }



?>

    <header>
        <h1 class=text-center >Boo-king</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <!--scelta se parcheggio si parcheggio no-->
                <form action="index.php" method="GET">
                    <select class="form-select col-2 w-25" aria-label="Default select example" name="parking">
                        <option value="" selected>Tutti</option>
                        <option value="0">No</option>
                        <option value="1">Si</option>
                    </select>
                    <button type="submit" class="btn btn-primary" name="submit">invia</button>
                </form>
                <table class="table">

                <!--creazione dinamica della lista degli hotels-->

                <thead>
                    <tr> 
                        <th><?php echo 'name' ?></th>
                        <th><?php echo 'description' ?></th>
                        <th><?php echo 'parking' ?></th>
                        <th><?php echo 'vote' ?></th>
                        <th><?php echo 'distance_to_center' ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        foreach($newHotels as $hotel) { ?>
                    <tr>
                        <th scope="row"><?php echo $hotel['name']; ?></th>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking']?'presente':'assente'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?></td>
                        <?php };
                    ?>
                    </tr>
                </tbody>
                </table>
        </div>
        </div>
        
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
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

    $title = '';
    $description = '';

    foreach($hotels as $hotel) {

        foreach($hotel as $key => $data) {
            echo  $key .'-'. $data . '<br>';
            
            
        }
    };

?>

    <header>
        <h1 class=text-center >Boo-king</h1>
    </header>

    <main>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">nome</th>
            <th scope="col"><?php echo $hotels[0]['name']; ?></th>
            <th scope="col"><?php echo $hotels[1]['name']; ?></th>
            <th scope="col"><?php echo $hotels[2]['name']; ?></th>
            <th scope="col"><?php echo $hotels[3]['name']; ?></th>
            <th scope="col"><?php echo $hotels[4]['name']; ?></th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Descrizione</th>
            <td><?php echo $hotels[0]['description']; ?></td>
            <td><?php echo $hotels[1]['description']; ?></td>
            <td><?php echo $hotels[2]['description']; ?></td>
            <td><?php echo $hotels[3]['description']; ?></td>
            <td><?php echo $hotels[4]['description']; ?></td>
            </tr>
            <tr>
            <th scope="row">Parcheggio</th>
            <td><?php echo $hotels[0]['parking']; ?></td>
            <td><?php echo $hotels[1]['parking']; ?></td>
            <td><?php echo $hotels[2]['parking']; ?></td>
            <td><?php echo $hotels[3]['parking']; ?></td>
            <td><?php echo $hotels[4]['parking']; ?></td>
            </tr>
            <tr>
            <th scope="row">Voto</th>
            <td><?php echo $hotels[0]['vote']; ?></td>
            <td><?php echo $hotels[1]['vote']; ?></td>
            <td><?php echo $hotels[2]['vote']; ?></td>
            <td><?php echo $hotels[3]['vote']; ?></td>
            <td><?php echo $hotels[4]['vote']; ?></td>
            </tr>
            <th scope="row">Distanza dal centro</th>
            <td><?php echo $hotels[0]['distance_to_center']; ?></td>
            <td><?php echo $hotels[1]['distance_to_center']; ?></td>
            <td><?php echo $hotels[2]['distance_to_center']; ?></td>
            <td><?php echo $hotels[3]['distance_to_center']; ?></td>
            <td><?php echo $hotels[4]['distance_to_center']; ?></td>
            </tr>
        </tbody>
        </table>
        
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
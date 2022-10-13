<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
 -->

 <?php 
//  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    $basketTeams = array(
        [
           "home" => [
                "name" => "Milano",
                "score" => 65
            ],
            "opponents" => [
                "name" => "Venezia",
                "score" => 80
            ]
        ],
        [
            "home" => [
                 "name" => "Padova",
                 "score" => 30
            ],
             "opponents" => [
                 "name" => "Torino",
                 "score" => 50
            ]
        ],
    );
    // Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60
    foreach($basketTeams as $match): ?>
    <div>
    <?= "{$match["home"]["name"]}"?>
     VS <?= "{$match["opponents"]["name"]}"?>
    |
    <?= "{$match["home"]["score"]}"?>
     - <?= "{$match["opponents"]["score"]}"?>
    </div>
    <? endforeach ?>




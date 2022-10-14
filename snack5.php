<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<style>
    .grid{
        display: flex;
        gap: 3rem;
        padding: 3rem;
    }
</style>
 <?php 
 $classe= [
    ["id"=>1,
    "name"=> "isacco",
    "cognome"=> "tacco",
    "voti"=>[
        "scienze"=>7,
        "storia"=> 8,
        "matematica"=>7.5
    ]],
    ["id"=>2,
    "name"=> "marco",
    "cognome"=> "varco",
    "voti"=>[
        "scienze"=>9,
        "storia"=> 7.5,
        "matematica"=>8
    ]],
    ["id"=>3,
    "name"=> "pietro",
    "cognome"=> "pietra",
    "voti"=>[
        "scienze"=>10,
        "storia"=> 9,
        "matematica"=>5
    ]],
];
?>
<div class="grid">
<?php
foreach ($classe as $alunno) : ?>
<div>
 <p><?php echo "{$alunno["name"]}"?></p>
 <p><?php echo "{$alunno["cognome"]}"?></p>
 <p><?php 
 $count = count($alunno["voti"]);
 

  $somma = array_sum($alunno["voti"]);

//  echo "$somma" / "$count";
$media =($somma / $count);
  echo (round($media, 2));
 ?></p>
 </div>
<?php endforeach ?>
</div>
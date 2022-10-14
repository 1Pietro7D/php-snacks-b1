<!--
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto
e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php
$validMails = [
    'pietro@gmail.com',
    'ale@gmail.com',
    'franco@gmail.com',
    'vale@gmail.com',
];
$mail = '';
if( isset($_GET['mail']) ):
    $mail = $_GET['mail'];
endif ?>

<p> <?= "{$mail}" ?></p>

<?php
$hasSnail = strpos($mail, '@' );
if ($hasSnail):
    $checkPoint = explode("@", $mail);
    $hasPoint =  strpos($checkPoint[1], '.' );
    if ($hasPoint):
        $hasAt = true;
    else: ?>
    <p>La chiocciola deve essere seguita da un punto</p>
    <?php
    endif;
else: ?>
<p>Deve comprendere una @</p>
<?php
endif;
    if ($hasAt):
       
        if (in_array($mail, $validMails)) : ?>
           <p>Sei autorizzato</p>
           <?php else: ?> 
            <p>Non sei autorizzato</p>
        <?php endif;       
    else:
?>
    <p>Manca un email corretta
    </p>
<?php
    endif
?>

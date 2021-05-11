<?php
$adminEmail = 'rstefano99@gmail.com';
$userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$userMessage = '
  <html>
    <head>
      <title>Grazie per aver contattato Antichità Zotti</title>
    </head>
    <body>
      <h1>Grazie per avermi contattato.</h1>
      <p>Questa mail è stata generata automaticamente. Ti risponderò al più presto.</p>
      <p>Pietro Maria Zotti</p>
    </body>
  </html>
';
$adminMessage = "
  <html>
    <head>
      <title>Contatto dal sito web</title>
    </head>
    <body>
      <h1>Hai un nuovo contatto dal tuo sito web</h1>
      <ul>
        <li>Nome: {$_POST['name']}</li>
        <li>E-mail: {$userEmail}</li>
        <li>Messaggio: {$_POST['message']}</li>
      </ul>
    </body>
  </html>
";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Da: Pietro Maria Zotti <rstefano99@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($userEmail, 'Richiesta di contatto effettuata con successo', $userMessage, $headers);
mail($adminEmail, 'Richiesta di contatto dal sito web', $adminMessage, $headers);
$newURL="http://www.zottiantiquariato.it/.it/";
header('Location: '.$newURL);

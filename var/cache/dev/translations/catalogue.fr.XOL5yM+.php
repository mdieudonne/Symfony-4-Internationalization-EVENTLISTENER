<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Bonjour !',
  ),
));


return $catalogue;

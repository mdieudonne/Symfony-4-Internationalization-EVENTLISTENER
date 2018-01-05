<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Bonjour !',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Good Morning !',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;

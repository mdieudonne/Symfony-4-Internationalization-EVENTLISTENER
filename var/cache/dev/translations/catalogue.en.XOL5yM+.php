<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Good Morning !',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Bonjour !',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;

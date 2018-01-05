<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nl', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Goedendag !',
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

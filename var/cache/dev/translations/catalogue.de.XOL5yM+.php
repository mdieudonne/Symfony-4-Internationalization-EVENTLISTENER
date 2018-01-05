<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Guten Tag !',
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

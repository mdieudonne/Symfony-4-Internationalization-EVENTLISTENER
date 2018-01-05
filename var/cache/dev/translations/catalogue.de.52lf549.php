<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Guten Tag !',
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

<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nl', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Goedendag !',
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

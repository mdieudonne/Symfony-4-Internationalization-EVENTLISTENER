<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'messages' => 
  array (
    'messages.goodmorning' => 'Good Morning !',
  ),
));


return $catalogue;

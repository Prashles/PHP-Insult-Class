<?php

require_once 'classes/insult.class.php';

echo Insult::named('Alex') , '<br/>', Insult::random();

//

echo 'You' , Insult::random(), '!';

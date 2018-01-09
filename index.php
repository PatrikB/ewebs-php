<?php

    require_once 'ewebs/init.php';

    \Ewebs\Ewebs::setApiKey("9g3xyx9GHzvjZaAicz9c8y4MReF5Ww70DgBXV22azg5s5SC3Au5zVDdZOWLe");
    
    /**
     * \Ewebs\Values::create($form_id, $values($key => $value));
     *
     * Example:
     * 
     * @param int $form_id
     * @param array $values
     *
     * @return Values
     *
     * $response = \Ewebs\Values::create(
     *		1,
     *  	array(
     *      	'kon' => 'Man',
     *      	'fornamn' => 'Testförnamn',
     *      	'efternamn' => 'Testefternamn',
     *      	'email' => 'Testemail',
     *      	'mobilnummer' => 'mobbenummer'
     *  	)
     * );
     *
     */
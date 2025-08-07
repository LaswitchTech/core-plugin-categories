<?php

// Import additionnal class into the global namespace
use \LaswitchTech\Core\Base\BaseEndpoint;

class CategoriesEndpoint extends BaseEndpoint {

    /**
     * Constructor
     */
    public function __construct()
    {
        // Call the parent constructor
        parent::__construct();

        // Initialize the Endpoint
        $this->init('categories');
    }
}

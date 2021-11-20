<?php

use Illuminate\Encryption\Encrypter;


# Function to get system config
function getConfig($config)
{   
    return config("system.$config");
}

<?php
/**
    TOPIC: COOKIES
    save data in remote cache/ browsers
    retrive it when user visits the site again

    NAME: LE VIET KHANH
    CLASS: CD22TT11
    ID: 22211TT2577
    DATE: 2023/08/02
*/

// save data in local cache
setcookie('name', 'Kane', time() + 24*3600);

echo $_COOKIE['name'];

setcookie('name','', time() - 24*3600 ); //delete old cookie

?>
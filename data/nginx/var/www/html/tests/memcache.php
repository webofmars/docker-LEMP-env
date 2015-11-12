<?php

    $mem  = new Memcached();

    $mem->addServer('memcached',11211);

    if( $mem->add("mystr","this is a memcache test!",3600)){
        echo  'Stored the value in memcached try to refresh now';
    } else {
        echo 'Just get the value from memcache ! mystr is "'.$mem->get("mystr").'"';
    }

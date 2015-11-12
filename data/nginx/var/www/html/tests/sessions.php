<?php

    echo 'Session starting...<br />';
    session_start();
     
    echo 'Session started...<br />';
     
    $_SESSION['favcolor'] = 'green';
    $_SESSION['animal']   = 'cat';
    $_SESSION['time']    = time();
     
    echo 'Your SID is '.session_id().'<br/>';
    echo 'and your favorite color is '. $_SESSION['favcolor'].'<br />';

    echo '<br /><a href="/index.php?' . session_id() . '" data-lbox="1" title="Home">Back to home !</a>';

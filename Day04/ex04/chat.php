<?php
    session_start();
    if (!($_SESSION['logged_on_user']))
        echo "ERROR\n";
    else {
        if (file_exists('../private') && file_exists('../private/chat')) {
            $chat = unserialize(file_get_contents('../private/chat'));
            foreach ($chat as $value) {
                echo "[" . date('H:i', $value['time']) . "] <b>" . $value['login'] . "</b>: " . $value['msg'] . "<br />";
            }
        }
    }
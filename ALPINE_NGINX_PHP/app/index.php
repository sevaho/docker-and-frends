<?php

    phpinfo();

    function consolelog ($data) {

        if (is_array( $data))

            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data ) . "'  );</script>";

        else

            $output = "<script>console.log( 'Debug Objects: " . $data . "'  );</script>";

        echo $output;
    }

    consolelog("Test");

?>




<?php

    $servers = array("mc.hypixel.net", "test.example.com");

    foreach($servers as $server){

        $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' . $server));

        if($status->online === true){

                echo '<div class="server">';

                            echo '<h2>' . $status->hostname . '</h2>';

                            echo '<div class="motd">';
                            echo '<img alt="' . $status->hostname .  '" class="banner" src="./banners/' . $status->hostname . '.gif" />';
                            echo '</div>';

                            echo '<div clas="players">';
                            echo '<h2 class="white">' . $status->players->online . '/' . $status->players->max . '</h2>';

                            echo '<h2 class="white">' . $status->version . '</h2>';
                            echo '</div>';

                            echo '<h2 class="online"> Online </h2>';
                echo '</div>';
                echo '<br/>';

            } else {

                echo '<div class="server">';

                            echo '<h2>' . $status->hostname || 'none' . '</h2>';

                            echo '<div class="motd">';
                                echo '<h2> none </h2>';
                            echo '</div>';

                            echo '<div clas="players">';
                            echo '<h2 class="white"> 0/0 </h2>';

                            echo '<h2 class="white"> unknown </h2>';
                            echo '</div>';

                            echo '<h2 class="offline"> Offline </h2>';
                echo '</div>';
                echo '<br/>';

            }
        };
?>
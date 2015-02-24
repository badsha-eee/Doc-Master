<?php

function doc_master(){
	echo "";
}

add_action(wp_enqueue_scripts, doc_master() );

?>
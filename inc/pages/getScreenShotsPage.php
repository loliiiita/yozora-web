<?php

class Screenshots {
	const PageID = 420;
	const URL = 'Screenshots';
	const Title = 'Yozora - Screenshots';

	public function P() {
        $userid = $_GET["id"];
       
		$screenshots = $GLOBALS["db"]->fetchAll("SELECT * FROM screenshots WHERE userid = ?", $userid);
		//$c = 0;
        $user = $GLOBALS["db"]->fetchAll("SELECT * FROM users_stats WHERE id = ?", $userid);
        $username = $user["username"];
        P::GlobalAlert();
		echo '
		<div id="content">
			<div align="center">
                <h1><i class="fa fa-image"></i> '.$username.'\'s Screenshots </h1>
				<div class="container">
				';
            foreach ($screenshots as $j => $ss) {
                $ssid = $ss["ssid"];
                echo "<a href='https://yozora.pw/ss/'".$ssid.".jpg'><img src='https://yozora.pw/ss/'".$ssid.".jpg' /></a><br>";
            } // probably wont work lol
			echo '</div>
			</div>
		</div>';
	}
}

<?php


class CreateClan {
	const PageID = 231;
	const URL = 'CreateCkan';
	const Title = 'Yozora - Create A Clan';
	const LoggedIn = true;

	public function P() { 
		P::GlobalAlert();
		P::MaintenanceStuff();

		echo "<h2> Create a new clan </h2>";
		echo '<form action="/submit.php&csrf='.csrfToken().'" method="POST"> 
		<input name="action" value="createClan" hidden>
		<div class="input-group"><span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" max-width="25%"></span></span><input type="text" name="c" required class="form-control" placeholder="Clan Name" aria-describedby="basic-addon1"></div><p style="line-height: 15px"></p>
		<div class="input-group"><span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" max-width="25%"></span></span><input type="text" name="t" required class="form-control" placeholder="Clan Tag" aria-describedby="basic-addon1"></div><p style="line-height: 15px"></p>
		<button type="submit" class="btn btn-primary">Create the clan!</button>
		</form>';
	}
}

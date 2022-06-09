<form id="regularSearchForm" method="post" action="https://evov2.faregrabbr.com/remoteflightmultisearch.php" novalidate target="_blank" class="form-horizontal">
	<!-- <form id="regularSearchForm" method="post" action="#" novalidate target="_blank" class="form-horizontal d-form"> -->
	<input type="hidden" name="useragent" value="email=ithelp@archertravel.com&lastname=Admin&firstname=Support&agentid=2&sponsorid=&phone=8182481511&sitename=Support">
	<input type="hidden" name="class" value="Economy">
	<div class="tour-search-one__inputs">
		<div class="tour-search-one__input-box">
			<label for="type" class="searchAs">Search As</label>
			<select name="type" id="air_type" class="selectpicker">
				<option value="roundtrip">Round Trip</option>
				<option value="oneway">One Way</option>
				<option value="multicity">Multi City</option>
			</select>
		</div>
		<div class="tour-search-one__input-box">
			<label for="when">Origin Airport Code</label>
			<input type="text" name="citypairs[0][origin]" id="origin" list="origin-list" autocomplete="off" placeholder="Origin">
		</div>
		<div class="tour-search-one__input-box">
			<label for="when">Destination Airport Code</label>
			<input type="text" name="citypairs[0][destination]" id="destination" list="dest-list" autocomplete="off" placeholder="Destination">
		</div>
		<div class="tour-search-one__input-box">
			<label for="when">Depart Date</label>
			<input type="date" name="citypairs[0][departdate]" id="depart" min="2022-06-09" allowInputToggle="true">
		</div>
		<div class="tour-search-one__input-box">
			<label for="when">Return Date</label>
			<input type="date" name="citypairs[0][returndate]" id="return" min="2022-06-09">
		</div>
		<div class="tour-search-one__input-box">
			<label for="when">Adults</label>
			<input value="1" class="textbox-n " type="number" name="adults" id="adults" min="1">
		</div>
		<div class="tour-search-one__input-box">
			<label for="when">Children</label>
			<input value="0" class="textbox-n " type="number" name="children" id="children" min="0">
		</div>
		<div class="tour-search-one__btn-wrap">
			<button type="submit" id="flightButton1" class="thm-btn tour-search-one__btn">Find now</button>
		</div>
		<!-- /.tour-search-one__btn-wrap -->
	</div>
	<!--<div class="append-div hide lower-group" style="padding:15px; margin-left:30px;"></div><div id="multiDiv" class="form-group col-sm-12 btnDiv multiDiv hide lower-group"><button id="multiButton" class="multi-button btn btn-sm hide addOrigin btn-sample btn-fare" type="button">Add City</button></div><div class="row bottom-group hide lower-group"></div> -->
	<input type="hidden" name="isWidget" value="true">
</form>
</div>

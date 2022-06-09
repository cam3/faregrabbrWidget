<!DOCTYPE html>
<html>
<head>
<title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://evotravelagent.com/assets/application-debb03a2cb3afb2e43c0eb0df3536024ffc3ef960306bad9fb5a0d65f5e42726.css" />
</head>
<body>

<!-- Nav tabs -->
	<ul id="myTabs" class="nav nav-tabs" role="tablist">
		<li class="myTabs" role="presentation">
			<a class="active" href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
		</li>
		<li class="myTabs" role="presentation">
			<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
		</li>
		<li class="myTabs" role="presentation">
			<a href="#cars" aria-controls="cars" role="tab" data-toggle="tab">Cars</a>
		</li>
		<!-- <li class="myTabs" role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Cruises / Vacations</a></li> -->
	</ul>
	<div class="tour-search-one">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active show tour-search-one__inner" id="flights">
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
			<div role="tabpanel" class="tab-pane fade tour-search-one__inner" id="hotels">
				<form id="hotelSearchForm" method="post" action="https://evov2.faregrabbr.com/remotehotelsearchwidget.php" novalidate target="_blank" class="form-horizontal">
					<!-- <form id="hotelSearchForm" method="post" action="#" novalidate target="_blank" class="form-horizontal d-form"> -->
					<input type="hidden" name="useragent" value="email=ithelp@archertravel.com&lastname=Admin&firstname=Support&agentid=2&sponsorid=&phone=8182481511&sitename=Support">
					<input id="locationType1" type="hidden" name="locationType" value="">
					<div class="tour-search-one__inputs">
						<div class="tour-search-one__input-box">
							<label for="place">City / Airport</label>
							<input type="text" name="place" id="place" list="place-list" autocomplete="off" placeholder="City / Airport">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Check In</label>
							<input type="date" name="checkin" id="checkin" min="2022-06-09">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Check Out</label>
							<input type="date" name="checkout" id="checkout" min="2022-06-09">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Rooms</label>
							<input type="number" name="numrooms" id="numrooms" min="1" value="1">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Guests</label>
							<input type="number" name="adults" id="adults-hotel" min="1" value="1">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__btn-wrap">
							<button type="submit" id="flightButton2" class="thm-btn tour-search-one__btn">Find now</button>
						</div>
						<!-- /.tour-search-one__btn-wrap -->
					</div>
					<input type="hidden" name="isWidget" value="true">
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade tour-search-one__inner" id="cars">
				<form id="carSearchForm" method="post" action="https://evov2.faregrabbr.com/remotecarsearchwidget.php" novalidate target="_blank" class="form-horizontal">
					<!-- <form id="carSearchForm" method="post" action="#" novalidate target="_blank" class="form-horizontal d-form"> -->
					<input type="hidden" name="useragent" value="email=ithelp@archertravel.com&lastname=Admin&firstname=Support&agentid=2&sponsorid=&phone=8182481511&sitename=Support">
					<input id="locationType2" type="hidden" name="locationType" value="">
					<div class="tour-search-one__inputs">
						<div class="tour-search-one__input-box">
							<label for="place">Pickup Airport Code</label>
							<input type="text" name="pickup_location" id="pickup_location" list="pickup-list" autocomplete="off" placeholder="Pickup Airport Code">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Dropoff Airport Code</label>
							<input type="text" name="dropoff_location" class="dropoff" id="dropoff_location" list="dropoff-list" autocomplete="off" placeholder="If Different">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Pickup Date</label>
							<input type="date" name="pickup_date" id="pickup_date" min="2022-06-09">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="type">Pickup Time</label>
							<select name="pickup_time" class="selectpicker car-select" id="pickup_time1">
								<option value="12:00:00">Noon</option>
								<option value="13:00:00">1:00 PM</option>
								<option value="14:00:00">2:00 PM</option>
								<option value="15:00:00">3:00 PM</option>
								<option value="16:00:00">4:00 PM</option>
								<option value="17:00:00">5:00 PM</option>
								<option value="18:00:00">6:00 PM</option>
								<option value="19:00:00">7:00 PM</option>
								<option value="20:00:00">8:00 PM</option>
								<option value="21:00:00">9:00 PM</option>
								<option value="22:00:00">10:00 PM</option>
								<option value="23:00:00">11:00 PM</option>
								<option value="00:00:00">Midnight</option>
								<option value="01:00:00">1:00 AM</option>
								<option value="02:00:00">2:00 AM</option>
								<option value="03:00:00">3:00 AM</option>
								<option value="04:00:00">4:00 AM</option>
								<option value="05:00:00">5:00 AM</option>
								<option value="06:00:00">6:00 AM</option>
								<option value="07:00:00">7:00 AM</option>
								<option value="08:00:00">8:00 AM</option>
								<option value="09:00:00">9:00 AM</option>
								<option value="10:00:00">10:00 AM</option>
								<option value="11:00:00">11:00 AM</option>
							</select>
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="place">Dropoff Date</label>
							<input type="date" name="dropoff_date" id="dropoff_date" min="2022-06-09">
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__input-box">
							<label for="type">Dropoff Time</label>
							<select name="dropoff_time" class="selectpicker car-select" id="pickup_time2">
								<option value="12:00:00">Noon</option>
								<option value="13:00:00">1:00 PM</option>
								<option value="14:00:00">2:00 PM</option>
								<option value="15:00:00">3:00 PM</option>
								<option value="16:00:00">4:00 PM</option>
								<option value="17:00:00">5:00 PM</option>
								<option value="18:00:00">6:00 PM</option>
								<option value="19:00:00">7:00 PM</option>
								<option value="20:00:00">8:00 PM</option>
								<option value="21:00:00">9:00 PM</option>
								<option value="22:00:00">10:00 PM</option>
								<option value="23:00:00">11:00 PM</option>
								<option value="00:00:00">Midnight</option>
								<option value="01:00:00">1:00 AM</option>
								<option value="02:00:00">2:00 AM</option>
								<option value="03:00:00">3:00 AM</option>
								<option value="04:00:00">4:00 AM</option>
								<option value="05:00:00">5:00 AM</option>
								<option value="06:00:00">6:00 AM</option>
								<option value="07:00:00">7:00 AM</option>
								<option value="08:00:00">8:00 AM</option>
								<option value="09:00:00">9:00 AM</option>
								<option value="10:00:00">10:00 AM</option>
								<option value="11:00:00">11:00 AM</option>
							</select>
						</div>
						<!-- /.tour-search-one__input-box -->
						<div class="tour-search-one__btn-wrap">
							<button type="submit" id="flightButton3" class="thm-btn tour-search-one__btn">Find now</button>
						</div>
						<!-- /.tour-search-one__btn-wrap -->
					</div>
					<input type="hidden" name="pickup_locationType" value="Airport">
					<input type="hidden" name="dropoff_locationType" value="Airport">
					<input type="hidden" name="isWidget" value="true">
				</form>
			</div>
		</div>
	</div>
	<!-- /.container -->

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://evotravelagent.com/assets/application-debb03a2cb3afb2e43c0eb0df3536024ffc3ef960306bad9fb5a0d65f5e42726.css" />
<script src="https://evotravelagent.com/assets/application-fbb2e4dc4ffa98a8714cc83a9c35a5578ba39926da7c1783d27297e1861c0687.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
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

<datalist id="origin-list">
</datalist>

<datalist id="dest-list">
</datalist>

<datalist id="place-list">
</datalist>

<datalist id="pickup-list">
</datalist>

<datalist id="dropoff-list">
</datalist>

<!-- Call Modal -->

<div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><h3 class="modal-title modalh3" id="contactModalLabel">CALL SUPPORT</h3>
        <button type="button" id="contact-close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form id="callform" role="form" action="/call" method="POST">
  	<input name="authenticity_token" value="hzfzcVR1hJgW0kAutyc4R2AEmM2GUX/laEK0KE4DXN2nDVEm+prDmDVyIl8ZdaGBBD6T+c/Pmb2AWEYOWrj23w==" type="hidden">
     <input type="hidden" name="salesPhone" id="salesPhone" value="8182481511">
      <div class="row">
        <div class="form-group">
            <label for="userPhone" class="col-sm-2 control-label">Your Number</label>
            <div class="col-sm-8">
     			<input type="text" name="userPhone" id="userPhone" placeholder="(651)-555-7889">
            </div>
            <div class="col-sm-2 btn-col btn-col-call">
                <button class="btn btn-contact">CALL</button>
            </div>
        </div>
      </div>
<!--       <div class="row contact-sub">
        <div class="form-group">
            <div class="col-sm-12 btn-col btn-col-call">
                <button class="btn btn-contact">CALL</button>
            </div>
        </div> -->
      <!-- </div> -->
    </form>
      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<!-- Confirm Modal -->

<script type="text/javascript">
!function(b){"use strict";var e={slide:0,delay:5e3,loop:!0,preload:!1,preloadImage:!1,preloadVideo:!1,timer:!0,overlay:!1,autoplay:!0,shuffle:!1,cover:!0,color:null,align:"center",valign:"center",firstTransition:null,firstTransitionDuration:null,transition:"fade",transitionDuration:1e3,transitionRegister:[],animation:null,animationDuration:"auto",animationRegister:[],slidesToKeep:1,init:function(){},play:function(){},pause:function(){},walk:function(){},slides:[]},n={},t=function(t,s){this.elmt=t,this.settings=b.extend({},e,b.vegas.defaults,s),this.slide=this.settings.slide,this.total=this.settings.slides.length,this.noshow=this.total<2,this.paused=!this.settings.autoplay||this.noshow,this.ended=!1,this.$elmt=b(t),this.$timer=null,this.$overlay=null,this.$slide=null,this.timeout=null,this.first=!0,this.transitions=["fade","fade2","blur","blur2","flash","flash2","negative","negative2","burn","burn2","slideLeft","slideLeft2","slideRight","slideRight2","slideUp","slideUp2","slideDown","slideDown2","zoomIn","zoomIn2","zoomOut","zoomOut2","swirlLeft","swirlLeft2","swirlRight","swirlRight2"],this.animations=["kenburns","kenburnsLeft","kenburnsRight","kenburnsUp","kenburnsUpLeft","kenburnsUpRight","kenburnsDown","kenburnsDownLeft","kenburnsDownRight"],this.settings.transitionRegister instanceof Array==!1&&(this.settings.transitionRegister=[this.settings.transitionRegister]),this.settings.animationRegister instanceof Array==!1&&(this.settings.animationRegister=[this.settings.animationRegister]),this.transitions=this.transitions.concat(this.settings.transitionRegister),this.animations=this.animations.concat(this.settings.animationRegister),this.support={objectFit:"objectFit"in document.body.style,transition:"transition"in document.body.style||"WebkitTransition"in document.body.style,video:b.vegas.isVideoCompatible()},!0===this.settings.shuffle&&this.shuffle(),this._init()};t.prototype={_init:function(){var t,s,i,e="BODY"===this.elmt.tagName,n=this.settings.timer,o=this.settings.overlay,a=this;this._preload(),e||(this.$elmt.css("height",this.$elmt.css("height")),t=b('<div class="vegas-wrapper">').css("overflow",this.$elmt.css("overflow")).css("padding",this.$elmt.css("padding")),this.$elmt.css("padding")||t.css("padding-top",this.$elmt.css("padding-top")).css("padding-bottom",this.$elmt.css("padding-bottom")).css("padding-left",this.$elmt.css("padding-left")).css("padding-right",this.$elmt.css("padding-right")),this.$elmt.clone(!0).children().appendTo(t),this.elmt.innerHTML=""),n&&this.support.transition&&(i=b('<div class="vegas-timer"><div class="vegas-timer-progress">'),this.$timer=i,this.$elmt.prepend(i)),o&&(s=b('<div class="vegas-overlay">'),"string"==typeof o&&s.css("background-image","url("+o+")"),this.$overlay=s,this.$elmt.prepend(s)),this.$elmt.addClass("vegas-container"),e||this.$elmt.append(t),setTimeout(function(){a.trigger("init"),a._goto(a.slide),a.settings.autoplay&&a.trigger("play")},1)},_preload:function(){var t;for(t=0;t<this.settings.slides.length;t++)(this.settings.preload||this.settings.preloadImages)&&this.settings.slides[t].src&&((new Image).src=this.settings.slides[t].src),(this.settings.preload||this.settings.preloadVideos)&&this.support.video&&this.settings.slides[t].video&&(this.settings.slides[t].video instanceof Array?this._video(this.settings.slides[t].video):this._video(this.settings.slides[t].video.src))},_random:function(t){return t[Math.floor(Math.random()*t.length)]},_slideShow:function(){var t=this;1<this.total&&!this.ended&&!this.paused&&!this.noshow&&(this.timeout=setTimeout(function(){t.next()},this._options("delay")))},_timer:function(t){var s=this;clearTimeout(this.timeout),this.$timer&&(this.$timer.removeClass("vegas-timer-running").find("div").css("transition-duration","0ms"),this.ended||this.paused||this.noshow||t&&setTimeout(function(){s.$timer.addClass("vegas-timer-running").find("div").css("transition-duration",s._options("delay")-100+"ms")},100))},_video:function(t){var s,i,e=t.toString();return n[e]?n[e]:(t instanceof Array==!1&&(t=[t]),(s=document.createElement("video")).preload=!0,t.forEach(function(t){(i=document.createElement("source")).src=t,s.appendChild(i)}),n[e]=s)},_fadeOutSound:function(t,s){var i=this,e=s/10,n=t.volume-.09;0<n?(t.volume=n,setTimeout(function(){i._fadeOutSound(t,s)},e)):t.pause()},_fadeInSound:function(t,s){var i=this,e=s/10,n=t.volume+.09;n<1&&(t.volume=n,setTimeout(function(){i._fadeInSound(t,s)},e))},_options:function(t,s){return void 0===s&&(s=this.slide),void 0!==this.settings.slides[s][t]?this.settings.slides[s][t]:this.settings[t]},_goto:function(t){void 0===this.settings.slides[t]&&(t=0),this.slide=t;var s,i,e,n,o,a=this.$elmt.children(".vegas-slide"),r=this.settings.slides[t].src,h=this.settings.slides[t].video,d=this._options("delay"),l=this._options("align"),g=this._options("valign"),u=this._options("cover"),c=this._options("color")||this.$elmt.css("background-color"),p=this,m=a.length,f=this._options("transition"),v=this._options("transitionDuration"),y=this._options("animation"),_=this._options("animationDuration");function w(){p._timer(!0),setTimeout(function(){f&&(p.support.transition?(a.css("transition","all "+v+"ms").addClass("vegas-transition-"+f+"-out"),a.each(function(){var t=a.find("video").get(0);t&&(t.volume=1,p._fadeOutSound(t,v))}),s.css("transition","all "+v+"ms").addClass("vegas-transition-"+f+"-in")):s.fadeIn(v));for(var t=0;t<a.length-p.settings.slidesToKeep;t++)a.eq(t).remove();p.trigger("walk"),p._slideShow()},100)}this.settings.firstTransition&&this.first&&(f=this.settings.firstTransition||f),this.settings.firstTransitionDuration&&this.first&&(v=this.settings.firstTransitionDuration||v),this.first&&(this.first=!1),"repeat"!==u&&(!0===u?u="cover":!1===u&&(u="contain")),("random"===f||f instanceof Array)&&(f=f instanceof Array?this._random(f):this._random(this.transitions)),("random"===y||y instanceof Array)&&(y=y instanceof Array?this._random(y):this._random(this.animations)),("auto"===v||d<v)&&(v=d),"auto"===_&&(_=d),s=b('<div class="vegas-slide"></div>'),this.support.transition&&f&&s.addClass("vegas-transition-"+f),this.support.video&&h?((n=h instanceof Array?this._video(h):this._video(h.src)).loop=void 0===h.loop||h.loop,n.muted=void 0===h.mute||h.mute,!1===n.muted?(n.volume=0,this._fadeInSound(n,v)):n.pause(),e=b(n).addClass("vegas-video").css("background-color",c),this.support.objectFit?e.css("object-position",l+" "+g).css("object-fit",u).css("width","100%").css("height","100%"):"contain"===u&&e.css("width","100%").css("height","100%"),s.append(e)):(o=new Image,i=b('<div class="vegas-slide-inner"></div>').css("background-image",'url("'+r+'")').css("background-color",c).css("background-position",l+" "+g),"repeat"===u?i.css("background-repeat","repeat"):i.css("background-size",u),this.support.transition&&y&&i.addClass("vegas-animation-"+y).css("animation-duration",_+"ms"),s.append(i)),this.support.transition||s.css("display","none"),m?a.eq(m-1).after(s):this.$elmt.prepend(s),a.css("transition","all 0ms").each(function(){this.className="vegas-slide","VIDEO"===this.tagName&&(this.className+=" vegas-video"),f&&(this.className+=" vegas-transition-"+f,this.className+=" vegas-transition-"+f+"-in")}),p._timer(!1),n?(4===n.readyState&&(n.currentTime=0),n.play(),w()):(o.src=r,o.complete?w():o.onload=w)},_end:function(){this.settings.autoplay?this.ended=!1:this.ended=!0,this._timer(!1),this.trigger("end")},shuffle:function(){for(var t,s,i=this.total-1;0<i;i--)s=Math.floor(Math.random()*(i+1)),t=this.settings.slides[i],this.settings.slides[i]=this.settings.slides[s],this.settings.slides[s]=t},play:function(){this.paused&&(this.paused=!1,this.next(),this.trigger("play"))},pause:function(){this._timer(!1),this.paused=!0,this.trigger("pause")},toggle:function(){this.paused?this.play():this.pause()},playing:function(){return!this.paused&&!this.noshow},current:function(t){return t?{slide:this.slide,data:this.settings.slides[this.slide]}:this.slide},jump:function(t){t<0||t>this.total-1||t===this.slide||(this.slide=t,this._goto(this.slide))},next:function(){if(this.slide++,this.slide>=this.total){if(!this.settings.loop)return this._end();this.slide=0}this._goto(this.slide)},previous:function(){if(this.slide--,this.slide<0){if(!this.settings.loop)return void this.slide++;this.slide=this.total-1}this._goto(this.slide)},trigger:function(t){var s=[];s="init"===t?[this.settings]:[this.slide,this.settings.slides[this.slide]],this.$elmt.trigger("vegas"+t,s),"function"==typeof this.settings[t]&&this.settings[t].apply(this.$elmt,s)},options:function(t,s){var i=this.settings.slides.slice();if("object"==typeof t)this.settings=b.extend({},e,b.vegas.defaults,t);else{if("string"!=typeof t)return this.settings;if(void 0===s)return this.settings[t];this.settings[t]=s}this.settings.slides!==i&&(this.total=this.settings.slides.length,this.noshow=this.total<2,this._preload())},destroy:function(){clearTimeout(this.timeout),this.$elmt.removeClass("vegas-container"),this.$elmt.find("> .vegas-slide").remove(),this.$elmt.find("> .vegas-wrapper").clone(!0).children().appendTo(this.$elmt),this.$elmt.find("> .vegas-wrapper").remove(),this.settings.timer&&this.$timer.remove(),this.settings.overlay&&this.$overlay.remove(),this.elmt._vegas=null}},b.fn.vegas=function(s){var i,e=arguments,n=!1;if(void 0===s||"object"==typeof s)return this.each(function(){this._vegas||(this._vegas=new t(this,s))});if("string"==typeof s){if(this.each(function(){var t=this._vegas;if(!t)throw new Error("No Vegas applied to this element.");"function"==typeof t[s]&&"_"!==s[0]?i=t[s].apply(t,[].slice.call(e,1)):n=!0}),n)throw new Error('No method "'+s+'" in Vegas.');return void 0!==i?i:this}},b.vegas={},b.vegas.defaults=e,b.vegas.isVideoCompatible=function(){return!/(Android|webOS|Phone|iPad|iPod|BlackBerry|Windows Phone)/i.test(navigator.userAgent)}}(window.jQuery||window.Zepto);

$(document).on('turbolinks:load',function(){

	if ($('.banner-two__bg').length) {
            $('.banner-two__bg-inner').each(function () {
                var Self = $(this);
                var bgSlideOptions = Self.data('options');
                var bannerTwoSlides = Self.vegas(bgSlideOptions);
            });
        }

	$("#flights").tab('show');
	$('.selectpicker').selectpicker('render');



	$('#remoteFareGrabbrLink').click(function(){
		$('#remoteFareGrabbrForm').submit();
	})

    $('#callform').on('submit', function(e) {
        // Prevent form submission and repeat clicks
        e.preventDefault();
        // $submit.attr('disabled', 'disabled');

        // Submit the form via ajax
        $.ajax({
            url:'/call',
            method:'POST',
            data: $('#callform').serialize()
        }).done(function(data) {
            alert(data.message);
        }).fail(function() {
            alert('There was a problem calling you - please try again later.');
        }).always(function() {
            // $submit.removeAttr('disabled');
        });

    });

$('.first_special_a').click(function(){
	$('.first_special_form').submit();
})

$('.second_special_a').click(function(){
	$('.second_special_form').submit();
})

$('.third_special_a').click(function(){
	$('.third_special_form').submit();
})

$('.fourth_special_a').click(function(){
	$('.fourth_special_form').submit();
})

$('#callform').validate({
	rules: {
		'userPhone': {
			required: true
		}
	},
    highlight: function (element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function (element) {
        element.closest('.form-group').removeClass('has-error').addClass('has-success');
    }
});

$('.blog-a').hover(
  function() {
  	// console.log('hovering');
    // var arrowCol = $( this ).closest('.arrow-col');
    $(this).find('img').addClass('hover-blog');
  }, function() {
    $(this).find('img').removeClass('hover-blog');
  }
);

$('.weekly-details').hover(
  function() {
  	// console.log('hovering');
    // var arrowCol = $( this ).closest('.arrow-col');
    $(this).siblings('div').addClass('hover-special');
  }, function() {
    $(this).siblings('div').removeClass('hover-special');
  }
);

$('.contact-left').hover(
  function() {
  	// console.log('hovering');
    // var arrowCol = $( this ).closest('.arrow-col');
    $(this).siblings('div').addClass('hover-arrow-left');
  }, function() {
    $(this).siblings('div').removeClass('hover-arrow-left');
  }
);

$('.contact-left-middle').hover(
  function() {
  	// console.log('hovering');
    // var arrowCol = $( this ).closest('.arrow-col');
    $(this).siblings('div').addClass('hover-arrow-middle');
  }, function() {
    $(this).siblings('div').removeClass('hover-arrow-middle');
  }
);

$('.contact-left-right').hover(
  function() {
  	// console.log('hovering');
    // var arrowCol = $( this ).closest('.arrow-col');
    $(this).siblings('div').addClass('hover-arrow-right');
  }, function() {
    $(this).siblings('div').removeClass('hover-arrow-right');
  }
);

$('#place').keyup(function(e) {
	if(e.keyCode == 8){
		if(!$(this).val() || $(this).val().length == 1){
			$('#place-list').empty();
		}
		else{
			var text = $(this).val();
			appendDataPlace(text);
		}
		// console.log('back')
	}
	else{
		var text = $(this).val();
		// console.log("key");
		appendDataPlace(text);
	}
});

var appendDataPlace = function(input){
	$.ajax({
		type: "GET",
		url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + input + "&type=hotel",
		success: function(data){
			$('#place-list').empty();
			for(var j = 0; j < data.length; j++){
				console.log(data[j]['description'])
				var newOption = "<option value='" + data[j]['description'] + "' data-type=" + data[j]['type'] + ">" + data[j]['description'] + "</option>";
				$('#place-list').append(newOption);
			}
		}
	})
}

$("#place").on('input', function () {
    var val = this.value;
    if($('#place-list option').filter(function(){
        return this.value === val;
    }).length) {
	    $('#place-list option').each(function() {
	    if($(this).val() == val){
	    	// change hidden input to "type" for car
	    	// alert($(this).data('type'));
	    	$('#locationType1').val($(this).data('type'))
	    	$('#locationType2').val($(this).data('type'))
		   }
		});
    }
});

var x = 0;

$(".addOrigin").on('click', function(){
	x++;
	$('.append-div').removeClass('hide');
	$('.append-div').addClass('block');
	$('.addOrigin').addClass('margin-bottom-2');
	$('.append-div').append("<div class='cont-span'><div class='form-group second-group lower-group'><div class='row delRow'><button class='btn btn-xs btn-danger del-button'>X</button></div><div class='col-md-6'><input type='text' name='citypairs[" + x + "][origin]' class='form-control' id='origin" + x + "' list='origin-list" + x + "' autocomplete='off' placeholder='Origin'><span class='tiny'>Origin Airport Code</span></div><div class='col-md-6 destination-col'><input type='text' name='citypairs[" + x + "][destination]' class='form-control' id='destination" + x + "' list='dest-list" + x + "' autocomplete='off' placeholder='Destination'><span class='tiny'>Destination Airport Code</span></div></div><div class='form-group lower-group second-row'><div class='col-md-6'><input type='date' class='form-control' name='citypairs[" + x + "][departdate]' id='depart" + x + "' min=''><span class='tiny'>Depart Date</span></div></div><datalist id='origin-list" + x + "'></datalist><datalist id='dest-list" + x + "'></datalist></span>");

	var contString = "<div class='cont-span'><div class='form-group second-group lower-group'><div class='row delRow'><button class='btn btn-xs btn-danger del-button'>X</button></div><div class='col-md-6'><input type='text' name='citypairs[" + x + "][origin]' class='form-control' id='origin" + x + "' list='origin-list" + x + "' autocomplete='off' placeholder='Origin'><span class='tiny'>Origin Airport Code</span></div><div class='col-md-6 destination-col'><input type='text' name='citypairs[" + x + "][destination]' class='form-control' id='destination" + x + "' list='dest-list" + x + "' autocomplete='off' placeholder='Destination'><span class='tiny'>Destination Airport Code</span></div></div><div class='form-group lower-group second-row'><div class='col-md-6'><input type'date' class='form-control' name='citypairs[" + x + "][departdate]' id='depart" + x + "' min=''><span class='tiny'>Depart Date</span></div></div><datalist id='origin-list" + x + "'></datalist><datalist id='dest-list" + x + "'></datalist></div>"

	$('.del-button').on('click', function(){
		$(this).parent().parent().parent().remove();
	})

		$("#origin" + x).keyup(function(e) {
		if(e.keyCode == 8){
			if(!$(this).val() || $(this).val().length == 1){
				$("#origin-list" + x).empty();
			}
			else{
				var text = $(this).val();
					$.ajax({
						type: "GET",
						url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + text + "&type=air",
						success: function(data){
							$("#origin-list" + x).empty();
							for(var i = 0; i < data.length; i++){
								console.log(data[i]['description'])
								var newOption = "<option value='" + data[i]['description'] + "'>" + data[i]['description'] + "</option>";
								$("#origin-list" + x).append(newOption);
								console.log("dynamic: I is: " + i + "X is: " + x);
							}
						}
					})
			}
			// console.log('back')
		}
		else{
			var text = $(this).val();
			// console.log("key");
					$.ajax({
						type: "GET",
						url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + text + "&type=air",
						success: function(data){
							$("#origin-list" + x).empty();
							for(var i = 0; i < data.length; i++){
								console.log(data[i]['description'])
								var newOption = "<option value='" + data[i]['description'] + "'>" + data[i]['description'] + "</option>";
								$("#origin-list" + x).append(newOption);
								console.log('dynamic');
							}
						}
					})
		}
	});
	$("#destination" + x).keyup(function(e) {
		if(e.keyCode == 8){
			if(!$(this).val() || $(this).val().length == 1){
				$("#dest-list" + x).empty();
			}
			else{
				var text = $(this).val();
			$.ajax({
				type: "GET",
				url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + text + "&type=air",
				success: function(data){
					$("#dest-list" + x).empty();
					for(var i = 0; i < data.length; i++){
						console.log(data[i]['description'])
						var newOption = "<option value='" + data[i]['description'] + "'>" + data[i]['description'] + "</option>";
						$("#dest-list" + x).append(newOption);
					}
				}
			})
			}
			// console.log('back')
		}
		else{
			var text = $(this).val();
			$.ajax({
				type: "GET",
				url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + text + "&type=air",
				success: function(data){
					$("#dest-list" + x).empty();
					for(var i = 0; i < data.length; i++){
						console.log(data[i]['description'])
						var newOption = "<option value='" + data[i]['description'] + "'>" + data[i]['description'] + "</option>";
						$("#dest-list" + x).append(newOption);
					}
				}
			})
		}
	});
})

var multi = false;

$('#air_type').change(function(){
	if($(this).val() == 'multicity'){
		multi = true;
		$('.top-group').addClass('top-group-border');
		$('.bottom-group').addClass('bottom-group-border');
		$('.bottom-group').removeClass('remove-bottom-margin');
		$('.bottom-group').removeClass('hide');
		$('.bottom-group').addClass('block');
		$('.multi-button').addClass('button-show');
		$('.multi-button').removeClass('hide');
		$('.multiDiv').removeClass('hide');
		$('.multiDiv').addClass('block');
		$('.return-col').removeClass('hide');
		$('.tabsDiv').addClass('scrolling')
	}
	else if($(this).val() == 'oneway'){
		if(multi == true){
			$('.append-div').empty();
			multi = false;
		}
		$('.return-col').addClass('hide');
		$('.return-form-group').addClass('block');
		$('.return-form-group').removeClass('hide');
		$('.top-group').removeClass('top-group-border');
		$('.bottom-group').removeClass('bottom-group-border');
		$('.bottom-group').addClass('remove-bottom-margin');
		$('.multi-button').addClass('hide');
		$('.multi-button').removeClass('button-show');
		$('.multiDiv').addClass('hide');
		$('.multiDiv').removeClass('block');
		$('.tabsDiv').removeClass('scrolling')
	}
	else if($(this).val() == 'roundtrip'){
		if(multi == true){
			$('.append-div').empty();
			multi = false;
		}
		$('.return-form-group').addClass('block');
		$('.return-form-group').removeClass('hide');
		$('.top-group').removeClass('top-group-border');
		$('.bottom-group').removeClass('bottom-group-border');
		$('.bottom-group').addClass('remove-bottom-margin');
		$('.multi-button').addClass('hide');
		$('.multi-button').removeClass('button-show');
		$('.multiDiv').addClass('hide');
		$('.multiDiv').removeClass('block');
		$('.return-col').removeClass('hide');
		$('.tabsDiv').removeClass('scrolling')
	}
	if($(this).val() == "oneway" || $(this).val() == 'multicity'){
		$('.return-form-group').addClass('hide');
		$('.return-form-group').removeClass('block');
	}
})

// Autocomplete AJAX Calls

$('#pickup_location').keyup(function(e) {
	if(e.keyCode == 8){
		if(!$(this).val() || $(this).val().length == 1){
			$('#pickup-list').empty();
		}
		else{
			var text = $(this).val();
			appendDataPickup(text);
		}
		// console.log('back')
	}
	else{
		var text = $(this).val();
		// console.log("key");
		appendDataPickup(text);
	}
});

var appendDataPickup = function(input){
	$.ajax({
		type: "GET",
		url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + input + "&type=car",
		success: function(data){
			$('#pickup-list').empty();
			for(var x = 0; x < data.length; x++){
				console.log(data[x]['description'])
				var newOption = "<option value='" + data[x]['description'] + "'>" + data[x]['description'] + "</option>";
				$('#pickup-list').append(newOption);
			}
		}
	})
}

$('#dropoff_location').keyup(function(e) {
	if(e.keyCode == 8){
		if(!$(this).val() || $(this).val().length == 1){
			$('#dropoff-list').empty();
		}
		else{
			var text = $(this).val();
			appendDataDropoff(text);
		}
		// console.log('back')
	}
	else{
		var text = $(this).val();
		// console.log("key");
		appendDataDropoff(text);
	}
});

var appendDataDropoff = function(input){
	$.ajax({
		type: "GET",
		url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + input + "&type=car",
		success: function(data){
			$('#dropoff-list').empty();
			for(var x = 0; x < data.length; x++){
				console.log(data[x]['description'])
				var newOption = "<option value='" + data[x]['description'] + "'>" + data[x]['description'] + "</option>";
				$('#dropoff-list').append(newOption);
			}
		}
	})
}

$('#origin').keyup(function(e) {
	if(e.keyCode == 8){
		if(!$(this).val() || $(this).val().length == 1){
			$('#origin-list').empty();
		}
		else{
			var text = $(this).val();
			appendDataOrigin(text);
		}
		// console.log('back')
	}
	else{
		var text = $(this).val();
		// console.log("key");
		appendDataOrigin(text);
	}
});

var appendDataOrigin = function(input){
	$.ajax({
		type: "GET",
		url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + input + "&type=air",
		success: function(data){
			$('#origin-list').empty();
			for(var x = 0; x < data.length; x++){
				console.log(data[x]['description'])
				var newOption = "<option value='" + data[x]['description'] + "'>" + data[x]['description'] + "</option>";
				$('#origin-list').append(newOption);
			}
		}
	})
}

$('#destination').keyup(function(e) {
	if(e.keyCode == 8){
		if(!$(this).val() || $(this).val().length == 1){
			$('#dest-list').empty();
		}
		else{
			var text = $(this).val();
			appendDataDest(text);
		}
		// console.log('back')
	}
	else{
		var text = $(this).val();
		// console.log("key");
		appendDataDest(text);
	}
});

var appendDataDest = function(input){
	$.ajax({
		type: "GET",
		url: "https://evov2.faregrabbr.com/remoteautocomplete_places.php?text=" + input + "&type=air",
		success: function(data){
			$('#dest-list').empty();
			for(var x = 0; x < data.length; x++){
				console.log(data[x]['description'])
				var newOption = "<option value='" + data[x]['description'] + "'>" + data[x]['description'] + "</option>";
				$('#dest-list').append(newOption);
			}
		}
	})
}

// Tab Forms

$('.myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show');
  $(this).toggleClass( "active" )
})


});
</script>

</body>
</html>

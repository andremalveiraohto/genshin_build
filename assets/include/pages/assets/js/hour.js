/*!
 * Código js por: Andre Malveira
 * Copyright 2021
 */


var gameData = [
	{
		game: "Genshin Impact",
		server: "Servidor America",
		timezone: "Etc/GMT+5",
		dailyReset: "04:00"
	}, {
		game: "Genshin Impact",
		server: "Servidor Europa",
		timezone: "Etc/GMT-1",
		dailyReset: "04:00"
	},	{
		game: "Genshin Impact",
		server: "Servidor Ásia",
		timezone: "Etc/GMT-8",
		dailyReset: "04:00"
	}
];

// Initialise list of filtered/hidden games using gameData.
var gameFilter = [];

for (let i = 0; i < gameData.length; i++) {
	gameFilter.push(
		{
			game: gameData[i].game,
			server: gameData[i].server,
			shown: "true"
		}
	);
}

// Check saved settings.
var timeFormat = "HH:mm",
resetTimeFormat = "HH:mm",
twelveHourFormat = false,
showServerDate = true,
showSeconds = false,
showHidden = false;


if (localStorage.getItem('showSecondsSwitch') == "true") {
	showSeconds = true;

	document.getElementById("showSecondsSwitch").checked = true;

	setTimeFormat();
}
if (localStorage.getItem('compactModeSwitch') == "true") {
	var serverTimes = document.querySelectorAll('.cardHour .serverTimes');

	serverTimes.forEach(function(item) {
		item.style.display='block'
	});
	document.getElementById("compactModeSwitch").checked = true;
}

	var htmlModStream = `
		<div id="america" class="vh">
			<div class="cardHour width">
				<div class="gameTimes">
					<div class="gameHeader"></div>
					<p class="gameTimesText modstream">Atualiza em</p> 
					<p class="gameTimesHour modstream"></p> 
				</div>

			</div>
		</div>
		<div id="europa" class="vh">
			<div class="cardHour width">
				<div class="gameTimes">
					<div class="gameHeader"></div>
					<p class="gameTimesText modstream">Atualiza em</p> 
					<p class="gameTimesHour modstream"></p> 
				</div>
			</div>
		</div>
		<div id="asia" class="vh">
			<div class="cardHour width">
				<div class="gameTimes">
					<div class="gameHeader"></div>
					<p class="gameTimesText modstream">Atualiza em</p> 
					<p class="gameTimesHour modstream"></p> 
				</div>
			</div>
		</div>
	`;


	//modstream
	var modStream = false
	if (localStorage.getItem('modstream') == "true") {
		
		modStream = true;
		document.getElementById("modstream").checked = true;

		document.querySelector('head')
		document.getElementById("bodyCardHour").remove();
		document.getElementById("bodyStream").innerHTML = htmlModStream;

		//scroll
		var FILE = 'assets/include/pages/assets/css/docSlider.css';

		var css = document.createElement('link');
		css.setAttribute('rel','stylesheet');
		css.setAttribute('type', 'text/css');
		css.setAttribute('href', FILE);

		document.getElementsByTagName('head')[0].appendChild(css);

		docSlider.init();
	}

// Show local time data.
var now = moment(), 
nowZone = moment.tz.guess();


if(document.getElementById("currentLocalTime")){
	document.getElementById("currentLocalTime").textContent = now.format(timeFormat);
	document.getElementById("currentLocalDate").textContent = now.format("dddd, D [de] MMMM, YYYY");
	document.getElementById("currentLocalTimezone").textContent = nowZone + " — " + now.format("[GMT ]Z");
}


// Convert game times to local time zone and store results.
var gameDataConverted = [];
for (let i = 0; i < gameData.length; i++) {
	var gameTimezone = gameData[i].timezone, 
	currentServerTime = now.clone().tz(gameTimezone);

	// If daily reset changes during daylight savings, convert using UTC first.
	if (gameData[i].utcDailyReset) {
		gameData[i].dailyReset = moment.tz(gameData[i].dailyReset, "HH:mm", "Etc/UTC");
		// Convert to server time.
		gameData[i].dailyReset = gameData[i].dailyReset.clone().tz(gameTimezone);
	} else {
		gameData[i].dailyReset = moment.tz(gameData[i].dailyReset, "HH:mm", gameTimezone);
	}

	// Convert to local.
	var localResetTime = gameData[i].dailyReset.clone().tz(nowZone);

	// Change local reset time to tomorrow if it has already passed.
	var todayResetPassed = (now.preciseDiff(localResetTime, true)).firstDateWasLater;



	if (todayResetPassed) {
		if (gameData[i].dailyReset.hours() == 0) {
			// Add 48 hours to fix midnight reset using previous day.
			localResetTime.add(48, "H");
		} else {
			localResetTime.add(48, "H");
		}
	}


	// Calculate time left until daily reset.
	var timeRemaining = now.preciseDiff(localResetTime, true);
	// Display seconds if the setting is on.

	//adiciona 0 á frente caso seja apenas um número
	hora = timeRemaining.hours;
	minutos = timeRemaining.minutes;
	segundos = timeRemaining.seconds;
	if(hora >=0 && hora < 10){hora = '0'+hora;}
	if(minutos >=0 && minutos < 10){minutos = '0'+minutos;}
	if(segundos >=0 && segundos < 10){segundos = '0'+segundos;}


	if(modStream){
		timeRemaining = hora + ":" + minutos + ":" + segundos;
	} else{

		if (showSeconds) {
			timeRemaining = timeRemaining.hours + " horas " + timeRemaining.minutes + " minutos " + timeRemaining.seconds + " segundos "
		} else {
			timeRemaining = timeRemaining.hours + " horas " + timeRemaining.minutes + " minutos";
		}
	}

	// Store.
	gameDataConverted.push(
		{
			dailyReset: localResetTime,
			serverTime: currentServerTime,
			timeToReset: timeRemaining,
		}
	);
}


 

//gameBody.getElementsByTagName("p")[0].insertAdjacentHTML("afterend", "<p>" + gameDataConverted[i].dailyReset.format(resetTimeFormat) + "</p>");
//insertAdjacentHTML("afterend", "<p>" + gameDataConverted[i].timeToReset + "</p>");


// Loop print the results as divs into #bodyCardHour.
for (let i = 0; i < gameData.length; i++) {

	if(modStream){
		var bodyStream = document.getElementById("bodyStream").getElementsByClassName("gameTimes")[i]; 
		var gameHeader = bodyStream.getElementsByClassName("gameHeader")[0];
		var gameTimesHour = bodyStream.getElementsByClassName("gameTimesHour")[0];

		gameHeader.innerHTML = '<h5>'+gameData[i].server+'</h5>';
		gameTimesHour.innerHTML = gameDataConverted[i].timeToReset;

	} else {
		var gameCont = document.getElementById("bodyCardHour").getElementsByClassName("gameContainer")[i]; 
		var gameHead = gameCont.getElementsByClassName("gameHeader")[0];
		var gameBody = gameCont.getElementsByClassName("gameTimes")[0];

		gameHead.insertAdjacentHTML("beforeend", "<h4>" + gameData[i].server + "</h4>");
		gameBody.getElementsByTagName("p")[0].insertAdjacentHTML("afterend", "<p class=\"gameTimesHour\">" + gameDataConverted[i].dailyReset.format(resetTimeFormat) + "</p>");
		gameBody.getElementsByTagName("p")[2].insertAdjacentHTML("afterend", "<p class=\"gameTimesHour\">" + gameDataConverted[i].timeToReset + "</p>");

		// Add prefix for timezone abbreviation if it's an offset.
		if (gameDataConverted[i].serverTime.format("z").includes("-") || gameDataConverted[i].serverTime.format("z").includes("+")) {
			gameBody.getElementsByTagName("p")[4].insertAdjacentHTML("afterend", "<p>" + gameData[i].dailyReset.format(resetTimeFormat) + " UTC" + gameDataConverted[i].serverTime.format("z") + "</p>");
			gameBody.getElementsByTagName("p")[6].insertAdjacentHTML("afterend", "<p>" + gameDataConverted[i].serverTime.format(timeFormat) + " UTC" + gameDataConverted[i].serverTime.format("z") + "</p>");
		} else {
			gameBody.getElementsByTagName("p")[4].insertAdjacentHTML("afterend", "<p>" + gameData[i].dailyReset.format(resetTimeFormat + " z") + "</p>");
			gameBody.getElementsByTagName("p")[6].insertAdjacentHTML("afterend", "<p>" + gameDataConverted[i].serverTime.format(timeFormat + " z") + "</p>");
		}
		// Add date to curent server time if the setting is on.
		gameBody.getElementsByTagName("p")[8].insertAdjacentHTML("afterend", "<p>" + gameDataConverted[i].serverTime.format("DD/MM/YYYY")+ "</p>");
	}
}

// Refresh time values every minute/second.
var refresh;

setRefresh();

function setRefresh() {
	// Clear previous interval if it exists.
	if (typeof refresh !== 'undefined') {
		clearInterval(refresh);
	}
	
	// Set interval based on saved setting.
	var play = true;
	if(play){
		if(modStream){
			refresh = setInterval(timeCalc, 1000);
		} else {
			if (showSeconds) {
				refresh = setInterval(timeCalc, 1000);
			} else {
				refresh = setInterval(timeCalc, 60000);
			}
		}
	}

}

// Figure out the time format.
function setTimeFormat() {
	if (twelveHourFormat) {
		resetTimeFormat = "h:mm A";
		if (showSeconds) {
			timeFormat = "h:mm:ss A";
		} else {
			timeFormat = "h:mm A";
		}
	} else {
		resetTimeFormat = "HH:mm";
		if (showSeconds) {
			timeFormat = "HH:mm:ss";
		} else {
			timeFormat = "HH:mm";
		}
	}
}

function timeCalc() {
	// Refresh time.
	now = moment();

	// Refresh converted times.
	for (let i = 0; i < gameData.length; i++) {
		var gameTimezone = gameData[i].timezone, 
		currentServerTime = now.clone().tz(gameTimezone);

		// Convert to local.
		var localResetTime = gameData[i].dailyReset.clone().tz(nowZone);

		// Change local reset time to tomorrow if it has already passed.
		var todayResetPassed = (now.preciseDiff(localResetTime, true)).firstDateWasLater;
		if (todayResetPassed) {
			if (gameData[i].dailyReset.hours() == 0) {
				// Add 48 hours to fix midnight reset using previous day.
				localResetTime.add(48, "h");
			} else {
				localResetTime.add(48, "h");
			}
		}

		// Calculate time left until daily reset.
		var timeRemaining = now.preciseDiff(localResetTime, true);
		// Display seconds if the setting is on.


		//adiciona 0 á frente caso seja apenas um número
		hora = timeRemaining.hours;
		minutos = timeRemaining.minutes;
		segundos = timeRemaining.seconds;
		if(hora >=0 && hora < 10){hora = '0'+hora;}
		if(minutos >=0 && minutos < 10){minutos = '0'+minutos;}
		if(segundos >=0 && segundos < 10){segundos = '0'+segundos;}



		if(modStream){
			timeRemaining = hora + ":" + minutos + ":" + segundos;
		} else{
	
			if (showSeconds) {
				timeRemaining = timeRemaining.hours + " horas " + timeRemaining.minutes + " minutos " + timeRemaining.seconds + " segundos "
			} else {
				timeRemaining = timeRemaining.hours + " horas " + timeRemaining.minutes + " minutos";
			}
		}

	
		// Replace converted times.
		gameDataConverted[i].dailyReset = localResetTime;
		gameDataConverted[i].serverTime = currentServerTime;
		gameDataConverted[i].timeToReset = timeRemaining;
	}

	// Print refreshed values.
	if(document.getElementById("currentLocalTime")){
		document.getElementById("currentLocalTime").textContent = now.format(timeFormat);
		document.getElementById("currentLocalDate").textContent = now.format("dddd, D [de] MMMM, YYYY");
	}
	for (let i = 0; i < gameData.length; i++) {
		var bodyStream = document.getElementById("bodyStream").getElementsByClassName("gameTimes")[i]; 
		var hora = gameDataConverted[i].timeToReset;
		if(hora == '00:00:00'){
			var gameTimesText = bodyStream.getElementsByClassName("gameTimesText")[0];
			var gameTimesHour = bodyStream.getElementsByClassName("gameTimesHour")[0];
			gameTimesText.innerHTML='Atualizado'
			gameTimesHour.style.display='none';
			bodyStream.insertAdjacentHTML('beforeend', '<p class="modstreamp">00:00:00</p> ');			
		} else {
			if(modStream){
				var gameTimesHour = bodyStream.getElementsByClassName("gameTimesHour")[0];
				var gameHeader = bodyStream.getElementsByClassName("gameHeader")[0];
				gameHeader.innerHTML = '<h5>'+gameData[i].server+'</h5>';
				gameTimesHour.innerHTML = gameDataConverted[i].timeToReset; 
			} else {
				var gameCont = document.getElementById("bodyCardHour").getElementsByClassName("gameContainer")[i], 
				gameBody = gameCont.getElementsByClassName("gameTimes")[0];
		
				gameBody.getElementsByTagName("p")[1].textContent = gameDataConverted[i].dailyReset.format(resetTimeFormat);
				gameBody.getElementsByTagName("p")[3].textContent = gameDataConverted[i].timeToReset;
		
				// Add prefix for timezone abbreviation if it's an offset.
				if (gameDataConverted[i].serverTime.format("z").includes("-") || gameDataConverted[i].serverTime.format("z").includes("+")) {
					gameBody.getElementsByTagName("p")[5].textContent = gameData[i].dailyReset.format(resetTimeFormat) + " UTC" + gameDataConverted[i].serverTime.format("z");
					gameBody.getElementsByTagName("p")[7].textContent = gameDataConverted[i].serverTime.format(timeFormat) + " UTC" + gameDataConverted[i].serverTime.format("z");
				} else {
					gameBody.getElementsByTagName("p")[5].textContent = gameData[i].dailyReset.format(resetTimeFormat + " z");
					gameBody.getElementsByTagName("p")[7].textContent = gameDataConverted[i].serverTime.format(timeFormat + " z");
				}
				// Add date to curent server time if the setting is on.
				gameBody.getElementsByTagName("p")[9].textContent = gameDataConverted[i].serverTime.format("DD/MM/YYYY");
			}
		}
	}
}

function settingToggle(setting) {
	var settingId = setting.id;
	localStorage.setItem([settingId], setting.checked);

	if (settingId == "12HrTimeSwitch") {
		if (setting.checked) {
			twelveHourFormat = true;
		} else {
			twelveHourFormat = false;
		}
		setTimeFormat()
		timeCalc();
	} else if (settingId == "showServerDateSwitch") {
		if (setting.checked) {
			showServerDate = true;
		} else {
			showServerDate = false;
		}
		timeCalc();
	} else if (settingId == "showSecondsSwitch") {
		if (setting.checked) {
			showSeconds = true;
		} else {
			showSeconds = false;
		}
		setTimeFormat();
		timeCalc();
		setRefresh();
	} else if (settingId == "showHideButtonsSwitch") {
		if (setting.checked) {
			document.body.classList.remove("hideButtonsHidden");
		} else {
			document.body.classList.add("hideButtonsHidden");
		}
	} else if (settingId == "showHiddenInSearchSwitch") {
		if (setting.checked) {
			showHidden = true;
		} else {
			showHidden = false;
		}
		searchFilter();
	} else if (settingId == "compactModeSwitch") {
		if (setting.checked) {
			var serverTimes = document.querySelectorAll('.cardHour .serverTimes');

			serverTimes.forEach(function(item) {
				item.style.display='block'
			});

		} else {
			var serverTimes = document.querySelectorAll('.cardHour .serverTimes');

			serverTimes.forEach(function(item) {
				item.style.display=''
			});
		}
	} else if (settingId == "darkThemeSwitch") {
		if (setting.checked) {
			document.body.classList.add("dark");
		} else {
			document.body.classList.remove("dark");
		}
	}
	else if (settingId == "aud") {
		if (setting.checked) {
			window.location.reload();
		} else {
			window.location.reload();
		}
	}
	else if (settingId == "modstream") {
		if (setting.checked) {
			window.location.reload();
		} else {
			window.location.reload();
		}
	}


}


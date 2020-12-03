<html>

<body>
	<!-- <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>city </label> <input type="text" name="city" value="<?php echo $e_title; ?>">
	<br>
	<label>add event id </label> <input type="text" name="add_event" value="<?php echo $e_title; ?>">
	<br>
	<label>del event id </label> <input type="text" name="del_event" value="<?php echo $e_title; ?>">
	<br>
	<label>start date</label> <input type="date" name="start_date" value="<?php echo $start_date; ?>">
	<br>
	<label>end date</label> <input type="date" name="end_date" value="<?php echo $end_date; ?>">
	<br>
	<input type="submit" name="submit" value="Submit">
</form> -->

	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-black w3-card">
			<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
				href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
					class="fa fa-bars"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
			<!-- <form action="https://stackoverflow.com/questions/52229901/navigate-to-route-on-button-click/">
                <input type="submit" value="Visit Website"/>
            </form> -->
			<a href="#events" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
			<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
			<div class="w3-dropdown-hover w3-hide-small">
				<button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
				<div class="w3-dropdown-content w3-bar-block w3-card-4">
					<a href="#" class="w3-bar-item w3-button">Merchandise</a>
					<a href="#" class="w3-bar-item w3-button">Extras</a>
					<a href="#" class="w3-bar-item w3-button">Memes</a>
				</div>
			</div>
			<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
					class="fa fa-search"></i></a>
		</div>
	</div>

	<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
	<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
		<a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
	</div>

	<!-- Page content -->
	<div class="w3-content" style="max-width:2000px;margin-top:46px">

		<!-- Automatic Slideshow Images -->
		<div class="mySlides w3-display-container w3-center">
			<img src="https://upload.wikimedia.org/wikipedia/commons/d/dc/UCF_Football.jpg" style="width:100%">
			<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				<h3>UCF Stadium</h3>
				<p><b>Event1</b></p>
			</div>
		</div>
		<div class="mySlides w3-display-container w3-center">
			<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/UCF_HCEC.jpg" style="width:100%">
			<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				<h3>HEC</h3>
				<p><b>Event2</b></p>
			</div>
		</div>
		<div class="mySlides w3-display-container w3-center">
			<img src="data:image/jpeg;base64,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"
				style="width:100%">
			<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
				<h3>Milican Hall</h3>
				<p><b>Event3</b></p>
			</div>
		</div>

		<!-- The Event Section -->
        <div class="w3-white" id="events">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                <h2 class="w3-wide w3-center">Upcoming Events</h2>
                <p class="w3-opacity w3-center"><i>Keep Track of Upcoming Events</i></p><br>

                <ul class="w3-ul w3-border w3-white w3-text-grey">
                    <li class="w3-padding">December <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                    <li class="w3-padding">January <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                    <li class="w3-padding">Febuary <span class="w3-badge w3-right w3-margin-right">3</span></li>
                </ul>

                <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                    <div class="w3-third w3-margin-bottom">
                        <img src="https://www.w3schools.com/w3images/newyork.jpg" alt="New York" style="width:100%"
                            class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>New York</b></p>
                            <p class="w3-opacity">Fri 27 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom"
                                onclick="document.getElementById('ticketModal').style.display='block'">Buy
                                Tickets</button>
                        </div>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <img src="https://www.w3schools.com/w3images/paris.jpg" alt="Paris" style="width:100%"
                            class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>Paris</b></p>
                            <p class="w3-opacity">Sat 28 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom"
                                onclick="document.getElementById('ticketModal').style.display='block'">Buy
                                Tickets</button>
                        </div>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <img src="https://www.w3schools.com/w3images/sanfran.jpg" alt="San Francisco" style="width:100%"
                            class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>San Francisco</b></p>
                            <p class="w3-opacity">Sun 29 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom"
                                onclick="document.getElementById('ticketModal').style.display='block'">Buy
                                Tickets</button>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		
		<!-- The Contact Section -->
        <div class="w3-black w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
            <h2 class="w3-wide w3-center">CONTACT</h2>
            <p class="w3-opacity w3-center"><i>Questions? Contact us here!</i></p>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m6 w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker" style="width:30px"></i> Orlando, US<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 407-225-2212<br>
                    <i class="fa fa-envelope" style="width:30px"> </i> Email: knitro@ucf.knights.edu<br>
                </div>
                <div class="w3-col m6">
                    <form action="/action_page.php" target="_blank">
                        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                            </div>
                        </div>
                        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                        <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>

<?php
session_start();

include 'config.php';

function parse_inp($inp) {
  $inp = htmlspecialchars($inp);
  $inp = trim($inp);
  $inp = stripslashes($inp);
  return $inp;
}


// variables
$add_event_error = ""; //initialized as blank
$e_title = $e_description = $e_url = $e_address = $e_city = "";
$e_startdate = $e_enddate = "";

// assigning variable values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$city = parse_inp($_POST["city"]);
	$add_event = parse_inp($_POST["add_event"]);
	$del_event = parse_inp($_POST["del_event"]);
	$start_date = parse_inp($_POST["start_date"]);
	$end_date = parse_inp($_POST["end_date"]);
}


// throws error if one or more of the fields is left blank

// inserting the created event into the events table

if (!empty($city)) {
	$sql = "SELECT * FROM events WHERE city = '" . $city . "' and start_date <= CURDATE() and end_date >= CURDATE()";
	if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($add_event_error)) {
		$result = $connection->query($sql);
		while ($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"] . " org-id: " . $row["organizer_id"] . " name " . $row["event_name"] . " location " . $row["event_name"] . " desc " . $row["description"] . " sdate " . $row["start_date"] . " edate " . $row["end_date"] . " url " . $row["url"] . " city " . $row["city"];
		       echo "\n";	
		}
	}
}

if (!empty($add_event)) {
	$sql = "insert into registrations (user_id, event_id) values (" . $_SESSION["id"] .", " . $add_event . ")";
	if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($add_event_error)) {
		if ($connection->query($sql) == TRUE) {
			echo ("Event Created");
		}
	}
}

if (!empty($del_event)) {
	$sql = "delete from registrations where user_id=" . $_SESSION["id"] ." and event_id= " . $del_event;
	if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($add_event_error)) {
		if ($connection->query($sql) == TRUE) {
			echo ("Event Created");
		}
	}
}

if (!empty($start_date) && !empty($end_date)) {
	$sql = "select * from events where start_date >= '" . $start_date . "' and end_date <= '" . $end_date . "'";
	echo "<br><br>" . $sql . "<br><br>";
        $result = $connection->query($sql);
        while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " org-id: " . $row["organizer_id"] . " name " . $row["event_name"] . " location " . $row["event_name"] . " desc " . $row["description"] . " sdate " . $row["start_date"] . " edate " . $row["end_date"] . " url " . $row["url"] . " city " . $row["city"];
                       echo "\n";
         }
}

echo "<br><br><br><br>";

echo "\n\nListing All Events:\n\n";
$sql = "SELECT * FROM registrations WHERE user_id = " . $_SESSION["id"];
$result = $connection->query($sql);
while ($row = $result->fetch_assoc()) {
	echo "user_id: " . $row["user_id"] . " event-id: " . $row["event_id"];
	echo "\n";
}


// closing the connection
$connection->close();

?>
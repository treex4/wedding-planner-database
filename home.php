<!-- Access at  https://www.students.cs.ubc.ca/~lanchiph/home.php-->
<html>
    <!-- Page's Metadata
    -->
    <head>
        <title>CPSC304 Project Group 88</title>
        <style>
            h2{
                text-decoration: underline;
            }
            table, th, td{
                border: 2px solid black;
            }
            #att1{
                position: relative;
                height: 105px;
                vertical-align: top;
            }

            #att2{
                position: relative;
                height: 55px;
                vertical-align: top;
            }
        </style>    
    </head>



    <body>
        <h1>Results</h1>
        <?php
        if (isset($_POST['insertPGM2']) 
            || isset($_POST['insertLocation']) 
            || isset($_POST['deleteAttendees'])) {
            handlePOSTRequest();
        } else if (isset($_GET['selectioncater']) 
                || isset($_GET['viewtables'])
                || isset($_GET['viewatt1'])
                || isset($_GET['viewatt2'])
                || isset($_GET['joinvenue'])
                || isset($_GET['agggr1'])
                || isset($_GET['agggr2'])
                || isset($_GET['divideAttendeesTable'])
                || isset($_GET['viewLocation'])
                || isset($_GET['viewAPGM2'])
                || isset($_GET['countVenue'])) {
            handleGETRequest();
        }
        ?>
        <br />
        <hr> </hr>
        <h1>Wedding Venue Database</h1>
        <hr> </hr>
        
        <p id="attendees">
        <h2>Attendees</h2>

        <H3>Select attendees that have attended all events with this event type:</H3>
        <p> Note: Values are Case Sensitive </p>
        <form method="GET" action="home.php">
            <input type="hidden" id="divideAttendeesTable" name="divideAttendeesTable">
            Event Type= <input type="text" name="divideAttendees"> <br /><br />
    
            <input type = "submit" value="Divide" name ="submitDivision">
        </form>
        
        <H3>View Attendees & Person Getting Married 2 Tables</H3>
        <form method="GET" action="home.php">
            <input type="hidden" id="viewAPGM2" name="viewAPGM2">
            <input type = "submit" value="View Tables" name ="submitViewAPGM2">
        </form>

        <H3> Delete Values From Attendees </H3>
        <p> Note: Values are Case Sensitive </p>

        <form method="POST" action="home.php">
        <input type="hidden" id="deleteAttendees" name="deleteAttendees">
        Guest ID: <input type="text" name="deleteGuestID"> <br /><br />
        First Name: <input type="text" name="deleteFirstName"> <br /><br />
        Last Name: <input type="text" name="deleteLastName"> <br /><br />
        Table Number: <input type="number" name="deleteTableNumber"> <br /><br />
        Diet: <input type="text" name="deleteDiet"> <br /><br />

         <input type = "submit" value="Delete Value" name ="submitDeleteAttendees">
        </form>

        <hr> </hr>

        <H2>Location</H2>

        <H3>View Location Table</H3>
        <form method="GET" action="home.php">
            <input type="hidden" id="viewLocation" name="viewLocation">
            <input type = "submit" value="View Location Table" name ="submitViewLocation">
        </form>

        <H3>Update Values in Location</H3>
        <p> Note: Values are case sensitive </p>
        <form method="POST" action="home.php">
            <input type="hidden" id="insertLocation" name="insertLocation">
            <p>Select The Value You Want To Update: </p>
            Old Building Number: <input type="number" name="updateBuildingNumberOld"> <br /><br />
            Old Street: <input type="text" name="updateStreetNameOld"> <br /><br />
            Old City: <input type="text" name="updateCityOld"> <br /><br />
            Old Province: <input type="text" name="updateProvinceOld"> <br /><br />
            Old Postal Code: <input type="text" name="updatePostalCodeOld"> <br /><br />
            Old Venue ID: <input type="text" name="updateVenueIDOld"> <br /><br />
            <br></br>

            <p>Enter The Updates You Want To Make: </p>
            New Building Number: <input type="number" name="updateBuildingNumberNew"> <br /><br />
            New Street: <input type="text" name="updateStreetNameNew"> <br /><br />
            New City: <input type="text" name="updateCityNew"> <br /><br />
            New Province: <input type="text" name="updateProvinceNew"> <br /><br />
            New Postal Code: <input type="text" name="updatePostalCodeNew"> <br /><br />
            New Venue ID: <input type="text" name="updateVenueIDNew"> <br /><br />

            <input type = "submit" value="Update Value" name ="submitUpdateLocation">

        </form>

        <hr></hr>

        <p id="pgm2">
             <H2>Person Getting Married (2)</H2>

        <H3>Insert Values into Person Getting Married (2)</H3>
        <p> Note: Values are Case Sensitive </p>
        <form method="POST" action="home.php">
            <input type="hidden" id="insertPGM2" name="insertPGM2">
            Guest ID: <input type="text" name="insGuestID"> <br /><br />
            Phone Number: <input type="number" name="insPhoneNumber"> <br /><br />
            Email: <input type="text" name="insEmail"> <br /><br />
            Address: <input type="text" name="insAddress"> <br /><br />
            
            <input type = "submit" value="Insert Value" name ="submitInsertPGM2">
        </form>

        <hr></hr>

        <p id="venue">

        <H2>Venue</H2>

        <H3>Venues that have capacity greater than</H3>
        <form method="GET" action="home.php">
            <input type="hidden" id="countVenue" name="countVenue">
            Capacity > <input type="number" name="chooseVenueCapacity"> <br /><br />
    
            <input type = "submit" value="Submit" name ="submitHavingVenue">
        </form>
        <hr></hr>

        <div class="split right" id='query'>
        <p id="selection">
        <H2>4. Selection - Catering</H2>
        <p>Pick catering services</p>
        <form method="GET" action="home.php">
            <input type="hidden" id="selectioncater" name="selectioncater">
            Number Of Orders = <input type="number" name="num"> <br />
            <select name="option" id="option">
                    <option value = "and">AND<br>
                    <option value = "or">OR<br>
            </select>
            <br>
            Cuisine = <input type="text" name="cuisine"> <br /><br />

            <input type = "submit" value="Submit" name ="selection">
        </form>
        <hr> </hr>

        <p id="projection">
        <H2>5. Projection</H2>
        <form method="GET" action="home.php">
            <input type="hidden" id="viewtables" name="viewtables">
            <input type = "submit" value="View Tables" name ="projection1">
        </form>
        <h3>View attributes of GETTING_MARRIED_1</h3>
        <form method="GET" action="home.php">
            <input type="hidden" id="viewatt1" name="viewatt1">
            <label for="p_gm1">Choose Attributes</label>
            <br />
            <select name="att1[]" id="att1" multiple>
                <option value="guest_id">GUEST_ID</option>
                <option value="phone_num">PHONE_NUM</option>
                <option value="email">EMAIL</option>
                <option value="address">ADDRESS</option>
                <option value="credit_num">CREDIT_NUM</option>
                <option value="budget">BUDGET</option>
            </select>
            <br />
            <br />
            
            <input type = "submit" value="View Attributes" name ="projection2">
        </form>  

        <h3>View attributes of VENUE</h3>
        <form method="GET" action="home.php">
            <input type="hidden" id="viewatt2" name="viewatt2">
            <label for="p_venue">Choose Attributes</label>
            <br />
            <select name="att2[]" id="att2" multiple>
                <option value="venue_id">VENUE_ID</option>
                <option value="capacity">CAPACITY</option>
                <option value="name">NAME</option>
            </select>
            <br />
            <br />
            <input type = "submit" value="View Attributes" name ="projection3">
        </form> 
        <hr> </hr>

        <p id="join">
        <H2>6. Join - Venue & Events</H2>
        <p>Find Venues that offer Events suitable to your budget</p>
        <form method="GET" action="home.php">
            <input type="hidden" id="joinvenue" name="joinvenue">
            Cost    <select name="sign" id="sign">
                    <option value = ">=">>=<br>
                    <option value = "<="><=<br>

                    <input type="number" name="cost">
            <input type = "submit" value="Submit" name ="join">
        </form>
        <hr> </hr>

        <p id="agggr">
        <H2>7. Aggregation with Group By</H2>
        <p> Check current total number of attendees per table</p>
        <form method="GET" action="home.php">
            <input type="hidden" id="agggr1" name="agggr1">
            <input type = "submit" value="Check" name ="agggr">
        </form>
        <hr> </hr>

        <p id="nestedagg">
        <H2>9. Nested Aggregation with Group By</H2>
        <p> Find events and the venues that offer these events 
            where their price is below the average price per year <br> 
            (Find venues that have been offering cheap events throughout history)</p>
        <form method="GET" action="home.php">
            <input type="hidden" id="agggr2" name="agggr2">
            <input type = "submit" value="Find" name ="nestedagg">
        </form>
        <hr> </hr>
        </div>



    <a name="Return To Top"></a>
    <a href="#top">Return To Top</a>

    <?php

            // HANDLE CONNECTION AND PARSE QUERIES
            $success = True; //keep track of errors so it redirects the page only if there are no errors
            $db_conn = NULL; // edit the login credentials in connectToDB()
            $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

            function debugAlertMessage($message) {
                global $show_debug_alert_messages;

                if ($show_debug_alert_messages) {
                    echo "<script type='text/javascript'>alert('" . $message . "');</script>";
                }
            }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_lanchiph", "a29224904", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        // HANDLE QUERIES
        function handleAPGM2Request() {
            global $db_conn;

            $result1 = executePlainSQL("SELECT * FROM attendees");
            echo "<br>Retrieved data from table attendees:<br>";
            echo "<table>";
            echo "<tr>
            <th>Guest ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Table Number</th>
            <th>Diet</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result1, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
					"<tr>";
            }

            echo "</table>";

            $result2 = executePlainSQL("SELECT * FROM getting_married_2");
            echo "<br>Retrieved data from table getting_married_2:<br>";
            echo "<table>";
            echo "<tr>
            <th>Guest ID</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result2, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
					"<tr>";
            }

            echo "</table>";

            OCICommit($db_conn);
        }

        function handleViewRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM location_at");
            echo "<br>Retrieved data from table location_at:<br>";
            echo "<table>";
            echo "<tr>
            <th>Building Number</th>
            <th>Street Name</th>
            <th>City</th>
            <th>Province</th>
            <th>Postal Code</th>
            <th>VenueID</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
						"<td>" . $row[5] . "</td>" . 
					"<tr>";
            }

            echo "</table>";

            OCICommit($db_conn);
        }

        function printInsertRequestResult() { //prints results from a select statement
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM getting_married_2");
            echo "<br>Retrieved data from table getting_married_2:<br>";
            echo "<table>";
            echo "<tr>
            <th>GuestID</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function handleInsertRequest() {
            global $db_conn;

            // insert into getting_married_2 table, foreign key 'guest_id' from attendees table
            $tuple = array (
                ":guest_id" => $_POST['insGuestID'],
                ":phone_num" => $_POST['insPhoneNumber'],
                ":email" => $_POST['insEmail'],
                ":address" => $_POST['insAddress']
            );

            $alltuples = array (
                $tuple
            );

            echo "<br>BEFORE INSERT REQUEST: </br>";
            printInsertRequestResult();

            echo "<br>AFTER INSERT REQUEST: </br>";
            executeBoundSQL("insert into getting_married_2 values (:guest_id, :phone_num, :email, :address)", $alltuples);
            printInsertRequestResult();
            OCICommit($db_conn);
        }

        function printDeleteRequestResultGM2() {
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM getting_married_2");
            echo "<br>Retrieved data from table getting_married_2:<br>";
            echo "<table>";
            echo "<tr>
            <th>GuestID</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function printDeleteRequestResultA() {
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM attendees");
            echo "<br>Retrieved data from table attendees:<br>";
            echo "<table>";
            echo "<tr>
            <th>GuestID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Table Number</th>
            <th>Diet</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function handleDeleteRequest() {
            global $db_conn;

            // delete from attendees table, affects guest_married_2 foreign key 'guest_id' 
            $tuple = array (
                ":guest_id" => $_POST['deleteGuestID']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("
                                DELETE
                                FROM attendees A
                                WHERE A.guest_id = :guest_id
                            ", $alltuples);

            echo "<br>AFTER DELETE REQUEST: </br>";
            printDeleteRequestResultA();
            printDeleteRequestResultGM2();

            OCICommit($db_conn);
        }

        function printUpdateRequestResult() {
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM location_at");
            echo "<br>Retrieved data from table location_at:<br>";
            echo "<table>";
            echo "<tr>
            <th>Building Number</th>
            <th>Street Name</th>
            <th>City</th>
            <th>Province</th>
            <th>Postal Code</th>
            <th>VenueID</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
						"<td>" . $row[5] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function handleUpdateRequest() {
            global $db_conn;

            $tuple = array (
                ":old_building_num" => $_POST['updateBuildingNumberOld'],
                ":old_street_name" => $_POST['updateStreetNameOld'],
                ":old_city" => $_POST['updateCityOld'],
                ":old_province" => $_POST['updateProvinceOld'],
                ":old_postal_code" => $_POST['updatePostalCodeOld'],
                ":old_venue_id" => $_POST['updateVenueIDOld'],

                // check if null? use old value
                ":new_building_num" => $_POST['updateBuildingNumberNew'],
                ":new_street_name" => $_POST['updateStreetNameNew'],
                ":new_city" => $_POST['updateCityNew'],
                ":new_province" => $_POST['updateProvinceNew'],
                ":new_postal_code" => $_POST['updatePostalCodeNew'],
                ":new_venue_id" => $_POST['updateVenueIDNew']
            );

            $alltuples = array (
                $tuple
            );

            echo "<br>BEFORE UPDATE REQUEST: </br>";
            printUpdateRequestResult();

            executeBoundSQL("
                                UPDATE location_at L
                                SET L.building_num = :new_building_num
                                WHERE L.building_num = :old_building_num
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.street_name = :new_street_name
                                WHERE L.street_name = :old_street_name
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.city = :new_city
                                WHERE L.city = :old_city
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.province = :new_province
                                WHERE L.province = :old_province
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.postal_code = :new_postal_code
                                WHERE L.postal_code = :old_postal_code
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.venue_id = :new_venue_id
                                WHERE L.venue_id = :old_venue_id
                            ", $alltuples);

            echo "<br>AFTER UPDATE REQUEST: </br>";
            printUpdateRequestResult();

            OCICommit($db_conn);
        }

        function handleAggHavingRequest() {
            global $db_conn;

            // count number of venues with capacity > selected capacity

            $capacity = $_GET['chooseVenueCapacity'];

            $result = executePlainSQL("
                                        SELECT V.name, COUNT(*) as venue_count
                                        FROM venue V
                                        GROUP BY V.name
                                        HAVING MAX(V.capacity) > $capacity
            ");

            echo "<br>Retrieved aggregate having data:<br>";
            echo "<table>";
            echo "
				<tr>
					<th>Venue Name</th>
                    <th>Count</th>
				</tr>
			";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" .
					"<tr>";
            }

            echo "</table>";
            
            OCICommit($db_conn);
        }

        function handleDivisionRequest() {
            global $db_conn;

            // select all guests that have attended all events that have the selected type
            $eventType = $_GET['divideAttendees'];

            $result = executePlainSQL("
                            SELECT A.guest_id, A.first_name, A.last_name
                            FROM attendees A
                            WHERE NOT EXISTS (
                                    SELECT EO.event_id
                                    FROM event_offer EO
                                    WHERE EO.type ='$eventType'
                                    MINUS
                                    SELECT H.event_id
                                    FROM has H
                                    WHERE H.guest_id= A.guest_id
                                    )
            ");

            echo "<br>Retrieved division data:<br>";

            echo "<table>";
            echo "
				<tr>
					<th>Guest ID</th>
					<th>First Name</th>
                    <th>Last Name</th>
				</tr>
			";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
                        "<td>" . $row[2] . "</td>" .
					"<tr>";
            }

            echo "</table>";

            OCICommit($db_conn);
        }

        function handleSelection() {
            global $db_conn;
            $num = $_GET['num'];
            $option = $_GET['option'];
            $cuisine = $_GET['cuisine'];
            $result = executePlainSQL("SELECT * from catering where 
            num_orders=$num $option cuisine='$cuisine'");
            echo "<table>";
            echo "<tr>
            <th>ID</th>
            <th>Number of Orders</th>
            <th>Cuisine</th>
            </tr>";
            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
                        "<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" . 
                        "<td>" . $row[2] . "</td>" . 
                    "<tr>";
                }
            echo "</table>";
            OCICommit($db_conn);
        }

        // show all tables => let users choose => show attributes
        function handleViewTables() {
            global $db_conn;
            $result = executePlainSQL("SELECT table_name from user_tables");
            echo "<table>";
            echo "<tr>
            <th>Tables</th>
            </tr>";
            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
        }

        function handleAttributes1() {
            global $db_conn;
            if (empty($_GET['att1'])) {
                $result = executePlainSQL("SELECT * from getting_married_1");
                echo "<table>";
                echo "<tr>
                <th>Guest ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Credit Number</th>
                <th>Budge</th>
                </tr>";
            } else {
                $i = 0;
                foreach ($_GET['att1'] as $selectedOption) {
                    if ($i > 0) {
                        $attributes.= ", ";
                    }
                    $i++;
                    $attributes.= $selectedOption;
                }

                $result = executePlainSQL("SELECT $attributes from getting_married_1");
                echo $attributes."\n";
                echo "<table>";
            }
            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
                        "<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" .
                        "<td>" . $row[2] . "</td>" .
                        "<td>" . $row[3] . "</td>" .
                        "<td>" . $row[4] . "</td>" .
                        "<td>" . $row[5] . "</td>" .
                    "<tr>";
            }
            echo "</table>";
            OCICommit($db_conn);
        }

        function handleAttributes2() {
            global $db_conn;
            if (empty($_GET['att2'])) {
                $result = executePlainSQL("SELECT * from venue");
                echo "<table>";
                echo "<tr>
                <th>Venue ID</th>
                <th>Capacity</th>
                <th>Name</th>
                </tr>";
            } else {
                $i = 0;
                foreach ($_GET['att2'] as $selectedOption) {
                    if ($i > 0) {
                        $attributes.= ", ";
                    }
                    $i++;
                    $attributes.= $selectedOption;
                }

                $result = executePlainSQL("SELECT $attributes from venue");
                echo $attributes."\n";
                echo "<table>";
            }
            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
                        "<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" .
                        "<td>" . $row[2] . "</td>" .
                    "<tr>";
            }
            echo "</table>";
            OCICommit($db_conn);
        }

        // filter venue and events offer based on your desire price range
        // select * from venue join events on venue.id = events.id where cost (<|>) = number
        function handleJoin() {
            global $db_conn;
            $sign = $_GET['sign'];
            $cost = $_GET['cost'];
            $result = executePlainSQL("SELECT v.name, v.capacity, e.type, e.cost, e.date_time 
            from event_offer e inner join venue v 
            on e.venue_id = v.venue_id where cost $sign $cost");

            echo "<table>";
            echo "<tr>
            <th>Venue Name</th>
            <th>Venue Capacity</th>
            <th>Event Type</th>
            <th>Cost</th>
            <th>Date</th>
            </tr>";
            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
                        "<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" . 
                        "<td>" . $row[2] . "</td>" . 
                        "<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
                    "<tr>";
            }
            echo "</table>";
            OCICommit($db_conn);
        }

        // Count number of attendees per table_num
        function handleAggGr() {
            global $db_conn;
            $result = executePlainSQL("SELECT table_num, count(*) from attendees group by table_num");

            echo "<table>";
            echo "<tr>
            <th>Table Number</th>
            <th>Number of Guests</th>
            </tr>";

            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
                        "<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" . 
                    "<tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
        }

        // find events and the venues that offer them
        // where their cost is lower then the average price group by year
        // => see which venue offer cheapest events throughout the years
        function handleAggGrNest() {
            global $db_conn;
            $result = executePlainSQL("SELECT venue_id, type, cost from event_offer
            where cost <= ALL (select avg(cost) from event_offer 
            group by extract(year from date_time))");

            echo "<table>";
            echo "<tr>
            <th>Venue ID</th>
            <th>Event Type</th>
            <th>Cost</th>
            </tr>";

            while ($row = oci_fetch_row($result)) {
                echo "<tr>" . 
                        "<td>" . $row[0] . "</td>" . 
                        "<td>" . $row[1] . "</td>" . 
                        "<td>" . $row[2] . "</td>" . 
                    "<tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
        }

        // HANDLE ALL POST ROUTES

        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('submitUpdateLocation', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('submitInsertPGM2', $_POST)) {
                    handleInsertRequest();
                } else if (array_key_exists('submitDeleteAttendees', $_POST)) {
                    handleDeleteRequest();
                } else if (array_key_exists('selection', $_POST)) {
                    handleSelection();
                }
                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('submitDivision', $_GET)) {
                    handleDivisionRequest();
                } else if (array_key_exists('submitHavingVenue', $_GET)) {
                    handleAggHavingRequest();
                } else if (array_key_exists('submitViewLocation', $_GET)) {
                    handleViewRequest();
                } else if (array_key_exists('submitViewAPGM2', $_GET)) {
                    handleAPGM2Request();
                } else if (array_key_exists('selection', $_GET)) {
                    handleSelection();
                } else if (array_key_exists('projection1', $_GET)) {
                    handleViewTables();
                } else if (array_key_exists('projection2', $_GET)) {
                    handleAttributes1();
                } else if (array_key_exists('projection3', $_GET)) {
                    handleAttributes2();
                } else if (array_key_exists('join', $_GET)) {
                    handleJoin();
                } else if (array_key_exists('agggr', $_GET)) {
                    handleAggGr();
                } else if (array_key_exists('nestedagg', $_GET)) {
                    handleAggGrNest();
                }
                disconnectFromDB();
            }
        }
		?>
    </body>
<html>
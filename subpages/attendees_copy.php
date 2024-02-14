<html>
    <head>
        <title>Selection Query</title>
        <style>
            h1{
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

        function executePlainSQL($cmdstr) {
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); 
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement);
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
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
                } else if (array_key_exists('selection', $_POST)) {
                    handleSelection();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }

                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('selection', $_GET)) {
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

		if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['selectioncater']) 
                || isset($_GET['viewtables'])
                || isset($_GET['viewatt1'])
                || isset($_GET['viewatt2'])
                || isset($_GET['joinvenue'])
                || isset($_GET['agggr1'])
                || isset($_GET['agggr2'])) {
            handleGETRequest();
        }
		?>
        <div class="split right" id='query'>
        <p id="selection">
        <H2>4. Selection - Catering</H2>
        <p>Pick catering services</p>
        <form method="GET" action="attendees_copy.php">
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
        <form method="GET" action="attendees_copy.php">
            <input type="hidden" id="viewtables" name="viewtables">
            <input type = "submit" value="View Tables" name ="projection1">
        </form>
        <h3>View attributes of GETTING_MARRIED_1</h3>
        <form method="GET" action="attendees_copy.php">
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
        <form method="GET" action="attendees_copy.php">
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
        <form method="GET" action="attendees_copy.php">
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
        <form method="GET" action="attendees_copy.php">
            <input type="hidden" id="agggr1" name="agggr1">
            <input type = "submit" value="Check" name ="agggr">
        </form>
        <hr> </hr>

        <p id="nestedagg">
        <H2>9. Nested Aggregation with Group By</H2>
        <p> Find events and the venues that offer these events 
            where their price is below the average price per year <br> 
            (Find venues that have been offering cheap events throughout history)</p>
        <form method="GET" action="attendees_copy.php">
            <input type="hidden" id="agggr2" name="agggr2">
            <input type = "submit" value="Find" name ="nestedagg">
        </form>
        <hr> </hr>
        </div>

        <div class="split left" id='result'>
        </div>
    </body>
</html>

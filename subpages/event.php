<html>
    <head>
        <title>Event Table</title>
        <style>
            h1{
                text-decoration: underline;
            }
            table, th, td{
                border: 2px solid black;
            }
        </style> 
    </head>

    <body>
        <h1>Event_Offers(event_ID, type, cost, date_time, venue_ID)</h1>

        <h2>Insert Values into Event Offers</h2>
        <form method="POST" action="event.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Event ID: <input type="text" name="insServID"> <br /><br />
            Event Type: <input type="text" name="insCost"> <br /><br />
            Cost: <input type="text" name="insServID"> <br /><br />
            Date/Type: <input type="text" name="insCost"> <br /><br />
            Venue ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        <form>

       <hr> </hr>

        <h2> View Event Offer Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Event ID</th>
                <th>Event Type</th>
                <th>Event Cost</th>
                <th>Event Date/Time</th>
                <th>Venue ID</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>  

        <hr> </hr>

        <h2>Delete Values From Event Offers Table</h2>
        <p> Note: Values are Case Sensitive</p>
        <form method="POST" action="event.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Event ID: <input type="text" name="insServID"> <br /><br />
            Event Type: <input type="text" name="insCost"> <br /><br />
            Cost: <input type="text" name="insServID"> <br /><br />
            Date/Type: <input type="text" name="insCost"> <br /><br />
            Venue ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        <form>


    </body>



</html>

<html>
    <head>
        <title>Outsource Table</title>
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
        <h1>Outsource(service_ID, venue_ID, date_time)</h1>

        <h2>Insert Values into Outsource</h2>
        <form method="POST" action="e2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Venue_ID: <input type="text" name="insCost"> <br /><br />
            Date/Time: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Outsource Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Genre</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <hr> </hr>  

        <h2>Delete Values From Outsource</h2>
        <p> Note: Values are Case Sensitive</p>
        <form method="POST" action="e2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Venue_ID: <input type="text" name="insCost"> <br /><br />
            Date/Time: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>



    </body>



</html>

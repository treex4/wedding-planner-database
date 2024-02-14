<html>
    <head>
        <title>Permits Table</title>
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
        <h1>Permits_Obtains(permit_ID, type, cost, issue_date, validity, venue_ID)</h1>

        <h2>Insert Values into Permits_Obtains</h2>
        <form method="POST" action="permits.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Permit ID: <input type="text" name="insServID"> <br /><br />
            Type: <input type="text" name="insCost"> <br /><br />
            Cost: <input type="text" name="insServID"> <br /><br />
            Issue Date: <input type="text" name="insCost"> <br /><br />
            Validity: <input type="text" name="insServID"> <br /><br />
            Venue ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Permits Obtains Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Permit ID</th>
                <th>Type</th>
                <th>Cost</th>
                <th>Issue Date</th>
                <th>Validity</th>
                <th>Venue ID</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <hr> </hr>  

        <h2>Delete Values From Permits_Obtains</h2>
        <form method="POST" action="permits.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Permit ID: <input type="text" name="insServID"> <br /><br />
            Type: <input type="text" name="insCost"> <br /><br />
            Cost: <input type="text" name="insServID"> <br /><br />
            Issue Date: <input type="text" name="insCost"> <br /><br />
            Validity: <input type="text" name="insServID"> <br /><br />
            Venue ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>

    </body>



</html>

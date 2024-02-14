<html>
    <head>
        <title>Contract Table</title>
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
        <h1>SignsContractWith(venue_ID, guest_ID, date)</h1>

        <h2>Insert Values into SignsContractWith</h2>
        <form method="POST" action="contract.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Venue ID: <input type="text" name="insServID"> <br /><br />
            Guest ID: <input type="text" name="insCost"> <br /><br />
            Date: <input type="text" name="insCost"> <br /><br />
            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Signs Contract With Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Venue ID</th>
                <th>Guest ID</th>
                <th>Date</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    

        <hr> </hr>

        <h2>Delete Values From Signs Contract With Table</h2>
        <p> Note: Values are Case Sensitive
        <form method="POST" action="contract.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Venue ID: <input type="text" name="insServID"> <br /><br />
            Guest ID: <input type="text" name="insCost"> <br /><br />
            Date: <input type="text" name="insCost"> <br /><br />
            <input type = "submit" value="Delete Value" name ="submit">
        </form>

        <hr> </hr>


        
    </body>



</html>

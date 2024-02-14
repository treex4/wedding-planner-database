<html>
    <head>
        <title>Has Table</title>
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
        <h1>Has(event_ID, guest_ID, #guests)</h1>

        <h2>Insert Values into Has</h2>
        <form method="POST" action="has.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Event ID: <input type="text" name="insServID"> <br /><br />
            Guest ID: <input type="text" name="insCost"> <br /><br />
            Number of Guests: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Has Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Event ID</th>
                <th>Guest ID</th>
                <th>Number of Guests</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <hr> </hr>   
        
        <h2>Delete Values From Has</h2>
        <form method="POST" action="has.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Event ID: <input type="text" name="insServID"> <br /><br />
            Guest ID: <input type="text" name="insCost"> <br /><br />
            Number of Guests: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>

    </body>



</html>

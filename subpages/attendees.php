<html>
    <head>
        <title>Attendees Table</title>
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
        <h1>Attendees(guest_ID, first_name, last_name, table#, diet)</h1>

        <h2>Insert Values Into Attendees</h2>
        <form method="POST" action="attendees.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Guest ID: <input type="text" name="insID"> <br /><br />
            First Name: <input type="text" name="insFirst"> <br /><br />
            Last Name: <input type="text" name="insLast"> <br /><br />
            Table Number: <input type="text" name="insTbl"> <br /><br />
            Diet: <input type="text" name="insDiet"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>
        <hr> </hr>

        <h2> View Attendees Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th>Guest ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Table Number</th>
                <th>Diet</th>
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
        
        <br> </br>
        <hr> </hr>

        <h2> Delete Values From Attendees </h2>
        <p> Note: Values are Case Sensitive </p>

        <form method="POST" action="attendees.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Guest ID: <input type="text" name="insID"> <br /><br />
            First Name: <input type="text" name="insFirst"> <br /><br />
            Last Name: <input type="text" name="insLast"> <br /><br />
            Table Number: <input type="text" name="insTbl"> <br /><br />
            Diet: <input type="text" name="insDiet"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>
        <hr> </hr>
    </body>
</html>

<html>
    <head>
        <title>Location At Table</title>
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
        <h1>Location_At(building#, street, name, city, province, postal_code, venue_ID)</h1>

        <h2>Insert Values into Location At</h2>
        <form method="POST" action="location.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Building Number: <input type="text" name="insServID"> <br /><br />
            Street: <input type="text" name="insCost"> <br /><br />
            Name: <input type="text" name="insCost"> <br /><br />
            City: <input type="text" name="insCost"> <br /><br />
            Province: <input type="text" name="insCost"> <br /><br />
            Postal Code: <input type="text" name="insCost"> <br /><br />
            Venue ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">

        </form>

       <hr> </hr>

        <h2> View Location At Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Buliding Number</th>
                <th>Street</th>
                <th>Name</th>
                <th>City</th>
                <th>Province</th>
                <th>Postal Code</th>
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
                <td>NULL</td>
        </table>  

        <hr> </hr>   

        <h2>Delete Values From Location At</h2>
        <form method="POST" action="location.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Building Number: <input type="text" name="insServID"> <br /><br />
            Street: <input type="text" name="insCost"> <br /><br />
            Name: <input type="text" name="insCost"> <br /><br />
            City: <input type="text" name="insCost"> <br /><br />
            Province: <input type="text" name="insCost"> <br /><br />
            Postal Code: <input type="text" name="insCost"> <br /><br />
            Venue ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">

        </form>

    </body>



</html>

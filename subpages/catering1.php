<html>
    <head>
        <title>Catering 1 Table</title>
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
        <h1>Catering1(service_ID, num_orders)</h1>

        <h2>Insert Values into Catering1</h2>
        <form method="POST" action="catering1.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Number Of Orders: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

        
        <hr> </hr>

        <h2> View Catering 1 Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Number of Orders</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    

        <hr> </hr>
        

        <h2>Delete Values From Catering1</h2>
        <p> Note: Values are Case Sensitive </p>
        <form method="POST" action="catering1.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Number Of Orders: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>

        <hr> </hr>

    </body>



</html>

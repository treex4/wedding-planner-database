<html>
    <head>
        <title>Catering 2 Table</title>
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
        <h1>Catering2(service_ID, cuisine)</h1>

        <h2>Insert Values into Catering2</h2>
        <form method="POST" action="catering2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Cuisine Type: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

          
        <hr> </hr>

        <h2> View Catering 2 Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Cuisine</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    

        <hr> </hr>


        <h2>Delete Values From Catering 2</h2>
        <p> Note: Value Are Case Sensitive </p>
        <form method="POST" action="catering2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Cuisine Type: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>

        <hr> </hr>


    </body>



</html>

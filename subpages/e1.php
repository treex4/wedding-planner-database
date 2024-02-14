<html>
    <head>
        <title>Employ Employee 1 Table</title>
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
        <h1>Employ_Employee1(service_ID, name)</h1>

        <h2>Insert Values into Employ Employee 1</h2>
        <form method="POST" action="e1.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service ID: <input type="text" name="insServID"> <br /><br />
            Name: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Employ Employee Table 1 </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Name</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    

        <hr> </hr>
        <h2>Delete Values From Employ Employe 1</h2>
        <form method="POST" action="e1.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service ID: <input type="text" name="insServID"> <br /><br />
            Name: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>



    </body>



</html>

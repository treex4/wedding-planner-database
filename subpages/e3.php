<html>
    <head>
        <title>Employ Employee 3 Table</title>
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
        <h1>Employ_Employe3(service_ID, employer_address)</h1>

        <h2>Insert Values into Employ Employee 3</h2>
        <form method="POST" action="e3.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service ID: <input type="text" name="insServID"> <br /><br />
            Employer Address: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Employ Employee Table 3 </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Employer Address</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>  

        <hr> </hr>


        <h2>Delete Values From Employ Employee 3</h2>
        <form method="POST" action="e3.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service ID: <input type="text" name="insServID"> <br /><br />
            Employer Address: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>



    </body>



</html>

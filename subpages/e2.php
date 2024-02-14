<html>
    <head>
        <title>Employ Employee 2 Table</title>
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
        <h1>Employ_Employee2(service_ID, employer_ID)</h1>

        <h2>Insert Values into Employ Employees 2</h2>
        <form method="POST" action="e2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Employer_ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Employ Employee Table 2 </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Employer ID</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>  

        <hr> </hr>

        <h2>Delete Values From Employ Employees 2</h2>
        <form method="POST" action="e2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Employer_ID: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>

       <hr> </hr>
    </body>



</html>

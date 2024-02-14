<html>
    <head>
        <title>FloralDecor2Table</title>
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
        <h1>Floral_Decor2(service_ID, colour)</h1>

        <h2>Insert Values into Floral Decor 2</h2>
        <form method="POST" action="floraldecor2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Colour: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Floral Decor Table 2 </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Colour</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <hr> </hr>     

        <h2>Insert Values into Floral Decor 2</h2>
        <form method="POST" action="floraldecor2.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Colour: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submit">
        </form>

    </body>



</html>

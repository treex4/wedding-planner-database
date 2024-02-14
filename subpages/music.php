<html>
    <head>
        <title>Music Table</title>
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
        <h1>Music(service_ID, genre)</h1>

        <h2>Insert Values into Music</h2>
        <form method="POST" action="music.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Genre: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View Music Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Service ID</th>
                <th>Genre</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <hr> </hr>  


        <h2>Delete Values From Music </h2>
        <p> Note: Values are Case Sensitive</p>
        <form method="POST" action="music.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Genre: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">
        </form>

    </body>



</html>

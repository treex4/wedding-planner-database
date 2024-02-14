<html>
    <head>
        <title>MC and Host Table</title>
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
        <h1>MC/Host(guest_ID, phone#)</h1>

        <h2>Insert Values into MC/Host</h2>
        <form method="POST" action="mchost.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Guest ID: <input type="text" name="insServID"> <br /><br />
            Phone Number: <input type="text" name="insCost"> <br /><br />
            
            <input type = "submit" value="Insert Value" name ="submit">
        </form>

       <hr> </hr>

        <h2> View MC and Host At Table </h2>
        <table>
            <tr>
                <th> Entry Number</th>
                <th> Guest ID</th>
                <th>Phone Number</th>
            </tr>

            <tr>
                <td>1</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <hr> </hr>   

        <h2>Delete Values From MC/Host</h2>
        <form method="POST" action="mchost.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Guest ID: <input type="text" name="insServID"> <br /><br />
            Phone Number: <input type="text" name="insCost"> <br /><br />
            
            <input type = "submit" value="Delete Value" name ="submit">
        </form>

    </body>



</html>

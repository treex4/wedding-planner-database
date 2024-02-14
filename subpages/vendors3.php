<html>
    <head>
        <title>Vendors1Table</title>
        <style>
            h1{
                text-decoration: underline;
            }
        </style> 
    </head>

    <body>
        <h1>Vendors3(service_ID, building_num)</h1>

        <h2>Insert Values into Vendors3</h2>
        <form method="POST" action="vendors3.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Building_Num: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">

    </body>



</html>

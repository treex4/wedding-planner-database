<html>
    <head>
        <title>Photo Video Table</title>
        <style>
            h1{
                text-decoration: underline;
            }
        </style> 
    </head>

    <body>
        <h1>Photo_Video(service_ID, camera)</h1>

        <h2>Insert Values into Photo_Video</h2>
        <form method="POST" action="photovideo.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service_ID: <input type="text" name="insServID"> <br /><br />
            Camera: <input type="text" name="insCost"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submit">

    </body>



</html>

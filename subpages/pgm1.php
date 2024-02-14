<html>
    <head>
        <title>Person Getting Married 1 Table</title>
        <style>
            h1{
                text-decoration: underline;
            }
        </style> 
    </head>

    <body>
        <h1>PersonGettingMarried#1(guest_ID, phone#, email, address, credit#, budget)</h1>

        <h2>Insert Values into PersonGettingMarried#1</h2>
        <form method="POST" action="pgm1.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Guest ID: <input type="text" name="insServID"> <br /><br />
            Phone Number: <input type="text" name="insCost"> <br /><br />
            Email: <input type="text" name="insServID"> <br /><br />
            Address: <input type="text" name="insCost"> <br /><br />
            Credit Card Number: <input type="text" name="insServID"> <br /><br />
            Budget: <input type="text" name="insCost"> <br /><br />


            <input type = "submit" value="Insert Value" name ="submit">

    </body>



</html>

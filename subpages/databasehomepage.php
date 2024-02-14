<!-- NOTES FOR MY OWN UNDERSTANDING OF HTML: 
    1) encapsulate the whole code in <html>
    2) <head> </head> are to set the document metadata (header)
    3) everything is body is displayed on page, everything in head isn't
    4) H1: main title, H2: subheading H3: sub-subheading
    5) Form: container for different types of input elements
-->


<!-- Begin HTML
-->
<html>
    <!-- Page's Metadata
    -->
    <head>
        <title>CPSC304 Project Group 88</title>
        <style>
            h2{
                text-decoration: underline;
            }
            table, th, td{
                border: 2px solid black;
            }
        </style>    
    </head>



    <body>


        <h1>Wedding Venue Database</h1>
        <hr> </hr>
        <h2>Menu</h2>
        <header>
            <nav>
                <ul>
                <li><a href="#attendees">1. Attendees</a></li>
                <li><a href="#catering1">2. Catering</a></li>
                <li><a href="#contract">3. Contact</a></li>
                <li><a href="#e1">4. Employ Employee (1)</a></li>
                <li><a href="#e2">5. Employ Employee (2)</a></li>
                <li><a href="#e3">6. Employ Employee (3)</a></li>
                <li><a href="#event">7. Event</a></li>
                <li><a href="#floral1">8. Floral and Decor</a></li>
                <li><a href="#has">9. Has</a></li>
                <li><a href="#location">10. Location</a></li>
                <li><a href="#mchost">11. MC and Host</a></li>
                <li><a href="#music">12. Music</a></li>
                <li><a href="#outsource"> 13. Outsource</a></li>
                <li><a href="#permits">14. Permits</a></li>
                <li><a href="#pgm1">15. Person Getting Married (1)</a></li>
                <li><a href="#pgm2">16. Person Getting Married (2)</a></li>
                <li><a href="#photovideo">17. Photo and Video</a></li>
                <li><a href="#v1">18. Vendors (1)</a></li>
                <li><a href="#v2">19. Vendors (2)</a></li>
                <li><a href="#v3">20. Vendors (3)</a></li>
                <li><a href="#v4">21. Vendors (4)</a></li>
                <li><a href="#v5">22. Vendors (5)</a></li>
                <li><a href="#v6">23. Vendors (6)</a></li>
                <li><a href="#v7">24. Vendors (7)</a></li>
                <li><a href="#venue"> 25. Venue</a></li>
                <li><a href=#join>26. Filter Through Venues and Events</a></li>
                
        
            
                
        </ul>    

        </nav>

        <hr> </hr>

           <!-- ATTENDEES TABLE
            -->
        <p id="attendees">
        <h2>1. Attendees Table</h2>

        <H3>Insert Values Into Attendees</H3>
            <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertAttendees" name="insertAttendees">
            Guest ID: <input type="text" name="insGuestIDAttendees"> <br /><br />
            First Name: <input type="text" name="insFirstNameAttendees"> <br /><br />
            Last Name: <input type="text" name="insLastNameAttendees"> <br /><br />
            Table Number: <input type="text" name="insTableNumberAttendees"> <br /><br />
            Diet: <input type="text" name="insDietAttendees"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertAttendees">
            </form>


            <H3>Count The Number of Attendees</H3>
            <form method="POST" action="databasehomepage.php">
            <label for="groupby">Choose a Field to Group By:</label>
            <input type="hidden" id="countAttendees" name="countAttendees">
                <select name="groupby" id="groupby">
                    <option value = "GuestID">Guest ID <br>
                    <option value = "First Name">First Name <br>
                    <option value = "Last Name">Last Name<br>
                    <option value = "Table Number">Table Number <br>
                    <option value = "Diet">Diet <br>

            <input type = "submit" value="Count" name ="Count">
            </form>

               </select>
                    

         

            <H3> View Attendees Table </H3>
            <table>
            <tr>
            <th>Guest ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Table Number</th>
            <th>Diet</th>
            </tr>
            </table> 
            <br> </br>


        <H3> Delete Values From Attendees </H3>
        <p> Note: Values are Case Sensitive </p>

        <form method="POST" action="databasehomepage.php">
        <input type="hidden" id="deleteAttendees" name="deleteAttendees">
        Guest ID: <input type="text" name="insGuestIDAttendeesDelete"> <br /><br />
        First Name: <input type="text" name="insFirstNameAttendeesDelete"> <br /><br />
        Last Name: <input type="text" name="insLastNameAttendeesDelete"> <br /><br />
        Table Number: <input type="text" name="insTableNumberAttendeesDelete"> <br /><br />
        Diet: <input type="text" name="insDietAttendeesDelete"> <br /><br />

         <input type = "submit" value="Delete Value" name ="submitDeleteAttendees">
        </form>
        <hr> </hr>


        <p id="catering1">
         <H2>2. Catering</H2>

        <H3>Insert Values into Catering</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertCatering1" name="insertCatering1">
            Service ID: <input type="text" name="insServiceIDCatering1"> <br /><br />
            Number Of Orders: <input type="text" name="insNumOrderCatering1"> <br /><br />
            Cuisine: <input type="text" name="insCuisineCatering1"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertCatering1">
        </form>

        <H3>Filter Data</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="filterCatering" name="filterCatering">
            Number of Orders= <input type="text" name="insNumOrdersFilter"> 

             <label for="cuisineFilter">Cuisine=</label>
        <select name = "cuisineFilter" id="cuisineFilter">
            <option value ="canadian">Canadian</option>
            <option value ="chinese">Chinese</option>
            <option value ="thai">Thai</option>
            <option value ="indian">Indian</option>
            <option value ="italian">Italian</option>
        </select>
        

            <input type = "submit" value="Filter Values" name ="submitInsertCatering1">
        </form>

       
            
            


        <H3> View Catering Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Number of Orders</th>
                <th>Cuisine</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    
        

        <H3>Delete Values From Catering </H3>
        <p> Note: Values are Case Sensitive </p>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteCatering1" name="deleteCatering1">
            Service ID: <input type="text" name="insServiceIDCatering1Delete"> <br /><br />
            Number Of Orders: <input type="text" name="insNumOrderCatering1Delete"> <br /><br />
            Cuisine: <input type="text" name="insCuisineCatering1Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteCatering1">
        </form>

        <hr> </hr>



    




        <p id="contract">
         <H2>3 Contract</H2>

        <H3>Insert Values into Contract</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertContract" name="insertContract">
            Venue ID: <input type="text" name="insVenueIDContract"> <br /><br />
            Guest ID: <input type="text" name="insGuestIDContract"> <br /><br />
            Date: <input type="text" name="insDateContract"> <br /><br />
            <input type = "submit" value="Insert Value" name ="submitInsertContract">
        </form>


        <H3> View Contract Table </H3>
        <table>
            <tr>
                <th> Venue ID</th>
                <th>Guest ID</th>
                <th>Date</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    


        <H3>Delete Values From Contract Table</H3>
        <p> Note: Values are Case Sensitive
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Venue ID: <input type="text" name="insVenueIDContractDelete"> <br /><br />
            Guest ID: <input type="text" name="insGuestIDContractDelete"> <br /><br />
            Date: <input type="text" name="insDateContractDelete"> <br /><br />
            <input type = "submit" value="Delete Value" name ="submitDeleteContract">
        </form>

        <hr> </hr>








        <p id="e1">
         <H2>5. Employ Employee (1)</H2>

        <H3>Insert Values into Employ Employee (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertE1" name="insertE1">
            Service ID: <input type="text" name="insServiceIDE1"> <br /><br />
            Name: <input type="text" name="insNameE1"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertE1">
        </form>

        <H3> View Employ Employee Table (1) </H3>
        <table>
            <tr>
                <th> Service ID</th>
                <th>Name</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>    

        <H3>Delete Values From Employ Employee (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service ID: <input type="text" name="insServiceIDE1Delete"> <br /><br />
            Name: <input type="text" name="insNameE1Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteE1">
        </form>

        <hr></hr>






        <p id="e2">
        <H2>6. Employ Employee (2)</H2>

        <H3> Insert Values into Employ Employees (2)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertE2" name="insertE2">
            Service ID: <input type="text" name="insServiceIDE2"> <br /><br />
            Employer ID: <input type="text" name="insEmployerIDE2"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertE2">
        </form>

        <H3> View Employ Employee Table 2 </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Employer ID</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>  


        <H3>Delete Values From Employ Employees 2</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Service ID: <input type="text" name="insServiceIDE2Delete"> <br /><br />
            Employer ID: <input type="text" name="insEmployerIDE2Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteE2">
        </form>

       <hr> </hr>






        <p id="e3">
          <H2>7. Employ Employee (3)</H2>

        <H3>Insert Values into Employ Employee (3)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertE3" name="insertE3">
            Service ID: <input type="text" name="insserviceIDE3"> <br /><br />
            Employer Address: <input type="text" name="insaddressE3"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertE3">
        </form>


        <H3> View Employ Employee Table (3) </H3>
        <table>
            <tr>
                <th> Service ID</th>
                <th>Employer Address</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>  


        <H3>Delete Values From Employ Employee (3)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteE3" name="deleteE3">
            Service ID: <input type="text" name="insserviceIDE3Delete"> <br /><br />
            Employer Address: <input type="text" name="insaddressE3Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteE3">
        </form>
        <HR></HR>






        <p id="event">
          <H2> 8. Event</H2>

        <H3>Insert Values into Event Table</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertEvent" name="insertEvent">
            Event ID: <input type="text" name="insEventIDEvent"> <br /><br />
            Event Type: <input type="text" name="insEventTypeEvent"> <br /><br />
            Cost: <input type="text" name="insCostEvent"> <br /><br />
            Date/Time: <input type="text" name="insDateEvent"> <br /><br />
            Venue ID: <input type="text" name="insVenueIDEvent"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertEvent">
        </form>

        <H3>Select Fields To View</H3>
        <form metho="POST" action=databasehomepage.php>
            <input type = "checkbox" name ="Event ID" id="eventID" value ="Event ID">Event ID<br>
            <input type = "checkbox" name ="Event Type" id="eventType" value = "Event Type">Event Type<br>
            <input type = "checkbox" name ="Event Cost" id="eventCost" value = "Event Cost">Event Cost<br>
            <input type = "checkbox" name ="Event Date/Time" id="eventDate" value = "Event Date/Time">Event Date/Time<br>
            <input type = "checkbox" name ="Venue ID" id="venueID" value = "Venue ID">Venue ID<br>

            <input type = "submit" value="Select" name="selectFields">
        </form>


        <H3> View Event Table </H3>
        <table>
            <tr>
                <th> Event ID</th>
                <th>Event Type</th>
                <th>Event Cost</th>
                <th>Event Date/Time</th>
                <th>Venue ID</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
            </tr>
        </table>  


        

        <H3>Delete Values From Event Table</H3>
        <p> Note: Values are Case Sensitive</p>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteEvent" name="deleteEvent">
            Event ID: <input type="text" name="insEventIDEventDelete"> <br /><br />
            Event Type: <input type="text" name="insEventTypeEventDelete"> <br /><br />
            Cost: <input type="text" name="insCostEventDelete"> <br /><br />
            Date/Time: <input type="text" name="insDateEventDelete"> <br /><br />
            Venue ID: <input type="text" name="insVenueIDEventDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteEvent">
        <form>







        <hr></hr>

        <p id="floral1">
        <H2>8. Floral</H2>

        <H3>Insert Values into Floral (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertFloral1" name="insertFloral1">
            Service ID: <input type="text" name="insServiceIDFloral1"> <br /><br />
            Flower: <input type="text" name="insFlowerFloral1"> <br /><br />
            Colour: <input type="text" name="insColourFloral1"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertF1">
        </form>


        <H3> View Floral</H3>
        <table>
            <tr>
                <th> Service ID</th>
                <th>Flower</th>
                <th>Colour</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>

        </table>  

        <H3>Delete Values From Floral</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteFloral1" name="deleteFloral1">
            Service ID: <input type="text" name="insServiceIDFloral1Delete"> <br /><br />
            Flower: <input type="text" name="insFlowerFloral1Delete"> <br /><br />
            Colour: <input type="text" name="insColourFloral1Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteF1">
        </form>










        <hr></hr>

        <p id="has">
        <H2>9. Has</H2>

        <H3>Insert Values into Has</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertHas" name="insertHas">
            Event ID: <input type="text" name="insEventIDhas"> <br /><br />
            Guest ID: <input type="text" name="insGuestIDHas"> <br /><br />
            Number of Guests: <input type="text" name="insGuestNumHas"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertHas">
        </form>


        <H3> View Has Table </H3>
        <table>
            <tr>
                <th> Event ID</th>
                <th>Guest ID</th>
                <th>Number of Guests</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  
   
        
        <H3>Delete Values From Has</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteHas" name="deleteHas">
            Event ID: <input type="text" name="insEventIDhasDelete"> <br /><br />
            Guest ID: <input type="text" name="insGuestIDHasDelete"> <br /><br />
            Number of Guests: <input type="text" name="insGuestNumHasDekete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteHas">
        </form>






            <hr></hr>
            <p id="location">

           <H2>10. Location Table</H2>

        <H3>Insert Values into Location</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertLocation" name="insertLocation">
            Building Number: <input type="text" name="insBuildingNumLocation"> <br /><br />
            Street: <input type="text" name="insStreetLocation"> <br /><br />
            City: <input type="text" name="insCityLocation"> <br /><br />
            Province: <input type="text" name="insProvLocation"> <br /><br />
            Postal Code: <input type="text" name="insPCodeLocation"> <br /><br />
            Venue ID: <input type="text" name="insVenueIdLocation"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertLocation">

        </form>

        <H3>Update Values in Location</H3>
        <p> Note: Values are case sensitive </p>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertLocation" name="insertLocation">
            <p>Select The Value You Want To Update: </p>
            Old Building Number: <input type="text" name="updateBuildingNumberOld"> <br /><br />
            Old Street: <input type="text" name="updateStreetNameOld"> <br /><br />
            Old City: <input type="text" name="updateCityOld"> <br /><br />
            Old Province: <input type="text" name="updateProvinceOld"> <br /><br />
            Old Postal Code: <input type="text" name="updatePostalCodeOld"> <br /><br />
            Old Venue ID: <input type="text" name="updateVenueIDOld"> <br /><br />
            <br></br>

            <p>Enter The Updates You Want To Make: </p>
            New Building Number: <input type="text" name="updateBuildingNumberNew"> <br /><br />
            New Street: <input type="text" name="updateStreetNameNew"> <br /><br />
            New City: <input type="text" name="updateCityNew"> <br /><br />
            New Province: <input type="text" name="updateProvinceNew"> <br /><br />
            New Postal Code: <input type="text" name="updatePostalCodeNew"> <br /><br />
            New Venue ID: <input type="text" name="updateVenueIDNew"> <br /><br />

            <input type = "submit" value="Update Value" name ="submitUpdateLocation">

        </form>


        <H3> View Location Table </H3>
        <table>
            <tr>
                <th>Buliding Number</th>
                <th>Street</th>
                <th>City</th>
                <th>Province</th>
                <th>Postal Code</th>
                <th>Venue ID</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

        <H3>Delete Values From Location </H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteLocation" name="deleteLocation">
            Building Number: <input type="text" name="insBuildingNumLocationDelete"> <br /><br />
            Street: <input type="text" name="insStreetLocationDelete"> <br /><br />
            City: <input type="text" name="insCityLocationDelete"> <br /><br />
            Province: <input type="text" name="insProvLocationDelete"> <br /><br />
            Postal Code: <input type="text" name="insPCodeLocationDelete"> <br /><br />
            Venue ID: <input type="text" name="insVenueIdLocationDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteLocation">

        </form>
        <hr></hr>
            









        <p id="mchost">

        <H2>11. MC and Host</H2>

        <H3>Insert Values into MC and Host</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertMC" name="insertMC">
            Guest ID: <input type="text" name="insGuestIDMC"> <br /><br />
            Phone Number: <input type="text" name="insPhoneNumMC"> <br /><br />
            
            <input type = "submit" value="Insert Value" name ="submitInsertMC">
        </form>


        <H3> View MC and Host At Table </H3>
        <table>
            <tr>
                <th>Guest ID</th>
                <th>Phone Number</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>   

        <H3>Delete Values From MC and Host Table</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteMC" name="deleteMC">
            Guest ID: <input type="text" name="insGuestIDMCDelete"> <br /><br />
            Phone Number: <input type="text" name="insPhoneNumMCDelete"> <br /><br />
            
            <input type = "submit" value="Delete Value" name ="submitDeleteMC">
        </form>
       

        <hr> </hr>   










        <p id="music">

          <H2>12. Music</H2>

        <H3>Insert Values into Music</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertMusic" name="insertMusic">
            Service ID: <input type="text" name="insServIDMusic"> <br /><br />
            Genre: <input type="text" name="insGenreMusic"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertMusic">
        </form>


        <H3> View Music Table </H3>
        <table>
            <tr>
                <th> Service ID</th>
                <th>Genre</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  



        <H3>Delete Values From Music </H3>
        <p> Note: Values are Case Sensitive</p>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteMusic" name="deleteMusic">
            Service ID: <input type="text" name="insServiceIDMusicDelete"> <br /><br />
            Genre: <input type="text" name="insGenreMusicDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteMusic">
        </form>




        <hr></hr>











        <p id="outsource">
          <H2>13. Outsource</H2>

        <H3>Insert Values into Outsource</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertOutsource" name="insertOutsource">
            Service ID: <input type="text" name="insServIDOutsource"> <br /><br />
            Venue ID: <input type="text" name="insVenueIDOutsource"> <br /><br />
            Date/Time: <input type="text" name="insDateOutsource"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertOutsource">
        </form>



        <H3> View Outsource Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Venue ID</th>
                <th>Date/Time</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  


        <H3>Delete Values From Outsource</H3>
        <p> Note: Values are Case Sensitive</p>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteOutsource" name="deleteOutsource">
            Service ID: <input type="text" name="insServIDOutsourceDelete"> <br /><br />
            Venue ID: <input type="text" name="insVenueIDOutsourceDelete"> <br /><br />
            Date/Time: <input type="text" name="insDateOutsourceDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteOutsource">
        </form>

        <hr></hr>













            <p id="permits">
            <H2>14. Permits</H2>

        <H3>Insert Values into Permits</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertPermits" name="insertPermits">
            Permit ID: <input type="text" name="insPermitIdPermits"> <br /><br />
            Type: <input type="text" name="insTypePermits"> <br /><br />
            Cost: <input type="text" name="insCostPermits"> <br /><br />
            Issue Date: <input type="text" name="insIssueDatePermits"> <br /><br />
            Validity: <input type="text" name="insValidityPermits"> <br /><br />
            Venue ID: <input type="text" name="venueIDPermits"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertPermits">
        </form>

        <H3> View Permits Table </H3>
        <table>
            <tr>
                <th>Permit ID</th>
                <th>Type</th>
                <th>Cost</th>
                <th>Issue Date</th>
                <th>Validity</th>
                <th>Venue ID</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Permits</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deletePermits" name="deletePermits">
            Permit ID: <input type="text" name="insPermitIdPermitsDelete"> <br /><br />
            Type: <input type="text" name="insTypePermitsDelete"> <br /><br />
            Cost: <input type="text" name="insCostPermitsDelete"> <br /><br />
            Issue Date: <input type="text" name="insIssueDatePermitsDelete"> <br /><br />
            Validity: <input type="text" name="insValidityPermitsDelete"> <br /><br />
            Venue ID: <input type="text" name="insvenueIDPermitsDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeletePermits">
        </form>

        <hr></hr>










            <p id="pgm1">
            <H2>15. Person Getting Married (1)</H2>

        <H3>Insert Values into Person Getting Married (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertpgm1" name="insertpgm1">
            Guest ID: <input type="text" name="insGuestIdPGM1"> <br /><br />
            Phone Number: <input type="text" name="insPhoneNumPGM1"> <br /><br />
            Email: <input type="text" name="insEmailPGM1"> <br /><br />
            Address: <input type="text" name="insAddressPGM1"> <br /><br />
            Credit Card Number: <input type="text" name="insCardPGM1"> <br /><br />
            Budget: <input type="text" name="insBudgetPGM1"> <br /><br />
        

            <input type = "submit" value="Insert Value" name ="submitInsertPGM1">
        </form>




        <H3> View Person Getting Married (1) Table </H3>
        <table>
            <tr>
                <th> Guest ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Credit Card Number</th>
                <th>Budget</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Person Getting Married (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deletePGM1" name="deletePGM1">
            Guest ID: <input type="text" name="insGuestIdPGM1Delete"> <br /><br />
            Phone Number: <input type="text" name="insPhoneNumPGM1Delete"> <br /><br />
            Email: <input type="text" name="insEmailPGM1Delete"> <br /><br />
            Address: <input type="text" name="insAddressPGM1Delete"> <br /><br />
            Credit Card Number: <input type="text" name="insCardPGM1Delete"> <br /><br />
            Budget: <input type="text" name="insBudgetPGM1Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeletePGM1">
        </form>




        <hr></hr>




        <p id="pgm2">
             <H2>16. Person Getting Married (2)</H2>

        <H3>Insert Values into Person Getting Married (2)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertPGM2" name="insertPGM2">
            Guest ID: <input type="text" name="insGuestID"> <br /><br />
            Phone Number: <input type="text" name="insPhoneNumber"> <br /><br />
            Email: <input type="text" name="insEmail"> <br /><br />
            Address: <input type="text" name="insAddress"> <br /><br />
            
            <input type = "submit" value="Insert Value" name ="submitInsertPGM2">
        </form>


        <H3> View Person Getting Married (2) Table </H3>
        <table>
            <tr>
                <th> Guest ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Person Getting Married (2)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deletePGM2" name="deletePGM2">
            Guest ID: <input type="text" name="deleteGuestID"> <br /><br />
            Phone Number: <input type="text" name="deletePhoneNumber"> <br /><br />
            Email: <input type="text" name="deleteEmail"> <br /><br />
            Address: <input type="text" name="deleteAddress"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeletePGM2">
        </form>

        <hr></hr>












        <p id="photovideo">
        <H2>17. Photo and Video</H2>

        <H3> Insert Values into Photo Video</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertPV" name="insertPV">
            Service ID: <input type="text" name="insServiceIDPV"> <br /><br />
            Camera: <input type="text" name="insCameraPV"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertPV">
        </form>


          <H3> View Photo Video Table </H3>
        <table>
            <tr>
                <th> Service ID</th>
                <th>Camera</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Photo Video</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deletePV" name="deletePV">
            Service ID: <input type="text" name="insServiceIDPVDelete"> <br /><br />
            Camera: <input type="text" name="insCameraPVDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeletePV">
        </form>

        <hr></hr>









        <p id="v1" >
        <H2>18. Vendors (1)</H2>

        <H3>Insert Values into Vendors (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV1" name="insertV1">
            Service ID: <input type="text" name="insServIDV1"> <br /><br />
            Cost: <input type="text" name="insCostV1"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitV1">
        </form>



        <H3> View Vendors (1) Table </H3>
        <table>
            <tr>
                <th> Service ID</th>
                <th>Cost</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Vendors (1)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV1" name="deleteV1">
            Service ID: <input type="text" name="insServIDV1Delete"> <br /><br />
            Cost: <input type="text" name="insCostV1Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV1">
        </form>


        <hr></hr>








        <p id="v2">
        <H2>19. Vendors (2)</H2>

        <H3>Insert Values into Vendors (2)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV2" name="insertV2">
            Service ID: <input type="text" name="insServIDV2"> <br /><br />
            Name: <input type="text" name="insNameV2"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertV2">
        </form>



        <H3> View Vendors (2) Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Name</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Vendors (2)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV2" name="deleteV2">
            Service ID: <input type="text" name="insServIDV2Delete"> <br /><br />
            Name: <input type="text" name="insNameV2Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV2">
        </form>


        <hr></hr>









        <p id="v3">
        <H2>20. Vendors (3)</H2>

        <H3>Insert Values into Vendors (3)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV3" name="insertV3">
            Service ID: <input type="text" name="insServIDV3"> <br /><br />
            Building Number: <input type="text" name="insBuildNumV3"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertV3">
        </form>



        <H3> View Vendors (3) Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Buliding Number</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Vendors (3)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV3" name="deleteV3">
            Service ID: <input type="text" name="insServIDV3Delete"> <br /><br />
            Building Number: <input type="text" name="insBuildingNumbV3"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV3">
        </form>



        <hr></hr>






        <p id="v4">
        <H2>21. Vendors (4)</H2>

        <H3>Insert Values into Vendors (4)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV4" name="insertV4">
            Service_ID: <input type="text" name="insServIDV4"> <br /><br />
            Street: <input type="text" name="insStreetV4"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertV4">
        </form>



        <H3> View Vendors (4) Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Street</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Vendors (4)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV4" name="deleteV4">
            Service ID: <input type="text" name="insServIDV4Delete"> <br /><br />
            Street: <input type="text" name="insStreetV4Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV4">
        </form>




        <hr></hr>











        <p id="v5">
        <H2>22. Vendors (5)</H2>

        <H3>Insert Values into Vendors (5)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV5" name="insertV5">
            City: <input type="text" name="insCityV5"> <br /><br />
            Postal Code: <input type="text" name="insPCodeV5"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertV5">
        </form>



        <H3> View Vendors (5) Table </H3>
        <table>
            <tr>
                <th>City</th>
                <th>Postal Code</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Vendors (5)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV5" name="deleteV5">
            City: <input type="text" name="insPCodeV5Delete"> <br /><br />
            Postal Code: <input type="text" name="insPCodeV5Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV5">
        </form>



        <hr></hr>








        <p id="v6">
        <H2>23. Vendors (6)</H2>

        <H3>Insert Values into Vendors (6)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV6" name="insertV6">
            Service ID: <input type="text" name="insServiceIDV6"> <br /><br />
            Cost: <input type="text" name="insServiceIDV6"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertV6">
        </form>



        <H3> View Vendors (6) Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Cost</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Vendors (6)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV6" name="deleteV6">
            Service ID: <input type="text" name="insServiceIDV6Delete"> <br /><br />
            Cost: <input type="text" name="insServiceIDV6Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV6">
        </form>





        <hr></hr>

        <p id="v7">
        <H2>24. Vendors (7)</H2>

        <H3>Insert Values into Vendors (7)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertV7" name="insertV7">
            Street: <input type="text" name="insStreetV7"> <br /><br />
            Postal Code: <input type="text" name="insPCodeV7"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertV7">
        </form>



        <H3> View Vendors (7) Table </H3>
        <table>
            <tr>
                <th>Street</th>
                <th>Postal Code</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
        </table>  



        <H3>Delete Values From Vendors (7)</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteV7" name="deleteV7">
            Street: <input type="text" name="insStreetV7Delete"> <br /><br />
            Postal Code: <input type="text" name="insPCodeV7Delete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteV7">
        </form>


        <hr></hr>




        <p id="venue">

           <H2>25. Venue</H2>

        <H3>Insert Values into Venue</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="insertVenue" name="insertVenue">
            Service ID: <input type="text" name="insServiceIDVenue"> <br /><br />
            Capacity: <input type="text" name="insCapacityVenue"> <br /><br />
            Name: <input type="text" name="insNameVenue"> <br /><br />

            <input type = "submit" value="Insert Value" name ="submitInsertVenue">
        </form>


        <H3>Count The Number of Venue that have:</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="countVenue" name="countVenue">
            Capacity= <input type="text" name="chooseVenueCapacity"> <br /><br />
    
            <input type = "submit" value="Count" name ="submitCountVenue">
        </form>



        <H3> View Venue Table </H3>
        <table>
            <tr>
                <th>Service ID</th>
                <th>Capacity</th>
                <th>Name</th>
            </tr>

            <tr>
                <td>NULL</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>  

       

        <H3>Delete Values From Venue</H3>
        <form method="POST" action="databasehomepage.php">
            <input type="hidden" id="deleteVendors" name="deleteVenue">
            Service ID: <input type="text" name="insServiceIDVenueDelete"> <br /><br />
            Capacity: <input type="text" name="insCapacityVenueDelete"> <br /><br />
            Name: <input type="text" name="insNameVenueDelete"> <br /><br />

            <input type = "submit" value="Delete Value" name ="submitDeleteVenue">
        </form>


        <hr></hr>



    <a name="Return To Menu"></a>
    <a href="#top">Return To Menu</a>

    <?php

            // HANDLE CONNECTION AND PARSE QUERIES
            $success = True; //keep track of errors so it redirects the page only if there are no errors
            $db_conn = NULL; // edit the login credentials in connectToDB()
            $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

            function debugAlertMessage($message) {
                global $show_debug_alert_messages;

                if ($show_debug_alert_messages) {
                    echo "<script type='text/javascript'>alert('" . $message . "');</script>";
                }
            }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_lanchiph", "a29224904", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        // HANDLE QUERIES
        function printInsertRequestResult() { //prints results from a select statement
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM getting_married_2");
            echo "<br>Retrieved data from table getting_married_2:<br>";
            echo "<table>";
            echo "<tr>
            <th>GuestID</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function handleInsertRequest() {
            global $db_conn;

            // insert into getting_married_2 table, foreign key 'guest_id' from attendees table
            $tuple = array (
                ":guest_id" => $_POST['insGuestID'],
                ":phone_num" => $_POST['insPhoneNumber'],
                ":email" => $_POST['insEmail'],
                ":address" => $_POST['insAddress']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into getting_married_2 values (:guest_id, :phone_num, :email, :address)", $alltuples);
            printInsertRequestResult();
            OCICommit($db_conn);
        }

        function printDeleteRequestResultGM2() {
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM getting_married_2");
            echo "<br>Retrieved data from table getting_married_2:<br>";
            echo "<table>";
            echo "<tr>
            <th>GuestID</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function printDeleteRequestResultA() {
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM attendees");
            echo "<br>Retrieved data from table attendees:<br>";
            echo "<table>";
            echo "<tr>
            <th>GuestID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Table Number</th>
            <th>Diet</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function handleDeleteRequest() {
            global $db_conn;

            // delete from attendees table, affects guest_married_2 foreign key 'guest_id' 
            $tuple = array (
                ":guest_id" => $_POST['deleteGuestID']
            );

            $alltuples = array (
                $tuple
            );

            echo "<br>BEFORE DELETE REQUEST: </br>";
            printDeleteRequestResultA();
            printDeleteRequestResultGM2();

            executeBoundSQL("
                                DELETE
                                FROM attendees A
                                WHERE A.guest_id = :guest_id
                            ", $alltuples);

            echo "<br>AFTER DELETE REQUEST: </br>";
            printDeleteRequestResultA();
            printDeleteRequestResultGM2();

            OCICommit($db_conn);
        }

        function printUpdateRequestResult() {
            echo "<br>running<br>";
            $result = executePlainSQL("SELECT * FROM location_at");
            echo "<br>Retrieved data from table location_at:<br>";
            echo "<table>";
            echo "<tr>
            <th>Building Number</th>
            <th>Street Name</th>
            <th>City</th>
            <th>Province</th>
            <th>Postal Code</th>
            <th>VenueID</th>
            </tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
						"<td>" . $row[2] . "</td>" . 
						"<td>" . $row[3] . "</td>" . 
                        "<td>" . $row[4] . "</td>" . 
						"<td>" . $row[5] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
        }

        function handleUpdateRequest() {
            global $db_conn;

            $tuple = array (
                ":old_building_num" => $_POST['updateBuildingNumberOld'],
                ":old_street_name" => $_POST['updateStreetNameOld'],
                ":old_city" => $_POST['updateCityOld'],
                ":old_province" => $_POST['updateProvinceOld'],
                ":old_postal_code" => $_POST['updatePostalCodeOld'],
                ":old_venue_id" => $_POST['updateVenueIDOld'],

                // check if null? use old value
                ":new_building_num" => $_POST['updateBuildingNumberNew'],
                ":new_street_name" => $_POST['updateStreetNameNew'],
                ":new_city" => $_POST['updateCityNew'],
                ":new_province" => $_POST['updateProvinceNew'],
                ":new_postal_code" => $_POST['updatePostalCodeNew'],
                ":new_venue_id" => $_POST['updateVenueIDNew']
            );

            $alltuples = array (
                $tuple
            );

            echo "<br>BEFORE UPDATE REQUEST: </br>";
            printUpdateRequestResult();

            executeBoundSQL("
                                UPDATE location_at L
                                SET L.building_num = :new_building_num
                                WHERE L.building_num = :old_building_num
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.street_name = :new_street_name
                                WHERE L.street_name = :old_street_name
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.city = :new_city
                                WHERE L.city = :old_city
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.province = :new_province
                                WHERE L.province = :old_province
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.postal_code = :new_postal_code
                                WHERE L.postal_code = :old_postal_code
                            ", $alltuples);
            executeBoundSQL("
                                UPDATE location_at L
                                SET L.venue_id = :new_venue_id
                                WHERE L.venue_id = :old_venue_id
                            ", $alltuples);

            echo "<br>AFTER UPDATE REQUEST: </br>";
            printUpdateRequestResult();

            OCICommit($db_conn);
        }

        function handleAggHavingRequest() {
            global $db_conn;

            // count number of venues with capacity > selected capacity

            $tuple = array (
                ":venue_capacity" => $_POST['chooseVenueCapacity']
            );

            $alltuples = array (
                $tuple
            );

            $result = executePlainSQL("
                                        SELECT COUNT(*)
                                        FROM venue V
                                        HAVING V.capacity > :venue_capacity
            ");

            echo "<br>Retrieved aggregate having data:<br>";
            echo "<table>";
            echo "
				<tr>
					<th>Number of Venues</th>
				</tr>
			";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
					"<tr>";
            }

            echo "</table>";
            
            OCICommit($db_conn);
        }

        function HandleDivisionRequest() {
            global $db_conn;

            // select all guests that have attended all events that have the selected type
            $tuple = array (
                ":event_type" => $_POST['chooseEventType']
            );

            $alltuples = array (
                $tuple
            );

            $result = executePlainSQL("
                                        SELECT A.guest_id, A.first_name, A.last_name
                                        FROM attendees A
                                        WHERE NOT EXISTS (
                                            SELECT EO.event_id
                                            FROM event_offer EO
                                            WHERE EO.type = :event_type
                                                AND NOT EXISTS (
                                                SELECT H.event_id
                                                FROM has H
                                                WHERE h.event_id = EO.event_id
                                                    AND h.guest_id= A.guest_id)
                                            )
                                    )
            ", $alltuples);

            echo "<br>Retrieved division data:<br>";

            echo "<table>";
            echo "
				<tr>
					<th>Guest ID</th>
					<th>First Name</th>
                    <th>Last Name</th>
				</tr>
			";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>" . 
						"<td>" . $row[0] . "</td>" . 
						"<td>" . $row[1] . "</td>" . 
                        "<td>" . $row[2] . "</td>" .
					"<tr>";
            }

            echo "</table>";

            OCICommit($db_conn);
        }

        // HANDLE ALL POST ROUTES

        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }

                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        }
		?>
    </body>
<html>

-- for testing purpose only
-- https://www.students.cs.ubc.ca/~txiao4/databasehomepage.php
select V.name, COUNT(*) as venue_count from venue V group by V.name having MAX(V.capacity) > 75;

SELECT A.guest_id, A.first_name, A.last_name
FROM attendees A
WHERE NOT EXISTS (
        SELECT EO.event_id
        FROM event_offer EO
        WHERE EO.type = 'Wedding'
        except
        SELECT H.event_id
        FROM has H
        WHERE H.guest_id= A.guest_id
    );
-- Insert
INSERT
INTO getting_married_2 
VALUES (
    :guest_id, 
    :phone_num, 
    :email, 
    :address
);

-- Update
UPDATE location_at L
SET L.building_num = :new_building_num
WHERE L.building_num = :old_building_num;
                                
UPDATE location_at L
SET L.street_name = :new_street_name
WHERE L.street_name = :old_street_name;
                            
UPDATE location_at L
SET L.city = :new_city
WHERE L.city = :old_city;

UPDATE location_at L
SET L.province = :new_province
WHERE L.province = :old_province;

UPDATE location_at L
SET L.postal_code = :new_postal_code
WHERE L.postal_code = :old_postal_code;

UPDATE location_at L
SET L.venue_id = :new_venue_id
WHERE L.venue_id = :old_venue_id;

-- Delete
DELETE
FROM attendees A
WHERE A.guest_id = :guest_id;

-- Selection
SELECT * 
FROM catering 
WHERE num_orders=$num $option cuisine='$cuisine';

-- Projection
SELECT table_name FROM user_tables;
SELECT $attributes FROM getting_married_1;
SELECT $attributes FROM venue;

-- Join
SELECT v.name, v.capacity, e.type, e.cost, e.date_time 
FROM event_offer e 
INNER JOIN venue v 
ON e.venue_id = v.venue_id 
WHERE cost $sign $cost;

-- Aggregate with Group By
SELECT table_num, count(*) 
FROM attendees 
GROUP BY table_num;

-- Aggregate with Having
SELECT V.name, COUNT(*) as venue_count
FROM venue V
GROUP BY V.name
HAVING MAX(V.capacity) > $capacity;

-- Nested Aggregate with Group By
SELECT venue_id, type, cost 
FROM event_offer
WHERE cost <= ALL (
    SELECT avg(cost) 
    FROM event_offer 
    GROUP BY extract(year FROM date_time)
    );

-- Division
SELECT A.guest_id, A.first_name, A.last_name
FROM attendees A
WHERE NOT EXISTS (
    SELECT EO.event_id
    FROM event_offer EO
    WHERE EO.type ='$eventType'
        MINUS
    SELECT H.event_id
    FROM has H
    WHERE H.guest_id= A.guest_id
);
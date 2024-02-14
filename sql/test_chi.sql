-- for testing purpose only
-- https://www.students.cs.ubc.ca/~lanchiph/attendees_copy.php
select * from catering where num_orders=200 and cuisine = 'Thai'; 
select * from table_name.catering;
-- SELECT table_name from USER_TABLES
select v.name, v.capacity, e.type, e.cost, e.date_time from event_offer e inner join venue v on e.venue_id = v.venue_id where cost <= 50000;
select table_num, count(*) from attendees group by table_num;
select avg(cost) from event_offer group by extract(year from date_time);
select venue_id, type, cost from event_offer
    where cost <=
     ALL (select avg(cost) from event_offer group by extract(year from date_time))
    ;
SELECT table_name from user_tables;

-- where num_orders = 10 or cuisine = Thai;

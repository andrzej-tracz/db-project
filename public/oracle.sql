create table sales ( id number(10,0) not null, showing_id number(10,0) not null, day_id number(10,0) not null, cinema_id number(10,0) not null, payment_type_id number(10,0) not null, netto_price number(8, 2) not null, brutto_price number(8, 2) not null, ticket_count number(10,0) not null, constraint sales_showing_id_fk foreign key ( showing_id ) references showings ( id ), constraint sales_day_id_fk foreign key ( day_id ) references days ( id ), constraint sales_cinema_id_fk foreign key ( cinema_id ) references cinemas ( id ), constraint sales_payment_type_id_fk foreign key ( payment_type_id ) references payment_types ( id ), constraint sales_id_pk primary key ( id ) )
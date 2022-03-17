use eme112;

SELECT * FROM agencies;
SELECT * FROM cartes_trucades;
SELECT * FROM cartes_trucades_has_agencies;
SELECT * FROM comarques;
SELECT * FROM dades_personals;
SELECT * FROM estats_agencies;
SELECT * FROM estats_expedients;
SELECT * FROM incidents;
SELECT * FROM municipis;
SELECT * FROM perfils;
SELECT * FROM provincies;
SELECT * FROM tipus_incidents;
SELECT * FROM tipus_localitzacions;
SELECT * FROM usuaris;
SELECT * FROM expedients;

ALTER TABLE cartes_trucades ADD COLUMN nom_trucant CHAR (30);
ALTER TABLE cartes_trucades ADD COLUMN cognoms_trucant CHAR (60);

ALTER TABLE cartes_trucades DROP COLUMN cognoms_trucant;
ALTER TABLE cartes_trucades DROP COLUMN nom_trucant;

delete from usuaris where id = 0;
delete from cartes_trucades where id = 4;
delete from estats_agencies;
delete from estats_expedients;

insert into usuaris value (null, 'CabraAbracadabra', 1234, 'Oscar', 'Castella San Segundo', 3);
insert into usuaris value (null, 'borja_garcia98', 1234, 'Borja', 'Garcia Bartolome', 3);
insert into usuaris value (null, 'OscarGonzalez', 1234, 'Oscar', 'Gonzalez', 3);

insert into expedients value (null, '2020-08-07 08:32:24', '2020-08-07 08:32:24', 1);

insert into cartes_trucades value (null, 8573621, '2020-08-07 08:32:24', 65, 1, 638227119, 'Cabina telefonica', 'Barcelona', 'Hola', 1, 'calle bartolome', false, 1, 1, 1, 'bosque', 'bajo la roca', null, 1, 'pierna rota', 1, 1);
insert into cartes_trucades value (null, 75483993, '2019-08-07 08:33:24', 65, 1, 638223319, 'Hospital', 'Local', 'Adeu', 1, 'calle simposon', true, 1, 1, 1, 'cabaña', 'indio', null, 1, 'muchos gritos', 1, 1);

insert into dades_personals value(null, 646228559, 'calle josep borrell', 'Amigo del incidentado');

insert into estats_expedients value (1, 'En procés');
insert into estats_expedients value (2, 'Sol·licitat');
insert into estats_expedients value (3, 'Acceptat');
insert into estats_expedients value (4, 'Tancat');
insert into estats_expedients value (5, 'Immobilitzat');

insert into estats_agencies value (null, 'Sol·licitat');
insert into estats_agencies value (null, 'En camí');
insert into estats_agencies value (null, 'Finalitzat');

DROP TABLE IF EXISTS t01a_water_system;
CREATE TABLE t01a_water_system
(
  system_id int
(11) NOT NULL
  AUTO_INCREMENT,
  system_name varchar
  (255) NOT NULL,
  area_council varchar
  (255) NOT NULL,
  island varchar
  (255) NOT NULL,
  province varchar
  (255) NOT NULL,
  latitude DECIMAL
  (11, 8) NOT NULL,
  longitude DECIMAL
  (11, 8) NOT NULL,
  water_resource varchar
  (255) NOT NULL,
  water_system varchar
  (255) NOT NULL,
  improved varchar
  (255) NOT NULL,
  elevation varchar
  (255) NOT NULL,
  functionality varchar
  (255) NOT NULL,
  number_users varchar
  (255) NOT NULL,
  PRIMARY KEY
  (system_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


  DROP TABLE IF EXISTS admins;

  DROP TABLE IF EXISTS bicycles;
  CREATE TABLE bicycles
  (
    id int
(11) NOT NULL
    AUTO_INCREMENT,
  brand varchar
    (255) NOT NULL,
  model varchar
    (255) NOT NULL,
  year int
    (4) NOT NULL,
  category varchar
    (255) NOT NULL,
  gender varchar
    (255) NOT NULL,
  color varchar
    (255) NOT NULL,
  price decimal
    (9,2) NOT NULL,
  weight_kg decimal
    (9,5) NOT NULL,
  condition_id tinyint
    (3) NOT NULL,
  description text NOT NULL,
  PRIMARY KEY
    (id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

    INSERT INTO 
bicycles
    VALUES
      (1, 'Trek', 'Emonda', 2017, 'Hybrid', 'Unisex', 'black', 1495.00, 1.50000, 5, ''),
      (2, 'Cannondale', 'Synapse', 2016, 'Road', 'Unisex', 'matte black', 1999.00, 1.00000, 5, '');


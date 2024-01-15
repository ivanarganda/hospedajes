-- Drop the database if it exists
DROP DATABASE IF EXISTS hospedaje;

-- Create the database with character set utf8
CREATE DATABASE hospedaje CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Use the newly created database
USE hospedaje;

-- Drop the table if it exists
DROP TABLE IF EXISTS hospedajes;

-- Create the hospedajes table with character set utf8
CREATE TABLE hospedajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    tipo ENUM('hotel', 'apartamento') NOT NULL,
    estrellas INT,
    habitacion VARCHAR(50),
    apartamentos_disponibles INT,
    capacidad_adultos INT,
    ciudad VARCHAR(50) NOT NULL,
    provincia VARCHAR(50) NOT NULL
) CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Insert sample data into the hospedajes table
INSERT INTO hospedajes (nombre, tipo, estrellas, habitacion, apartamentos_disponibles, capacidad_adultos, ciudad, provincia)
VALUES
    ('Hotel Azul', 'hotel', 3, 'habitación doble con vistas', NULL, NULL, 'Valencia', 'Valencia'),
    ('Apartamentos Beach', 'apartamento', NULL, NULL, 10, 4, 'Almeria', 'Almeria'),
    ('Hotel Blanco', 'hotel', 4, 'habitación doble', NULL, NULL, 'Mojacar', 'Almeria'),
    ('Hotel Rojo', 'hotel', 3, 'habitación sencilla', NULL, NULL, 'Sanlucar', 'Cádiz'),
    ('Apartamentos Sol y playa', 'apartamento', NULL, NULL, 50, 6, 'Málaga', 'Málaga');

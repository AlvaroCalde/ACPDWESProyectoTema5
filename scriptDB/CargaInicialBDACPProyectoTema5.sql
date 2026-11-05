

USE DBACPDWESProyectoTema5;

INSERT INTO T02_Departamento 
(T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) 
VALUES
('VTA', 'Departamento de Ventas y Comercialización', '2015-01-15 09:00:00', 1250500.75, NULL),
('RCH', 'Recursos Humanos y Talento', '2015-01-15 09:00:00', 45000.00, NULL),
('ING', 'Ingeniería y Desarrollo de Software', '2018-06-01 10:30:00', 850200.50, NULL),
('FIN', 'Finanzas, Contabilidad y Tesorería', '2015-01-15 09:00:00', 320000.00, NULL),
('MKT', 'Marketing Digital', '2019-02-20 08:15:00', 150000.25, '2025-12-31 18:00:00');

INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_NumConexiones, T01_FechaHoraUltimaConexion, T01_Perfil, T01_ImagenUsuario) VALUES
('admin01', 'pass1234', 'Administrador Principal', 120, '2026-11-05 08:30:00', 'Administrador', 'admin_avatar.png'),
('usr001', 'pass5678', 'Juan Pérez', 15, '2026-11-04 15:45:00', 'Usuario', 'juanp.jpg'),
('usr002', 'pass9012', 'María Gómez', 32, '2026-11-05 09:15:00', 'Usuario', 'mariag.jpg'),
('usr003', 'pass3456', 'Carlos López', 5, '2026-11-01 11:20:00', 'Lector', NULL),
('usr004', 'pass7890', 'Ana Martínez', 45, '2026-11-05 10:00:00', 'Usuario', 'anam.png');
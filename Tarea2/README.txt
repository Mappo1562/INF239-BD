guia uso xammp
- link instalacion en disc
- cambiar donde esta guardada esta carpeta (INF239-BD) a C:\xampp\htdocs 
- en xammp panel de control start apache, esto abre el servidor de la pagina
- en el navegador se busca http://localhost/INF239-BD/Tarea2/ y tariamos con la wea abierta
- links de interes:
    http://localhost/INF239-BD/Tarea2/  -- pagina
    http://localhost/phpmyadmin/        -- admin base de datos

fechas = año/mes/dia
no cacho como funciona la wea de las bases de datos, pero creo q servira copiar lo que esta en
la carpeta BD y pegarlo en ** C:\xampp\mysql\data\tarea_2 ** si no existe la carpeta 2 hay que
crearla


-- ingresar habitaciones:
INSERT INTO habitacion (tipo, precio) VALUES('single','10000');
INSERT INTO habitacion (tipo, precio) VALUES('double','20000');
INSERT INTO habitacion (tipo, precio) VALUES('king','80000');



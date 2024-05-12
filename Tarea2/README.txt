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


-- ingresar tours:
INSERT INTO tour (precio_tour,fecha,lugar,medio_transporte) VALUES('500','2024/06/01','Demacia','Carreta');
INSERT INTO tour (precio_tour,fecha,lugar,medio_transporte) VALUES('2000','2024/05/24','Dust_II','Autobus de acercamiento');
INSERT INTO tour (precio_tour,fecha,lugar,medio_transporte) VALUES('4200','2024/05/11','Namek','Barco');


- tenemos que incluir 
    procedimiento almacenado
    function
    view
    trigger

objetivos:
1-. --- crear barra de busqueda de habitaciones y identificar si actualmente esta disponible o no --- listo
2-. --- modificar y eliminar reserva, crear calificacion ---                                          listo

3-. reservar un tour o cancelarlo (relacion reserva - tour)
4-. mostrar todos los tours disponibles con fecha, lugar, medio de transporte e imagen

5-. calcular total a pagar(con la fecha de chek_out real)
6-. visualizar calificaciones promedio por habitacion
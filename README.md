DATOS: 

Autor: Ivan Gonzalez Valles
Fecha realización: 14/01/2024
Implentación: PHP usando el patrón MVC

BASE DE DATOS:

Nombre: hospedaje
Crear base de datos con el script: hospedaje.sql

PASOS a mostrar CONTENIDO: 

- Si ejecutas el index_terminal te pedira introducir por teclado y mostrara los resultados por via terminal.
- Si abres el index_graphical por localhost/index_graphical.php mostrara los datos por navegador con un diseño bonito y sencillo. Lo que hayas filtrado por la terminal se almacena de forma temporal para mostrar las coincidencias en el entorno gráfico. Por ejemplo: prueba en escribir por comando tras ejecutar index_terminal "hot". Te mostrara los hospedajes cuyo nombre contenga "hot" tanto en la terminal como en entorno gráfico.

ESTRUCTURA DEL LA APLICACIÓN

        HospedajeRepository.php ( Recibe la conexíon a la base de datos y manda los dattos al modelo )                                                        
                    |
                    |
                    v            
            --------------                                       
            --- MODELO --- -----> classes/HospedajeModel.php ( El modelo recibe los datos del repositorio y se los manda al controllador )
            --------------
                    |
                    v
            --------------
            -CONTROLADOR-- -----> classes/HospedajeController.php ( El controlador procesa los datos recibidos del controlador , los itera mediante un bucle en la funcion 'buscarHospedajesPorNombre'
                                                                        Llamada desde la propia vista ). Abajo explico con mas detalle la funcion
            --------------
                    |
                    v
            --------------
            ----VISTA----- -----> Muestra el contenido en una lista ( en el fichero index_terminal.php que es por via de comando o por entorno grafico index_graphical.php )
            --------------                          *** Para que se muestren resultados desde entorno grafico hay que ejecutar index_terminal.php      

ESTRUCTURA DE CARPETAS Y FICHEROS:

- La carpeta assets alberga el css necesario para el entorno grafico
- La carpeta classes contiene las clases de conexion, los modelos y controladores. Para cargarlos todos sería tan solo incluir el autoload.php que se encarga de llamar a todas las clases sin ir uno a uno incluyendolos en la vista
- La carpeta /config contiene el script .sql para desplegar la base de datos y sus tablas
- El fichero inputEntry.txt: es un fichero temporal que almacena el ultimo filtro realizado desde la terminal para poder interactuar tambien desde el entorno grafico. En caso de   que esté vacio se mostrara todos los hospedajes en el entorno grafico inclusive en la terminal


EL DIAGRAMA DE FLUJO: 

- Lo encontrarás en la raiz del proyecto que es una imagen en extensión .png que explica brevemente el funcionamiento de la aplicación
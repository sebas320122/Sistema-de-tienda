# VaroTienda v1.0

Sistema web desarrollado para el negocio de tienda de conveniencia  "VaroTienda" para realizar las operaciones de punto de venta, inventario, reabastecimiento con proveedores, resumen financiero, y usuarios.

## Tabla de contenidos

- [Requerimientos](#requerimientos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Uso](#uso)
- [Contribución](#contribución)
- [Roadmap](#roadmap)

## Requerimientos
- Instalar XAMPP https://www.apachefriends.org/download.html
- Instalar NodeJS https://nodejs.org/en/download/current
- Instalar Composer https://getcomposer.org/download/
- Instalar Vscode https://code.visualstudio.com/download

## Instalación

- Descargar el proyecto en ZIP
- Extraer en escritorio
- Mover proyecto a la carpeta C:\xampp\htdocs
- Abrir Vscode y abrir el proyecto "varotienda_sys"
- Ejecutar XAMPP
- Abrir terminal y ejecutar el siguiente comando:
> php artisan migrate

- Despues aparecera un mensaje informandonos si queremos crear las tablas, a lo que deberemos introducir lo siguiente en consola:
> y

- Una vez creada las BD introducir el siguiente comando (llena las tablas con datos, siendo el del usuario administrador el que esta habilitado por defecto):
> php artisan migrate:fresh --seed

- Para ejecutar el sistema se introduce en consola lo siguiente:
> php artisan serve

- Ingrese a http://127.0.0.1:8000/ingresar
- Introduzca el correo y contraseña proporcionados en database\seeders\UsuarioSeeder.php 

## Configuración opcional

- Generar productos predeterminados
  - Apagar el sistema si esta encendido 
  - Vaya a database\seeders\ProductosSeeder.php
  - Descomentar el codigo
  - Ingrese productos con el formato presentado
  - Introducir en consola: php artisan migrate:fresh --seed
  - Ejecutar de nuevo el sistema
 
## Uso

### Para empleados

#### Punto de venta
- Seleccionar "Punto de venta"
- En el campo "Buscar producto" introducir el nombre o id del producto que agregara al ticket de compra
- Seleccionar producto precionando el boton verde
- Indicar la cantidad del producto en el recuadro "Cantidad"
- Si quiere elimnar un producto del ticket, presione el boton rojo
- Para finalizar la compra seleccionar el boton amarillo


### Para gerentes

#### Administrar registros
- Seleccionar opción segun la tabla que quiera manejar (Inventario, Reabastecimientos, Resumen, Usuarios)
- En la vista inicial podra ver todos los registros
- Para agregar un registro:
  - Selccionar boton "Agregar"
  - Llenar todos los campos de datos
  - Pulsar el boton "Agregar"
- Para editar un registro:
  - Selccionar el boton "Ver" del registro que desee editar
  - Seleccionar el boton "Editar"
  - Cambiar los datos que desee
  - Cuando haya finalizado, presione el boton "Editar"
- Para eliminar un registro:
  - Seleccionar el boton "Ver" del registro que desee eliminar
  - Seleccionar el boton "Eliminar"
  
## Contribucion

Para contribuir al proyecto siga los siguientes pasos:

- Ejecutar git en carpeta de preferencia
- Introduccir el siguiente comando
> git clone https://github.com/sebas320122/CJ_evidencia.git

- Antes de hacer cambios generar un nuevo branch con
> git checkout -b nombreDelBranch

- Una vez realizado todos los cambios generar el pull request
> git push origin nombreDelBranch

- Una vez realizado el paso anterior, esperar a la aprobación.

## Roadmap

| Requerimietno  | Plazo estipulado | Fecha de entrega | 
| ------------- | ------------- | ------------- | 
| 1. Realizar el diseño de las vistas | Feb s3-s4  | 27/02/2024 |
| 2. Realizar el layout | Feb s4-Mar s2 | 14/03/2024 |
| 3. Realizar función “Punto de venta” | Mar s2-s3  | 21/03/2024 |
| 4. Realizar función “Inventario” | Mar s3-Abr s1 | 30/03/2024 |
| 5. Realizar función “Reabastecimientos” | Abr s1-s2 | 15/04/2024 |
| 6. Realizar función “Resumen” | Abr s2-s3 | 22/04/2024 |
| 7. Realizar función “Usuarios” | Abr s3-s4 | 23/04/2024 |
| 8. Realizar funcion de logeo | Abr s4-May s1 | 25/04/2024 |
| 9. Entregar aplicacion web | May s1-s2 | 28/04/2024 |
| 10. Mantenimiento post-lanzamiento | May - Dic | En curso |


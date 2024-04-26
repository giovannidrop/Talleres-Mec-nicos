# TALLERES-MEC-NICOS

El Sistema de Gestión de Talleres Mecánicos (SGTM) es una programa diseñado para facilitar la gestión de talleres mecánicos que ofrecen servicios de mantenimiento y reparación de vehículos. El sistema está centrado en la organización eficiente de la información relacionada con los vehículos, propietarios y servicios realizados.

## Requisitos

- Git: Esencialmente, necesitas tener Git instalado en tu sistema. Git es un sistema de control de versiones distribuido que se utiliza para administrar el código fuente de un proyecto. Puedes descargar e instalar Git desde git-scm.com.
- Conexión a Internet: Para acceder al repositorio en GitHub y descargar el código fuente del proyecto, necesitas una conexión a Internet estable.
- Espacio en Disco: Asegúrate de tener suficiente espacio en disco para almacenar el código del proyecto y cualquier archivo relacionado que necesite ser descargado.
- Terminal o Interfaz Gráfica de Usuario (GUI) de Git: Puedes usar la línea de comandos (Terminal) o una interfaz gráfica de usuario (GUI) para trabajar con Git. Si prefieres la línea de comandos, necesitarás una - terminal que te permita ejecutar comandos Git. Si prefieres una GUI, puedes utilizar aplicaciones como GitHub Desktop, Sourcetree, GitKraken, entre otras.

## Instalación

1. Clona este repositorio: `git clone https://github.com/tu_usuario/tu_proyecto.git`
2. Navega hasta el directorio del proyecto: `cd tu_proyecto`
3. Instala las dependencias: `npm install` (o el gestor de paquetes correspondiente)
4. Configura cualquier archivo de configuración necesario.

## Uso

Aquí encontrarás cómo usar el proyecto:

1. Ejecuta el proyecto: "php artisan serve" 
2. Accede a la URL proporcionada en la consola.
3. Realiza cualquier acción necesaria según la funcionalidad del proyecto.


## Estructura del Programa

La Estructura del archivo esta centrada en los Modelos, Vistas, Controladores y las Rutas, añadiendo Estructura de las Tablas:

Vehículos (Entidad Fuerte):
Esta tabla almacena información detallada sobre los vehículos atendidos en el taller.
Incluye campos como la marca, modelo, año, matrícula y tipo de vehículo (por ejemplo, coche, moto, camión).
Cada vehículo está asociado a un propietario a través de una clave externa (propietario_id).

Propietarios (Entidad Fuerte):
La tabla de propietarios contiene datos personales de los clientes del taller.
Incluye campos como nombre, apellido, teléfono, correo electrónico y dirección.
Cada propietario puede tener uno o varios vehículos registrados en el sistema.

Servicios (Entidad Débil):
Esta tabla actúa como una entidad débil que relaciona los vehículos con los servicios realizados.
Registra la información sobre los servicios prestados, incluyendo la fecha del servicio, una descripción detallada y el costo.
Cada servicio está vinculado a un vehículo a través de una clave externa (vehículo_id).


## Contacto

[correo electrónico](juanmanuelflorezescobar@gmail.com).
[correo electrónico](giovannisaavedra160@gmail.com).

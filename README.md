# TALLERES-MEC-NICOS

El Sistema de Gestión de Talleres Mecánicos (SGTM) es una programa diseñado para facilitar la gestión de talleres mecánicos que ofrecen servicios de mantenimiento y reparación de vehículos. El sistema está centrado en la organización eficiente de la información relacionada con los vehículos, propietarios y servicios realizados.

## Requisitos

- Requisitos necesarios para ejecutar el proyecto.
- Dependencias y versiones específicas.
- Instrucciones para instalar las dependencias.

## Instalación

Puedes seguir estos pasos para instalar el proyecto:

1. Clona este repositorio: `git clone https://github.com/tu_usuario/tu_proyecto.git`
2. Navega hasta el directorio del proyecto: `cd tu_proyecto`
3. Instala las dependencias: `npm install` (o el gestor de paquetes correspondiente)
4. Configura cualquier archivo de configuración necesario.

## Uso

Aquí encontrarás cómo usar el proyecto:

1. Ejecuta el proyecto: `npm start` (o el comando correspondiente)
2. Accede a la URL proporcionada en la consola.
3. Realiza cualquier acción necesaria según la funcionalidad del proyecto.

## Contribución

¡Agradecemos las contribuciones! Para contribuir a este proyecto, sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama: `git checkout -b nueva-caracteristica`
3. Realiza tus cambios y haz commits: `git commit -m "Añade una nueva característica"`
4. Haz push a la rama: `git push origin nueva-caracteristica`
5. Crea un pull request en GitHub.

## Estructura de archivos

La Estructura del archivo esta centrada en los Modelos, Vistas, Controladores y las Rutas, añadiendo 
Estructura de las Tablas
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

## Créditos

- Agradecimientos a los colaboradores del proyecto.
- Referencias a recursos utilizados en el proyecto.


## Contacto

[correo electrónico](juanmanuelflorezescobar@gmail.com).
[correo electrónico](giovannisaavedra160@gmail.com).

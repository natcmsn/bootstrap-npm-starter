# Creación de un inicio de sesión (login)

## *Objetivo:*
Crear un formulario de acceso (log in) siguiendo las indicaciones del capítulo 3 punto 3.4.

## Pasos seguidos:

1. Se buscó una plantilla de inicio de npm que use Bootstrap: https://github.com/twbs/bootstrap-npm-starter
Se comprobó que se tiene instalado Node.js.

2. En la terminal (de Laragon) se clonó el repositorio mediante los comandos:
   
   git clone https://github.com/twbs/bootstrap-npm-starter
   cd bootstrap-npm-starter

3. Se instalaron las dependencias:
  
   npm i

4. Se compiló Sass:
  
   npm run css-compile

5. Vigilar si hay cambios de Sass (usando nodemon):

   npm run watch

6. Se inició el servidor local:

   npm run server

7. Vigilar Sass por si hay cambios e iniciar servidor local:

   npm start


*Nota:*

Hizo falta abrir dos pestañas del terminal para ejecutar `npm run server` y `npm run watch` al mismo tiempo.

Luego se abrió <http://localhost:3000> para ver la página.

8. Una vez hecho esto se crearon los archivos php indicados en el tema 3 punto 3.4:
    
    sesiones_uso_basico.php
    sesiones_uso_basico2.php
    sesiones1_login.php
    sesiones1_logout.php
    sesiones1_principal.php




## What's included

- Single HTML page (`index.html`) to demonstrate how to include Bootstrap.
- Includes [Bootstrap](https://getbootstrap.com) (currently using v4.6.0) source files via npm.
- Includes [Bootstrap Icons](https://icons.getbootstrap.com) (v1.4.0), which includes over 1,200 icons available as SVGs and web fonts.
- npm scripts (see `package.json`) for compiling and autoprefixing Sass, watching for changes, and starting a basic local server.
- Example stylesheet (`scss/starter.scss`) highlighting two ways to include and customize Bootstrap.
- Example JavaScript file (`assets/js/starter.js`) showing how to import all of Bootstrap, or just the parts you need.


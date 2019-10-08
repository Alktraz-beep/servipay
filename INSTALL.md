# Instalación del entorno y del proyecto

En esta sección se explica como instalar Laravel en sistemas *UNIX  de manera general, obviamente existen particularidades que se deberán solventar por su cuenta.

## Dependencias

Para poder trabajar con laravel se requieren varias cosas

* php

  ```shell
  sudo pacman -S php # En ArchLinux
  # En el caso ArchLinuz basta con instalar php y automáticamente descargar módulos del mismo como php-pdo,etc. 
  ```

- composer

  ```shell
  sudo pacman -S composer # En ArchLinux
  ```
- npm 

  ```shell
  sudo pacman -S npm # En ArchLinux
  ```

- laravel

  ```shell
  composer global require laravel/installer # En cualquier *UNIX
  ```

  Y se debe configurar el `$PATH` para lo cual se edita el archivo de configuración que se este utilizando

  * Para bash

    ```shell
    vim ~/.bashrc
    # Al final del archivo colocar lo siguiente
    export PATH="~/.config/composer/vendor/bin:$PATH"
    ```

  * Para fish

    ```shell
    vim ~/.config/fish/config.fish 
    # Al final del archivo colocar lo siguiente
    set -gx $PATH $HOME/.config/composer/vendor/bin
    ```

* sqlite (opcional)

  Se suele utlizar sqlite como RDBMS de pruebas, pero en este caso se debe instalar el RDBMS que se vaya a ocupar en el proyecto (Oracle, MySQL, SQLServer, etc).

  Para utlizar sqlite en el proyecto se debe instalar `php-sqlite` para lo cual se puede instalar lo siguiente
  
  ```shell
  sudo pacman -S php-sqlite
  ```
  
  Después se debe habilitar el módulo, para lo cual se edita el siguiente archivo de configuración `/etc/php/php.ini` y descomentar `;extension=pdo_sqlite.so`
  
  ```shell
  sudo vim /etc/php/php.ini
  # Buscar y descomentar lo siguiente, los comentarios se ponen con ;
  ;extension=pdo_sqlite.so
  ```

## Instalación del proyecto

Después de tener la copia local en su equipo de cómputo (en caso de no hacer este paso se debe ir al archivo [CONTRIBUTING](./CONTRIBUTING.md)) se debe usar una terminal y cambiarse a la ruta del proyecto para poder ejecutar lo siguiente

```shell
composer install 	# Instala las dependencias de php y se guardan en la carpeta vendor
npm install 	    # Instala dependencias de js y se guardan en la carpeta node_modules
npm run dev 	    # Se compilan scripts de js necesarios para trabajar con vue.js
```

### Configuración inicial de proyecto

Las configuraciones del proyecto se realizan en el archivo `.env`, dicho archivo suele *ignorarse* a la hora de subir el proyecto pero se sube un *template* llamado `.env.example`.

Para facilitar las cosas se la configuración inicial del proyecto fue realizada ya por un servidor y se deja en el archivo `.env.example` por lo cual lo único que se debe hacer es copiarla, para ello.

```shell
cp .env.example .env
```

Por último, las aplicaciones tienen una clave de seguridad que les sirve para validar ciertas cosas en los formularios por lo cual se debe tirar el siguiente comando

```shell
php artisan key:generate
```
### Lanzar el servidor

Finalmente podemos correr el proyecto para lo cual podemos tirar cualquiera de los siguientes dos comandos.

```shell
php artisan serve
php artisan serve --host 0.0.0.0 # Para poder ver la página en otros hosts
```

### (opcional) Conexión a sqlite

En caso de querer hacer pruebas del *Eloquent* (el ORM de laravel) se puede configurar `sqlite`, recordar que después se cambiará por un RDBMS.

El archivo `.env` lo he preconfigurado par trabajar con `sqlite` por lo cual lo único que se tiene que hacer es ejecutar lo siguiente.

```shell
touch database/database.sqlite
php artisan migrate # Se crean algunas tablas en sqlite.
```

### Acerca del login

He incorporado un `login` sencillo al proyecto, dicho login no funcioara si no se ejecutan los comandos mencionados en **conexión a sqlite**.

### Hacer la migraciones y poblar la base de datos

Para la primera fase del proyecto se puede omitir este paso por que todavía no hay tablas que poblar.

```shell
php artisan db:seed # Poblando la base de datos ... este comando tardará algo de tiempo
```

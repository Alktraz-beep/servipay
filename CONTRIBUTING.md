# CONTRIBUTING

Es común que el modelo de desarrollo tenga 2 ramas **principales** cuya vida (duración) será infinita.

* `master`
* `develop`

Usualmente **nadie** se mete con la rama master, esta rama es solo para *producción*.

Adicional a ello vamos a tener **ramas de apoyo** cuya vida será finita y propablemente se destruirán en cuando haya cumplido su propósito. 

## ¿Cómo contribuir?

### *Fork* del repositorio principal

Realizar un *fork* o copia del repositorio. La copia se hace mediante el botón `Fork` que se encuentra en la esquina superior derecha.

### Clonar el repositorio

Después de realizar el *fork* deben *clonar* su repositorio.

### Sincronización de su copia local con mi repositorio raíz

Para sincronizar su copia local del proyecto con mi repositorio raíz se debe ejecutar el siguiente comando

```shell
$ git remote add --track develop rhofp https://github.com/rhofp/Colegio-FI #
```

Eso de ponerle rhofp no es necesariamente así, podrián ponerle `upstream` por convención. Solo hay que tener cuidado a la hora de hacer el pull.

Y para tener la versión más actual de la rama `develop` de mi repositorio se debe tirar el siguiente comando.

```shell
git pull rhofp develop
```

Este proceso debe realizarse antes de empezar a trabajar con su copia local, si no se hace se suele tener *conflictos* entre versiones.

### Feature branch

Para cada módulo del proyecto se recomienda crear una rama, esto ayudará a disminuir los *conflictos* entre versiones del proyecto.El comando para crear una rama y cambiarse a ella es

```shell
git checkout -b frontend
```

Para ver todas las ramas que se tiene el repositorio podemos tirar

```shell
git branch
```

Una vez realizado todos sus cambios deben subir su trabajo a su repositorio en Github para lo cual tiran el siguiente comando, obviamente me salto la parte de agregar los archivos ya hacer commits.

```sh
git push origin frontend
```

Y posteriormente se vuelven a cambiar a la rama `develop`con el siguiente comando. 

```shell
git checkout develop
```

Ya que se cambian podrían empezar a desarrollar otro módulo de la aplicación creando otra rama temática.

### *Pull request*

Se sugiere ampliamente subir los avances mediante un *pull request* por lo que una vez que subimos nuestra rama a Github deben presionar el botón del **pull request**.

Después de que los cambios hayan sido incorporados en la rama raíz, ya no es necesario tener la rama temática, en caso de querer borrarla se emplea el siguiente comando.

```shell
git push origin --delete scrapping
```

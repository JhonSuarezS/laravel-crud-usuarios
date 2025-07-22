# CRUD de Usuarios - Laravel 10

Este proyecto es una aplicación web desarrollada con Laravel que permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre usuarios. Es ideal como base para proyectos más grandes o como ejemplo práctico para aprender Laravel.

## 🚀 Tecnologías

- PHP 8.x
- Laravel 10.x
- MySQL
- Bootstrap 5

## 🧰 Requisitos

- Composer
- PHP 8.1 o superior
- MySQL o MariaDB
- Node.js (opcional, si se compilan assets con Vite)

## 📦 Instalación

1. **Clona el repositorio:**

```bash
git clone https://github.com/JhonSuarezS/laravel-crud-usuarios.git
cd laravel-crud-usuarios
```
2. **Instala las dependencias de PHP:**

```bash
composer install
```

3. **Copia el archivo de entorno y genera la clave de la app:**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Configura la base de datos en el archivo .env:**
 
```bash
DB_DATABASE=crud_usuarios
DB_USERNAME=root
DB_PASSWORD=123456
```
**Asegúrate de tener esa base de datos creada en tu gestor (phpMyAdmin, DBeaver, etc).**

5. **Ejecuta las migraciones:**

```bash
php artisan migrate
```

6. **Inicia el servidor de desarrollo:**

```bash
php artisan serve
```



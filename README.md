# Proyecto Laravel - CRUD de Productos

Este proyecto fue desarrollado como parte de una prueba técnica.  
Consiste en un sistema de autenticación de usuarios y gestión de productos.

Tecnologías utilizadas:

- Laravel
- MySQL (XAMPP)
- PHP 8.1+
- Bootstrap 5

---

## Requisitos

- PHP (incluido en XAMPP)
- Composer
- MySQL (puede usarse phpMyAdmin)
- Navegador web

---

## Instrucciones de instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/PavoX20/SDM_2025.4.16.git
cd SDM_2025.4.16
```

2. Instalar dependencias de Laravel:

```bash
composer install
```

3. Copiar y configurar el archivo `.env`:

```bash
cp .env.example .env
```

Editar las variables de conexión a base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base
DB_USERNAME=root
DB_PASSWORD=
```

4. Generar clave de aplicación:

```bash
php artisan key:generate
```

5. Crear las tablas en la base de datos:

```bash
php artisan migrate
```

6. Levantar el servidor:

```bash
php artisan serve
```

Acceder desde el navegador a `http://localhost:8000`

---

## Funcionalidades

- Registro e inicio de sesión de usuarios
- CRUD completo de productos
- Uso de UUID como clave primaria
- Middleware para protección de rutas
- Diseño moderno con Bootstrap 5
- Modo claro/oscuro con persistencia
- Validaciones con mensajes
- Layout responsive

---

## Capturas de pantalla

### Pantalla de bienvenida
![Welcome](Images/Welcome.png)

### Login
![Login](Images/Login.png)

### Registro de usuario
![Registro](Images/create_user.png)

---

### Listado de productos
![Ver productos](Images/view_products.png)

### Agregar producto
![Agregar producto](Images/add_products.png)

### Producto guardado exitosamente
![Producto agregado](Images/product_added.png)

### Editar producto
![Editar producto](Images/edit_product.png)

### Eliminar producto
![Eliminar producto](Images/delete_product.png)

---

## Notas

- El sistema está configurado para funcionar en entornos locales usando XAMPP.
- La funcionalidad de subida de imágenes se encuentra planificada.
- Todas las vistas están optimizadas para usabilidad y estética.

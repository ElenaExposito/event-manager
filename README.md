<div align="center">

# **Event Manager - Laravel + Filament**

### Diagrama de clases

<img src="https://i.imgur.com/ZeE86rI.png" alt="Diagrama de clases" width="500" />

### Diagrama de secuencia

<img src="https://i.imgur.com/Z1n6PEd.png" alt="Diagrama de secuencia" width="500" />

## _Aplicación web de gestión de eventos desarrollada con Laravel y Filament_

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com/)
[![Filament](https://img.shields.io/badge/Filament-3.x-purple.svg)](https://filamentphp.com/)
[![Project Status](https://img.shields.io/badge/Project-Active-green.svg)]()

</div>

---

## 📌 Descripción

**Event Manager** es un panel de administración de eventos creado con **Laravel**, **Filament** y **MySQL**. Permite registrar, listar y gestionar eventos desde una interfaz de administración moderna.

> Proyecto realizado en colaboración como reto final del curso.

---

## 🔧 Tecnologías utilizadas

- Laravel 10
- Filament 3
- PHP 8.2
- MySQL 8.4
- PHPUnit
- Trello
- Git + GitHub
- Sistema operativo: Debian (WSL2) y Windows 11

---

## 🧩 Características

- CRUD completo de eventos desde panel admin (`/admin`)
- Autenticación integrada
- Testing automático con PHPUnit
- Gestión sencilla desde Filament
- Despliegue local con Laravel Sail o `php artisan serve`

---

## 📋 Enlace al tablero Trello

> Puedes consultar las tareas, backlog y roles definidos aquí:

🔗 [https://trello.com/b/AqnXwCl8/event-manager](https://trello.com/b/AqnXwCl8/event-manager)

---

<details>
<summary style="color: rgb(255, 177, 0);">📁 Índice del proyecto</summary>

- [📌 Descripción](#-descripción)
- [🔧 Tecnologías utilizadas](#-tecnologías-utilizadas)
- [🧩 Características](#-características)
- [📋 Enlace al tablero Trello](#enlace-al-tablero-trello)
- [🚀 Instalación y uso](#-instalación-y-uso)
- [🧪 Testing](#-testing)
- [🤝 Autores](#-autores)

</details>

---

## 🚀 Instalación y uso

### Requisitos previos:

- PHP >= 8.2
- Composer
- MySQL
- Node.js + npm
- Laravel CLI (opcional)

---

### Instrucciones de instalación:

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/event-manager.git
cd event-manager

# Instalar dependencias PHP
composer install

# Copiar archivo .env
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate

# Configurar las variables de entorno (.env)
# DB_USERNAME, DB_PASSWORD, etc.

# Crear la base de datos y ejecutar migraciones
php artisan migrate

# Crear usuario admin para Filament
php artisan make:filament-user

# Iniciar el servidor
php artisan serve
```

## 🧪 Testing

Para ejecutar los tests automatizados del proyecto:

```bash
php artisan test
```

## 🤝 Autores
#### 👩‍💻 **Elena Expósito Lara**

<details>
<summary>Más información:</summary>
  
- GitHub: [ElenaExposito](https://github.com/ElenaExposito)
- Linkedin: [Elena Expósito Lara](https://www.linkedin.com/in/elena-exp%C3%B3sito-lara/)
  
</details>

#### 👨‍💻 **Daniel Ronda Morales**

<details>
<summary>Más información:</summary>
  
- GitHub: [DaniRonda](https://github.com/DaniRonda)
- Linkedin: [Daniel Ronda Morales](https://www.linkedin.com/in/daniel-ronda-morales/)
  
</details>

# 🧰 Proyecto Taller Mecánico

**Taller Mecánico Web System** es una aplicación desarrollada en **Laravel** para la gestión integral de un taller automotriz.  
Permite administrar clientes, vehículos, servicios, turnos y usuarios de forma rápida, moderna y segura.

---

## 🚀 Tecnologías Utilizadas

- **Laravel 11**
- **PHP 8+**
- **Blade Templates**
- **Tailwind CSS**
- **Vite**
- **MySQL**
- **Git / GitHub**
- **Visual Studio Code**

---

## ⚙️ Instalación y Configuración

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/Carls025/Proyecto-Taller-Mecanico.git
cd Proyecto-Taller-Mecanico

2️⃣ Instalar dependencias
composer install
npm install

3️⃣ Crear archivo de entorno
cp .env.example .env


Luego editá el archivo .env y configurá tu base de datos, por ejemplo:

DB_DATABASE=taller_mecanico
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generar la clave de la aplicación
php artisan key:generate

5️⃣ Ejecutar las migraciones
php artisan migrate

6️⃣ Compilar los assets (CSS, JS)
npm run dev

7️⃣ Iniciar el servidor
php artisan serve


Y luego accedé en tu navegador a:

http://127.0.0.1:8000

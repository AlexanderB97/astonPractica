# astonPractica

Sistema web para la gestión académica de materias, proyectos, entregas y calificaciones, con acceso diferenciado según el rol del usuario.

## 📌 Descripción

**astonPractica** es una aplicación web orientada a la gestión de actividades académicas.

El sistema permite administrar materias, proyectos, entregas y calificaciones, proporcionando diferentes funcionalidades según el rol del usuario.

### Roles

* **Administrador:** gestiona usuarios, materias y asignaciones.
* **Docente:** gestiona proyectos, revisa entregas y registra calificaciones.
* **Estudiante:** consulta materias, entrega trabajos y visualiza sus calificaciones.

---

## 🚀 Funcionalidades

### 🔐 RBAC y gestión de usuarios

* Autenticación de usuarios.
* Roles:

  * Administrador
  * Docente
  * Estudiante
* Control de acceso según el rol.

### 📚 Gestión de materias

* Alta y gestión de materias.
* Asignación de docentes a materias.

### 📋 Gestión de proyectos

* Creación de proyectos dentro de una materia.
* Definición de fechas límite.
* Consulta de proyectos.

### 📤 Entregas de trabajos

* Subida de trabajos por parte de los estudiantes.
* Consulta del estado de las entregas.

### 📝 Calificaciones y notas

* Calificación de entregas por parte del docente.
* Registro de comentarios.
* Consulta de resultados por parte del estudiante.

### 📊 Paneles por rol

Cada usuario contará con un panel adaptado a las funcionalidades correspondientes a su rol.

---

## 🗺️ Roadmap

El desarrollo del sistema está organizado mediante milestones.

### 1. RBAC y gestión de usuarios

Login, roles (`admin`, `docente`, `estudiante`) y control de acceso al sistema.

### 2. Gestión de materias

Alta de materias y asignación de docentes.

### 3. Gestión de proyectos

Creación de proyectos dentro de una materia y configuración de fechas límite.

### 4. Entregas de trabajos

Subida de archivos por parte del estudiante y visualización del estado de la entrega.

### 5. Calificación y notas

El docente puede calificar las entregas con una nota y comentario. El estudiante puede consultar sus resultados.

### 6. Paneles por rol

Vistas diferenciadas para administrador, docente y estudiante según su rol.

---

## 🌿 Estrategia de ramas

El proyecto utiliza una estructura de ramas para separar el desarrollo, la integración y la versión estable.

```text
main
└── testing
    ├── frontend
    └── backend
```

### `main`

Contiene la versión estable del proyecto.

No se debe desarrollar directamente sobre esta rama.

### `testing`

Rama destinada a integrar los cambios de frontend y backend para realizar pruebas antes de pasar los cambios a `main`.

### `frontend`

Rama base para el desarrollo relacionado con la interfaz y experiencia de usuario.

Cada desarrollador que trabaje en frontend deberá crear su propia rama a partir de `frontend`.

Ejemplos:

```text
frontend-alexander
frontend-juan
frontend-maria
```

### `backend`

Rama base para el desarrollo relacionado con la lógica del sistema, modelos, controladores, servicios, migraciones y demás componentes del backend.

Cada desarrollador que trabaje en backend deberá crear su propia rama a partir de `backend`.

Ejemplos:

```text
backend-alexander
backend-juan
backend-maria
```

### Flujo de trabajo

```text
                main
                 ↑
                 │
              testing
              ↑     ↑
              │     │
         frontend  backend
            ↑         ↑
            │         │
       rama personal  rama personal
```

Los desarrolladores trabajan en sus ramas personales y posteriormente realizan un Pull Request hacia la rama correspondiente (`frontend` o `backend`).

Los cambios integrados en `frontend` y `backend` pasan posteriormente a `testing`, donde se realizan las pruebas de integración.

Una vez validados los cambios, `testing` se integra en `main`.

---

## 🛠️ Tecnologías

* PHP
* Laravel
* Blade
* Livewire
* MySQL / SQLite
* Git
* GitHub

---

## ⚙️ Instalación

Clonar el repositorio:

```bash
git clone https://github.com/AlexanderB97/astonPractica.git
cd astonPractica
```

Instalar las dependencias de PHP:

```bash
composer install
```

Instalar las dependencias de frontend:

```bash
npm install
```

Crear el archivo de entorno:

```bash
cp .env.example .env
```

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

Configurar las variables de conexión a la base de datos en `.env`.

Ejecutar las migraciones:

```bash
php artisan migrate
```

Para iniciar el servidor de desarrollo:

```bash
php artisan serve
```

---

## 🧪 Testing

Las pruebas automatizadas se ejecutan mediante:

```bash
php artisan test
```

Antes de integrar cambios en `testing`, se deben ejecutar las pruebas correspondientes y verificar que la aplicación funcione correctamente.

---

## 📁 Estructura principal

```text
astonPractica/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── artisan
├── composer.json
├── package.json
└── README.md
```

---

## 📌 Estado del proyecto

🚧 **En desarrollo**

Las funcionalidades se implementarán progresivamente de acuerdo con los milestones definidos en GitHub.

---

## 👨‍💻 Desarrollo

Proyecto desarrollado como parte de un proyecto colaborativo.

**Alexander Benítez**

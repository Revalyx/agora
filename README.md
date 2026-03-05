![Kotlin](https://img.shields.io/badge/Kotlin-1.9-orange)
![PHP](https://img.shields.io/badge/PHP-8-blue)
# Agora

**Agora** es una aplicación móvil diseñada para crear **clubes de lectura digitales**. Permite a los usuarios crear salas privadas donde pueden debatir sobre un libro, compartir ideas y comentar capítulos sin necesidad de reunirse físicamente.

La aplicación busca trasladar la experiencia de un club de lectura tradicional al entorno digital, manteniendo la conversación organizada dentro de espacios dedicados a cada libro.

---

# Objetivo del proyecto

Agora nace con el objetivo de facilitar la creación de **comunidades de lectura pequeñas y privadas**.
Un usuario puede crear una sala dedicada a un libro y compartir un **código de invitación** con otras personas para debatir dentro de ella.

El proyecto está diseñado para ser:

* Simple
* Escalable
* Fácil de mantener
* Independiente entre backend y aplicación móvil

---

# Arquitectura del proyecto

El repositorio está organizado como un **monorepo**, separando claramente el backend y la aplicación móvil.

```
agora/
│
├── api/        Backend en PHP (REST API)
│
├── android/    Aplicación Android desarrollada en Kotlin
│
├── docs/       Documentación técnica
│
└── README.md
```

---

# Backend (API)

La API será responsable de:

* Registro y autenticación de usuarios
* Creación y gestión de salas de lectura
* Gestión de miembros dentro de cada sala
* Envío y recuperación de mensajes

Tecnologías previstas:

* PHP
* MySQL
* API REST
* Autenticación mediante token

La API se desplegará posteriormente en un **VPS**.

---

# Aplicación Android

La aplicación móvil será el cliente principal de Agora.

Stack tecnológico:

* Kotlin
* Jetpack Compose
* Retrofit para comunicación con la API

La aplicación permitirá a los usuarios:

* Registrarse o iniciar sesión
* Crear salas de lectura
* Unirse a salas mediante código
* Participar en debates mediante mensajes

---

# MVP (Minimum Viable Product)

La primera versión del proyecto incluirá únicamente las funcionalidades esenciales:

* Registro e inicio de sesión
* Creación de salas
* Unirse a salas mediante código
* Sistema de debate en cada sala, separando por capítulos / partes.

---

# Roadmap

Futuras funcionalidades previstas:

* Mensajes organizados por capítulos
* Sistema anti-spoilers
* Citas favoritas del libro
* Reacciones a mensajes
* Notificaciones
* Estadísticas de lectura

---

# Estado del proyecto
![Status](https://img.shields.io/badge/status-in_progress-yellow)

Actualmente el proyecto se encuentra en **fase inicial de desarrollo**.

Las primeras tareas incluyen:

* Preparación del repositorio
* Desarrollo de la API
* Implementación de la aplicación Android

---

# Licencia

Este proyecto se encuentra actualmente en desarrollo y no dispone todavía de una licencia pública.

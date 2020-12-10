Peticiones de Postman

```
DEPARTAMENTOS:
[POST]
http://127.0.0.1:8000/api/departamentos/añadir
JSON: 
{   
    "nombre": "Norte de Santander"
}

[PUT]
http://127.0.0.1:8000/api/departamentos/actualizar
JSON: {
{
    "id_departamento": 1,
    "nombre": "Atlántico"
}

[DELETE]
http://127.0.0.1:8000/api/departamentos/eliminar
JSON:
{
    "id_departamento": 1
}

[GET]
http://127.0.0.1:8000/api/departamentos/obtener

CIUDADES:
[POST]
http://127.0.0.1:8000/api/ciudades/añadir
JSON: 
{
    "nombre": "Barranquilla",
    "id_departamento": 3
}
[PUT]
http://127.0.0.1:8000/api/ciudades/actualizar
JSON: {
{
    "id_ciudad": 2,
    "nombre": "Barranquilla",
    "id_departamento": 3
}
[DELETE]
http://127.0.0.1:8000/api/ciudades/eliminar
JSON:
{
    "id_ciudad": 1
}

[GET]
http://127.0.0.1:8000/api/ciudades/obtener

EPS:

[POST]
http://127.0.0.1:8000/api/eps/añadir
JSON: 
{
    "nit": "ABCDJ",
    "nombre": "Salud Colmena E.P.S. S.A.0",
    "id_ciudad": 1
}
[PUT]
http://127.0.0.1:8000/api/eps/actualizar
JSON: {
{
    "id_eps": 2,
    "nit": "ABCDJ",
    "nombre": "Salud Colmena E.P.S.",
    "id_ciudad": 1
}

[DELETE]
http://127.0.0.1:8000/api/eps/eliminar
JSON:
{
    "id_eps": 3
}

[GET]
http://127.0.0.1:8000/api/eps/obtener

MÉDICOS:

[POST]
http://127.0.0.1:8000/api/medicos/añadir
JSON: 
{   
    "cedula_medico": 13637618,
    "tarjeta": "98126187",
    "nombre": "Jose Manuel",
    "apellido": "Gómez",
    "telefono": "3214569874",
    "direccion": "Calle 23 # 13-42",
    "id_eps": 6
}
[PUT]
http://127.0.0.1:8000/api/medicos/actualizar
JSON: {
{   
    "cedula_medico": 13637618,
    "tarjeta": "98126187",
    "nombre": "Jose Manuel",
    "apellido": "Gómez",
    "telefono": "3214569874",
    "direccion": "Calle 23 # 13-42",
    "id_eps": 4
}

[DELETE]
http://127.0.0.1:8000/api/medicos/eliminar
JSON:
{   
    "cedula_medico": 110106551
}

[GET]
http://127.0.0.1:8000/api/medicos/obtener

AFILIACIONES:

[POST]
http://127.0.0.1:8000/api/afiliaciones/añadir
JSON: 
{
    "id_eps": 4
}
[PUT]
http://127.0.0.1:8000/api/afiliaciones/actualizar
JSON: {
{
    "id_afiliacion": 1,
    "id_eps": 4
}

[DELETE]
http://127.0.0.1:8000/api/afiliaciones/eliminar
JSON:
{
    "id_afiliacion": 1
}

[GET]
http://127.0.0.1:8000/api/afiliaciones/obtener

PACIENTES:

[POST]
http://127.0.0.1:8000/api/pacientes/añadir
JSON: 
{    
    "cedula_paciente": 16547899,
    "tipo_documento": "CC",
    "nombre": "Nicolas Páez",
    "apellido": "Rueda",
    "telefono": "3256547896",
    "direccion": "Calle 13 # 9 - 67",
    "id_afiliacion": 5
    }
[PUT]
http://127.0.0.1:8000/api/pacientes/actualizar
JSON: {
{    
    "cedula_paciente": 16547899,
    "tipo_documento": "CC",
    "nombre": "Nicolas Páez",
    "apellido": "Rueda",
    "telefono": "3256547896",
    "direccion": "Calle 13 # 9 - 67",
    "id_afiliacion": 5
}

[DELETE]
http://127.0.0.1:8000/api/pacientes/eliminar
JSON:
{    
    "cedula_paciente": 16547899
}

[GET]
http://127.0.0.1:8000/api/pacientes/obtener

HISTORIAS:

[POST]
http://127.0.0.1:8000/api/historias/añadir
JSON: 
{
    "cedula_paciente": 1101076811
}
[PUT]
http://127.0.0.1:8000/api/historias/actualizar
JSON: 
{
    "id_historia": 1,
    "cedula_paciente": 1101076811
}

[DELETE]
http://127.0.0.1:8000/api/historias/eliminar
JSON:
{    
    "id_historia": 2
}

[GET]
http://127.0.0.1:8000/api/historias/obtener

HOSPITALIZACIONES:

[POST]
http://127.0.0.1:8000/api/hospitalizaciones/añadir
{
    "entrada": "2020-11-20 19:05:38",
    "salida": "2020-11-20 19:05:40",
    "id_historia": 2
}
[PUT]
http://127.0.0.1:8000/api/hospitalizaciones/actualizar
JSON: 
{
    "id_hospitalizacion": 1,
    "entrada": "2020-11-20 19:05:38",
    "salida": "2020-11-20 19:05:40",
    "id_historia": 2
}

[DELETE]
http://127.0.0.1:8000/api/hospitalizaciones/eliminar
JSON:
{
    "id_hospitalizacion": 1
}

[GET]
http://127.0.0.1:8000/api/hospitalizaciones/obtener

PROCEDIMIENTOS:

[POST]
http://127.0.0.1:8000/api/procedimientos/añadir
{
    "tipo": "Examen",
    "id_historia": 2
}
[PUT]
http://127.0.0.1:8000/api/procedimientos/actualizar
JSON: 
{
    "id_procedimiento": 1,
    "tipo": "Examen",
    "id_historia": 2
}

[DELETE]
http://127.0.0.1:8000/api/procedimientos/eliminar
JSON:
{
    "id_procedimiento": 3
}

[GET]
http://127.0.0.1:8000/api/procedimientos/obtener

ENFERMEDADES:

[POST]
http://127.0.0.1:8000/api/enfermedades/añadir
{
    "nombre": "Covid 19",
    "descripcion": "Gripa",
    "id_historia": 2
}
[PUT]
http://127.0.0.1:8000/api/enfermedades/actualizar
JSON: 
{
    "id_enfermedad": 1,
    "nombre": "Covid 19",
    "descripcion": "Gripa",
    "id_historia": 2
}

[DELETE]
http://127.0.0.1:8000/api/enfermedades/eliminar
JSON:
{
    "id_enfermedad": 1
}

[GET]
http://127.0.0.1:8000/api/enfermedades/obtener

CONSULTAS:

[POST]
http://127.0.0.1:8000/api/consultas/añadir
{
    "tipo": "Revisión pulmonar",
    "titulo": "Revisión pulmonar 2",
    "descripcion": "Revisión pulmonar 3",
    "horario": "2020-11-20 19:16:28",
    "id_historia": "2"
}
[PUT]
http://127.0.0.1:8000/api/consultas/actualizar
JSON: 
{
    "tipo": "Revisión pulmonar",
    "titulo": "Revisión pulmonar 2",
    "descripcion": "Revisión pulmonar 3",
    "horario": "2020-11-20 19:16:28",
    "id_historia": "2"
}

[DELETE]
http://127.0.0.1:8000/api/consultas/eliminar
JSON:
{
    "id_consulta": 1
}
[GET]
http://127.0.0.1:8000/api/consultas/obtener

LABORATORIOS:

[POST]
http://127.0.0.1:8000/api/laboratorios/añadir
{
    "titulo": "Laboratorio Pulmonar",
    "id_historia": 2
}
[PUT]
http://127.0.0.1:8000/api/laboratorios/actualizar
JSON: 
{
    "id_laboratorio": 3,
    "titulo": "Laboratorio Pulmonar",
    "id_historia": 2
}

[DELETE]
http://127.0.0.1:8000/api/laboratorios/eliminar
JSON:
{
    "id_laboratorio": 3
}
[GET]
http://127.0.0.1:8000/api/laboratorios/obtener
```
<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_opencast', language 'es', version '5.1'.
 *
 * @package     block_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aclnothingtobesaved'] = 'No se han introducido cambios en la visibilidad.';
$string['aclownerrole'] = 'Función de rol propietario de ACL';
$string['aclrolesadded'] = 'El cambio de visibilidad se ha activado para que todos los alumnos del curso puedan acceder al vídeo {$a->title}<br />Por favor, actualice el sitio después de algún tiempo para ver el estado de visibilidad actual.';
$string['aclrolesaddedgroup'] = 'El cambio de visibilidad se ha activado para que los alumnos de los grupos seleccionados puedan acceder al vídeo: {$a->title}<br />Por favor, actualice el sitio después de algún tiempo para ver el estado de visibilidad actual.';
$string['aclrolesdeleted'] = 'El cambio de visibilidad se ha activado para evitar que todos los alumnos del curso accedan al vídeo: {$a->title}<br />Por favor, actualice el sitio después de algún tiempo para ver el estado de visibilidad actual.';
$string['actions'] = 'Lista de acciones separadas por comas';
$string['addlti_defaulttitle'] = 'Vídeos Opencast';
$string['addvideo'] = 'Añadir vídeo';
$string['adhocfiledeletion'] = 'Eliminar archivo de vídeo de moodle';
$string['adminchoice_noworkflow'] = '- Sin flujo de trabajo --';
$string['allowdownloadtranscriptionsetting'] = 'Permitir la descarga de transcripciones';
$string['allowunassign'] = 'Permitir desasignar del curso';
$string['backupopencastvideos'] = 'Incluir vídeos de la instancia Opencast {$a} en este curso';
$string['blocksettings'] = 'Configuración de una instancia de bloque';
$string['cachevalidtime'] = 'Tiempo de validez de la caché';
$string['changeowner'] = 'Cambiar propietario';
$string['changevisibility'] = 'Alterar la visibilidad';
$string['contributor'] = 'Colaborador(es)';
$string['created'] = 'Creado en';
$string['createdby'] = 'Subido por';
$string['createseriesforcourse'] = 'Crear una nueva serie';
$string['creator'] = 'Presentador(es)';
$string['date'] = 'Fecha de inicio';
$string['default'] = 'Por defecto';
$string['delete_confirm_metadata'] = '¿Está seguro de que desea eliminar este campo de metadatos?';
$string['delete_confirm_role'] = '¿Está seguro de que desea eliminar este rol?';
$string['delete_metadata'] = 'Borrar campo de metadatos';
$string['delete_role'] = 'Borrar rol';
$string['deletedraft'] = 'Borrar un vídeo antes de transferirlo a Opencast';
$string['deleteevent'] = 'Eliminar un evento en Opencast';
$string['deleteworkflow'] = 'El flujo de trabajo debe iniciarse antes de que se elimine el evento';
$string['deleting'] = 'Va a ser eliminado';
$string['description'] = 'Descripción';
$string['downloadvideo'] = 'Descargar vídeo';
$string['duplicateworkflow'] = 'Flujo de trabajo para la duplicación de eventos';
$string['duration'] = 'Duración';
$string['editorbaseurl'] = 'URL base del editor Opencast';
$string['editorendpointurl'] = 'Endpoint del editor de Opencast';
$string['editseries'] = 'Editar series';
$string['enablechunkupload'] = 'Habilitar Chunkupload';
$string['enableopencasteditorlink'] = 'Mostrar el enlace al Editor opencast en el menú de acciones';
$string['enableopencaststudiolink'] = 'Mostrar el enlace a opencast studio';
$string['enableopencaststudioreturnbtn'] = 'Mostrar un botón de redirección hacia atrás en Studio';
$string['enableschedulingchangevisibility'] = 'Programar un cambio de visibilidad';
$string['engageurl'] = 'URL del servidor Opencast Engage';
$string['error_seriesid_missing_course'] = 'El curso {$a->coursefullname} (ID: {$a->courseid}) no tiene series de cursos. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_missing_opencast'] = 'Las series del curso {$a->coursefullname} (ID: {$a->courseid}) no se pueden encontrar en el sistema opencast. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_not_matching'] = 'El curso {$a->coursefullname} (ID: {$a->courseid}) tiene unas series de curso que no coinciden con el seriesid de la tarea. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_workflow_not_exists'] = 'El flujo de trabajo {$a->duplicateworkflow} no se encuentra en el sistema opencast. El evento ({$a->eventid}) no se ha podido restaurar para el curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_workflow_not_started'] = 'No se ha podido iniciar el flujo de trabajo para copiar el vídeo ({$a->eventid}) asignado al curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_workflow_setup_missing'] = 'El plugin block_opencast no está configurado correctamente. Falta el flujo de trabajo de duplicación.';
$string['erroremailsubj'] = 'Error al ejecutar la tarea duplicada del proceso opencast';
$string['errorgetblockvideos'] = 'No se puede cargar la lista (Error: {$a})';
$string['errorrestoremissingevents_subj'] = 'Error de Opencast durante el proceso de restauración';
$string['errorrestoremissingseries_subj'] = 'Error de Opencast durante el proceso de restauración';
$string['filetypes'] = 'Tipos de archivo aceptados';
$string['general_settings'] = 'Ajustes generales';
$string['gotooverview'] = 'Ir al resumen...';
$string['groupcreation'] = 'Crear un grupo';
$string['groupname'] = 'Nombre del grupo';
$string['heading_actions'] = 'Acciones';
$string['heading_datatype'] = 'Tipo de campo';
$string['heading_defaultable'] = 'Predeterminado';
$string['heading_description'] = 'Descripción del campo';
$string['heading_name'] = 'Nombre del Campo';
$string['heading_params'] = 'Parámetros (JSON)';
$string['heading_permanent'] = 'Permanente';
$string['heading_readonly'] = 'Sólo lectura';
$string['heading_required'] = 'Requerido';
$string['heading_role'] = 'Rol';
$string['identifier'] = 'Identificador';
$string['importmode'] = 'Modo de importación';
$string['importseries'] = 'Importar series';
$string['ingest_endpoint_notfound'] = 'El punto final ingets no está disponible, esto tiene que ser arreglado por el administrador del sistema.';
$string['ingestupload'] = 'Cargando datos';
$string['initialvisibilitystatus'] = 'Visibilidad inicial del vídeo';
$string['invalidacldata'] = 'Datos acl no válidos';
$string['invalidmetadatafield'] = 'Se ha encontrado un campo de metadatos no válido: {$a}';
$string['language'] = 'Idioma';
$string['license'] = 'Licencia';
$string['limituploadjobs'] = 'Limitar el trabajo de carga mediante cron';
$string['limitvideos'] = 'Número de vídeos';
$string['limitvideosdesc'] = 'Número máximo de vídeos a mostrar en bloque';
$string['loading'] = 'Cargando ...';
$string['location'] = 'Ubicación';
$string['managedefaultsforuser'] = 'Gestionar los valores por defecto';
$string['manageseriesforcourse'] = 'Gestionar series';
$string['maxseries'] = 'Número máximo de series';
$string['maxtranscriptionupload'] = 'Número máximo de conjuntos a cargar';
$string['mediatype'] = 'Medios de comunicación';
$string['metadata'] = 'Metadatos de eventos';
$string['metadataseries'] = 'Metadatos de la serie';
$string['missingevent'] = 'Error en la creación del evento';
$string['missinggroup'] = 'Falta un grupo en opencast';
$string['missingseries'] = 'Faltan series en opencast';
$string['morethanonedefaultserieserror'] = 'Este curso tiene más de una serie predeterminada. Póngase en contacto con el administrador del sistema.';
$string['morevideos'] = 'Más vídeos ...';
$string['notificationeventstatus'] = 'Permitir la notificación del estado del proceso del evento';
$string['notificationeventstatusdeletion'] = 'Trabajos de notificación de limpieza después de (Días)';
$string['notificationeventstatusteachers'] = 'Notificar a todos los profesores del curso el estado del proceso del evento';
$string['novideosavailable'] = 'No hay vídeos disponibles';
$string['ocstatecapturing'] = 'Capturando';
$string['ocstatefailed'] = 'Falló';
$string['ocstateneedscutting'] = 'Necesita ser cortado';
$string['ocstateprocessing'] = 'Procesamiento';
$string['ocstatesucceeded'] = 'Con éxito';
$string['offerchunkuploadalternative'] = 'Ofrecer filepicker como alternativa';
$string['opencast:addinstance'] = 'Añadir un nuevo bloque de subida a opencast';
$string['opencast:addvideo'] = 'Añadir un nuevo vídeo al bloque de subida de opencast';
$string['opencast:createseriesforcourse'] = 'Crear una nueva serie en opencast para un curso moodle';
$string['opencast:deleteevent'] = 'Borrar por fin un vídeo (evento) en opencast';
$string['opencast:downloadvideo'] = 'Descargar vídeos procesados';
$string['opencast:importseriesintocourse'] = 'Importar una serie opencast existente a un curso moodle';
$string['opencast:manageseriesforcourse'] = 'Gestionar la serie opencast de un curso moodle';
$string['opencast:myaddinstance'] = 'Añadir un nuevo bloque de subida de opencast al panel de control';
$string['opencast:sharedirectaccessvideolink'] = 'Comparte el enlace de acceso directo al vídeo';
$string['opencast:startworkflow'] = 'Iniciar manualmente flujos de trabajo para vídeos';
$string['opencast:unassignevent'] = 'Desasignar un vídeo del curso, donde se cargó el vídeo.';
$string['opencast:viewunpublishedvideos'] = 'Ver todos los vídeos del servidor de opencast, aunque no estén publicados';
$string['opencaststudiobaseurl'] = 'URL base de Opencast Studio';
$string['opencaststudiocustomsettingsfilename'] = 'Nombre de archivo de configuración personalizada de Studio';
$string['opencaststudionewtab'] = 'Redirigir a Studio en una pestaña nueva';
$string['opencaststudioreturnbtnlabel'] = 'Etiqueta para el botón de retorno de Studio';
$string['opencaststudioreturnurl'] = 'URL de retorno de Studio personalizada';
$string['overview'] = 'Visión general';
$string['owner'] = 'Propietario';
$string['planned'] = 'Planificado';
$string['pluginname'] = 'Vídeos Opencast';
$string['presentation'] = 'Vídeo de presentación';
$string['presenter'] = 'Vídeo del presentador';
$string['publisher'] = 'Editor';
$string['publishtoengage'] = 'Publicar para captar la atención';
$string['readonly_disabled_tooltip_text'] = 'No se puede establecer la opción de sólo lectura cuando es obligatoria.';
$string['recordvideo'] = 'Grabar vídeo';
$string['restoreopencastvideos'] = 'Restaurar vídeos de la instancia de Opencast {$a}';
$string['reuseexistingupload'] = 'Reutilizar cargas existentes';
$string['rightsHolder'] = 'Derechos';
$string['rolename'] = 'Nombre del rol';
$string['scheduledvisibilitystatus'] = 'Cambiar la visibilidad del vídeo a';
$string['scheduledvisibilitytime'] = 'Cambiar la visibilidad del vídeo en';
$string['series'] = 'Series';
$string['series_already_exists'] = 'Este curso ya se ha asignado a una serie.';
$string['seriescreated'] = 'Se han creado las series';
$string['seriesname'] = 'Nombre de las series';
$string['seriesnotcreated'] = 'No se ha podido crear las series';
$string['seriesoverview'] = 'Visión general de las series';
$string['seriesoverviewof'] = 'Vista general de las series de {$a} instancia';
$string['settings'] = 'Vídeos Opencast';
$string['source'] = 'Fuente';
$string['startDate'] = 'Fecha';
$string['startTime'] = 'Tiempo';
$string['startworkflow'] = 'Comenzar flujo de trabajo';
$string['subjects'] = 'Temas';
$string['submit'] = 'Guardar cambios';
$string['termsofuse'] = 'Condiciones de uso';
$string['title'] = 'Título';
$string['tool_requirement_not_fulfilled'] = 'La versión necesaria de tool_opencast no está instalada.';
$string['transcription_flavor_confirm_delete'] = '¿Seguro que desea eliminar este par de opciones de formato?';
$string['transcription_flavor_delete'] = 'Eliminar el par de opciones del sabor';
$string['transcription_flavor_key'] = 'Formato de la clave';
$string['transcription_flavor_value'] = 'Formato del valor';
$string['transcriptionfileextensions'] = 'Extensiones de archivo de transcripción permitidas';
$string['transcriptionflavors'] = 'Tipos de servicios de transcripción (formatos)';
$string['transcriptionworkflow'] = 'Flujo de trabajo para la transcripción (voz a texto)';
$string['type'] = 'Tipo de soporte';
$string['updatemetadata'] = 'Actualizar metadatos para este evento';
$string['upload'] = 'Carga de archivos';
$string['uploadfileextensions'] = 'Extensiones de archivo permitidas';
$string['uploadfilelimit'] = 'Límite de tamaño del vídeo';
$string['uploadingeventfailed'] = 'Error en la creación del evento';
$string['uploadtimeout'] = 'Tiempo de carga de Moodle a Opencast';
$string['uploadworkflow'] = 'Flujo de trabajo a iniciar tras la carga';
$string['video'] = 'Vídeo';
$string['video_already_uploaded'] = 'Vídeo ya subido';
$string['videosavailable'] = 'Vídeos disponibles en este curso';
$string['visibility'] = 'Visibilidad del vídeo';
$string['visibility_group'] = 'Permitir el acceso al vídeo a todos los alumnos pertenecientes a los grupos seleccionados';

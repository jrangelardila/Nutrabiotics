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
 * Strings for component 'enrol_staffmgrallocation', language 'es', version '5.1'.
 *
 * @package     enrol_staffmgrallocation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:disable'] = 'Deshabilitar métodos de matriculación y remover roles';
$string['action:keep'] = 'Mantener usuarios matriculados';
$string['action:unenrol'] = 'Desmatricular usuario del curso';
$string['anongroup'] = 'Ex líder de equipo';
$string['config:autogroup'] = 'Matriculación en grupos automáticos';
$string['config:enrolperiod'] = 'Duración de la matrícula';
$string['config:enrolperiod_help'] = 'Duración predeterminada de la matrícula. Si se establece en cero, la duración de la inscripción será ilimitada.';
$string['config:expiredaction'] = 'Acción de expiración de la matriculación';
$string['config:expiredaction_help'] = 'Esta es la acción a implementar cuando expira la matrícula del usuario si se utilizó el método de matriculación del Líder del equipo';
$string['config:expirynotify'] = 'Notificar antes de que expire la matriculación';
$string['config:expirynotify_help'] = 'Determina si se envían las notificaciones de expiración de las matriculaciones';
$string['config:expirythreshold'] = 'Umbral de notificación';
$string['config:expirythreshold_help'] = '¿Cuánto tiempo antes deben ser notificados los usuarios sobre la expiración de su matrícula?';
$string['config:newenrols'] = 'Permitir nuevas matriculaciones del equipo';
$string['config:newenrols_desc'] = 'Permitir a los usuarios que matriculen a su equipo en nuevos cursos por defecto.';
$string['config:newenrols_help'] = 'Esta configuración determina si el usuario puede matricular a su equipo en este curso';
$string['config:roleid'] = 'Rol por defecto';
$string['config:roleid_help'] = 'Indica qué rol tiene asignado el usuario cuando se utiliza este método de matriculación';
$string['config:status'] = 'Habilitar la matriculación para el líder del equipo';
$string['config:status_help'] = '¿Debe habilitarse o deshabilitarse el método de matriculación por defecto a nivel de curso?';
$string['config:welcome'] = 'Enviar mensaje de bienvenida al curso';
$string['config:welcome_help'] = 'Cuando un usuario se matricula automáticamente en el curso, es posible que se le envíe un correo electrónico de mensaje de bienvenida si esta opción está habilitada.';
$string['enrolstaff'] = 'Matricular al equipo en el curso';
$string['enrolusers'] = 'Matricular usuarios';
$string['expirymessageenrolledbody'] = 'Estimado {$a->user}, Esta es una notificación de que tu matriculación en el curso \'{$a->course}\' expira el {$a->timeend}. Si necesitas ayuda, por favor, contacta a {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de vencimiento de la matrícula';
$string['expirymessageenrollersubject'] = 'Notificación de expiración de la matrícula';
$string['expirynotify:manager'] = 'Sólo líderes de equipo';
$string['expirynotify:no'] = 'No';
$string['expirynotify:user'] = 'Sólo usuarios matriculados';
$string['messageprovider:expiry_notification'] = 'Vencimiento de la matriculación';
$string['mystaff'] = 'Matriculaciones de mi equipo';
$string['pluginname'] = 'Matriculaciones del líder de equipo';
$string['privacy:metadata:enrol_staffmgrallocation_groups:groupid'] = 'ID de grupo';
$string['privacy:metadata:enrol_staffmgrallocation_groups:tenantid'] = 'ID del micrositio';
$string['staffmgrallocation:manage'] = 'Gestionar las instancias de matriculación a nivel de curso';
$string['staffmgrallocation:unenrol'] = 'Desmatricular de un curso';
$string['staffmgrallocation:unenrolself'] = 'Desmatricular a usuarios que se auto-matricularon del curso';
$string['staffmgrtab'] = 'Matriculaciones de líder de equipo';
$string['syncenrolmentstask'] = 'Sincronizar la tarea de matriculación de líder de equipo';
$string['welcome:no'] = 'No';
$string['welcome:subject'] = 'BIenvenido a {$a}';
$string['welcomemessagesent'] = 'Evento mensaje de bienvenida enviado';

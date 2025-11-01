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
 * Strings for component 'offlinequiz_identified', language 'es', version '5.1'.
 *
 * @package     offlinequiz_identified
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['create'] = 'Crear';
$string['enableidentified'] = 'Activar hojas de respuestas pre-rellenadas';
$string['enableidentified_help'] = 'Da al profesor la opción de crear hojas de respuestas pre-rellenadas con nombre y número de identificación. Esto hace que rellenar las hojas sea más sencillo, pero elimina la posibilildad de decidir los grupos de los usuarios en el momento del examen.';
$string['group'] = 'Grupo de cuestionario offline';
$string['identified'] = 'Hojas de respuestas con datos de participantes';
$string['identifiedreport'] = '<p class="alert alert-primary">Por favor, seleccione el grupo de cuestionario offline y el listado de participantes (definido en la <a href="{$a}">Asistencia</a> sección) con el que las hojas de respuestas se pre-rellenarán con nombre y número de identificación de cada participante.<br>Se pueden guardar estas hojas de respuestas pre-rellenadas, para imprimir y dárselas a los estudiantes en vez de las hojas en blanco.<br><br><strong>Nota: </strong>Esto supone que el grupo de cuestionario offline ya está definido en este punto y no se puede asignar directamente cuando tiene lugar el cuestionario offline.
<br>Esta característica está recomendada para grupos de participantes pequeños. Crear las hojas pre-rellenadas puede llevar un tiempo según el número de participantes.</p>';
$string['missinggroup'] = 'Faltan datos para el grupo de cuestionarios offline {$a}';
$string['nogroupmark'] = 'No marcar grupo';
$string['noparticipantsinlist'] = 'No hay participantes en la lista de asistencia seleccionada';
$string['noroles'] = 'No hay roles con el permiso "mod/offlinequiz:attempt" definidos en el contexto de sistema';
$string['notgenerated'] = 'No se han generado los formularios aún. Por favor, vaya a la sección <a href="{$a}">Preparación</a> y cree sus formularios.';
$string['offlinequizidentifiedheading'] = 'Hojas de respuestas con datos de participantes';
$string['onlyifaccess'] = 'Sólo para estudiantes con acceso a este cuestionario offline.';
$string['participants'] = 'Listado de asistencia';
$string['pluginname'] = 'Hojas de respuestas pre-rellenadas';
$string['return'] = 'Volver';

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
 * Strings for component 'enrol_stripepayment', language 'es', version '5.1'.
 *
 * @package     enrol_stripepayment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['canntenrol'] = 'La inscripción está deshabilitada o inactiva';
$string['cost'] = 'Coste de inscripción';
$string['costerror'] = 'El coste de inscripción no es numérico';
$string['couponcode'] = 'Código del Cupón';
$string['currency'] = 'Moneda';
$string['defaultrole'] = 'Asignación de roles por defecto';
$string['enrol'] = 'Inscribir';
$string['enrolenddate'] = 'Fecha de finalización';
$string['enrolenddate_help'] = 'Si está habilitado, los usuarios pueden inscribirse hasta esta fecha solamente.';
$string['enrolenddaterror'] = 'La fecha de finalización de la inscripción no puede ser anterior a la fecha de inicio';
$string['enrolmentnew'] = 'Nueva inscripción';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_help'] = 'La cantidad de tiempo que la inscripción es válida, comenzando desde el momento en que el usuario se inscribe. Si está deshabilitado, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si está habilitado, los usuarios pueden inscribirse a partir de esta fecha unicamente.';
$string['expiredaction'] = 'Acción al vencer la inscripción';
$string['mailadmins'] = 'Notificar administrador';
$string['mailstudents'] = 'Notificar estudiantes';
$string['mailteachers'] = 'Notificar profesores';
$string['maxenrolled'] = 'Cantidad máxima de inscritos';
$string['maxenrolled_help'] = 'Especifica el número máximo de usuarios que pueden inscribirse usando Stripe. Introduzca 0 (cero) para inscripciones ilimitadas.';
$string['maxenrolledreached'] = 'Ha alcanzado el número máximo de usuarios permitidos para realizar el pago con Stripe.';
$string['messageprovider:stripepayment_enrolment'] = 'Proveedor de mensajes';
$string['pluginname'] = 'Pago con Stripe';
$string['publishablekey'] = 'Clave pública de Stripe';
$string['secretkey'] = 'Clave privada de Stripe';
$string['status'] = 'Permitir inscripciones usando Stripe';
$string['status_desc'] = 'Permitir que los usuarios utilicen Stripe para inscribirse en un curso de forma predeterminada.';
$string['stripe:config'] = 'Configurar instancias de registro Stripe';
$string['stripe:manage'] = 'Administrar usuarios inscritos';
$string['stripe:unenrol'] = 'Desinscribir usuarios del curso';
$string['stripe:unenrolself'] = 'Desinscribirme del curso';
$string['stripepayment:config'] = 'Configurar stripepayment';
$string['stripepayment:manage'] = 'Administrar stripepayment';
$string['stripepayment:unenrol'] = 'Anular inscripción Stripe';
$string['stripepayment:unenrolself'] = 'Darse de baja de stripepayment';
$string['unenrolselfconfirm'] = '¿Realmente quieres darte de baja del curso "{$a}"?';

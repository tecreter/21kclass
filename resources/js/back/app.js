require('./bootstrap');

require('popper.js');

import '@lgaitan/pace-progress/dist/pace';
require('perfect-scrollbar');

import 'bootstrap';

require('@coreui/coreui');

import 'datatables.net-bs4';

import 'datatables.net-buttons-bs4';


require( 'datatables.net-buttons/js/buttons.colVis.js' );
require( 'datatables.net-buttons/js/buttons.html5.js' );
require( 'datatables.net-buttons/js/buttons.flash.js' );
require( 'datatables.net-buttons/js/buttons.print.js' );




import Admin from "./admin";
import CourseCategory from "./course/category";
import CourseType from "./course/types";
import Tutor from "./faculty/tutors";
import Order from "./order/order";

window.TocAdmin = {Admin, CourseCategory, CourseType, Tutor, Order};


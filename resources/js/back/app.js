require('./bootstrap');

require('popper.js');

import '@lgaitan/pace-progress/dist/pace';
require('perfect-scrollbar');

import 'bootstrap';

require('@coreui/coreui');

import 'datatables.net-bs4';

import Admin from "./admin";
import CourseCategory from "./course/category";
import CourseType from "./course/types";
import Tutor from "./faculty/tutors";

window.TocAdmin = {Admin, CourseCategory, CourseType, Tutor};


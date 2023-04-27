<?php
include("sessions.php");

session_destroy();
unset($_SESSION['student_name']);

session_unset($_SESSION['student_name']);
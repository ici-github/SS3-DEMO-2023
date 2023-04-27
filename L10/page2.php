<?php
  include("sessions.php");
  include("includes/header.php");
  include("includes/custom_styles.php");
?>
    
</head>
<body>
<?php
  include("includes/menu.php");

  $student_name = $_SESSION['student_name'];


    echo "Session ID: " . session_id();
    echo "<br>";
    echo $student_name; 
?>


</body>
</html>

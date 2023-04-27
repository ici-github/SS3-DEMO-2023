<?php
  include("sessions.php");
  include("includes/header.php");
  include("includes/custom_styles.php");
?>
    
</head>
<body>
<?php
  include("includes/menu.php");

  echo "Session ID: " . session_id();

  $_SESSION['student_name'] = "Joshua Patrick Apog";
?>


</body>
</html>


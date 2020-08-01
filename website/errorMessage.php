<?php
  if($_GET){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        $message = $_GET['message'];
      echo "$message";
      echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
      echo '  <span aria-hidden="true">&times;</span>';
      echo '  </button>';
      echo '</div>';
      //To redirect the page if it is reloaded to login.php
      echo '  <script type="text/javascript">';
      echo '    if (window.performance) {';               //check if performance navigation works or not
      echo '    console.info("window.performance works fine on this browser");';
      echo '    if (performance.navigation.type == 1) {'; // 1 signifies that the page was accessed through a reload or refresh
      $location = $_SESSION['previous_location'];
      var_dump($location);
      echo "    window.location.href=".$location."}}";       //if it was then redirect it to a different page
      echo '  </script>';                                 //visit for more info https://developer.mozilla.org/en-US/docs/Web/API/Performance/navigation
    }
 ?>

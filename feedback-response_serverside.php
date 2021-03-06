<?php
 session_start();
 $name = $_SESSION["name"];
 $email = $_SESSION["email"];
 $participant = $_SESSION["participant"];
 if($_SESSION["participant"] == "guest") {$participant = "Guest";};
 if($_SESSION["participant"] == "vendor") {$participant = "Vendor";};
 if($_SESSION["participant"] == "performer") {$participant = "Performer";};

 $firsttime = $_SESSION["firsttime"];
 if (!isset($_SESSION["firsttime"])){
   $firsttime = "No";
 };
 $comments = $_SESSION["comments"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ithaca Apple Harvest 2017</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/feedback.css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Yrsa" rel="stylesheet">
</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>

  <div id="feedbackresponse">
    <p>Thank you for your comments, <?php echo( htmlspecialchars($name) ); ?>! Your feedback is valuable to us and we'll use all the comments we get to create an even better experience for you at the 36th Annual Apple Harvest Festival in 2018. If you submitted a question, we'll get back to you at <?php echo( htmlspecialchars($email) ); ?> as soon as possible. We hope to see you again!</p>

    <p>Your submission:<br/>
    Name: <?php echo( htmlspecialchars($name) ); ?><br/>
    Email: <?php echo( htmlspecialchars($email) ); ?><br/>
    Participant: <?php echo($participant); ?><br/>
    Is this your first time? <?php echo($firsttime); ?><br/>
    Comments: <?php echo( htmlspecialchars($comments) ); ?></p>

    <img alt="feedback" src="images/feedback.JPG">
  </div>

  <?php
  include "includes/footer.php";
  ?>

  </body>

</html>

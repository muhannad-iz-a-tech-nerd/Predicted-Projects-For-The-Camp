<?php
$q1 = filter_input(INPUT_POST, "q1", FILTER_VALIDATE_INT);
$q2 = filter_input(INPUT_POST, "q2", FILTER_VALIDATE_INT);
$q3 = filter_input(INPUT_POST, "q3", FILTER_VALIDATE_INT);
$q4 = filter_input(INPUT_POST, "q4", FILTER_VALIDATE_INT);
$q5 = filter_input(INPUT_POST, "q5", FILTER_VALIDATE_INT);
$q6 = filter_input(INPUT_POST, "q6", FILTER_VALIDATE_INT);
$q7 = filter_input(INPUT_POST, "q7", FILTER_VALIDATE_INT);
$q8 = filter_input(INPUT_POST, "q8", FILTER_VALIDATE_INT);
$q9 = filter_input(INPUT_POST, "q9", FILTER_VALIDATE_INT);
$q10 = filter_input(INPUT_POST, "q10", FILTER_VALIDATE_INT);

$score = ($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10)/10;
if($score < 17){
  $style = "Visual";
  $style_info = "Visual learners learn the most efficiently when information is presented in images, diagrams, and drawings.
 These types of learners can easily remember people’s faces, places, and shapes.";
} elseif($score < 26){
  $style = "Auditory";
  $style_info = "These people can easily remember the words that they heard. Also known as aural learners, these types of learners learn best when listening to lectures, listening to audio recordings, or talking aloud to themselves. These people can easily remember the words that they heard.";
} elseif($score < 34){
  $style = "Reading and writing";
  $style_info = "Reading and writing learners learn best when information is presented as a book, essay, or a worksheet with words. These learners can easily remember what they read or wrote.";
} else{
  $style = "Kinesthetic";
  $style_info = "Kinesthetic means “the sensory perception of movement.” Also known as tactical learners, kinesthetic learners learn best when doing movement of some kind, such as experiments, testing, and physical activities. Kinesthetic means “the sensory perception of movement.”";
}

// return $score;
?>

<!-- var_dump($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
print_r($_POST); -->

<!DOCTYPE html>
<body vlink="black">
  <div class="nav">
    <div style="text-align: center">
      <div class="topnav"> 
        <p style="font-family: verdana; float: left; text-align: left;"><a href="../index.html">Home</a>

<html>
  <head>
    <body style =  "background: url(https://static.vecteezy.com/system/resources/previews/008/169/402/non_2x/abstract-shapes-and-line-in-nude-pastel-colors-neutral-background-in-minimalist-style-contemporary-illustration-free-vector.jpg)">
</body>
    <link rel="stylesheet" href="quizStyle.css">
    <title>Quiz Results</title>
  </head>
  <body>
    <h1>Your learning style is: <span><?php echo $style ?></span>!</h1>
    <br><br>
  <center><h3><span><?php echo $style_info ?></span></h3></center>
    <br><br><br>
    <center><p>Go to the learning zone for you!</p></center>
  <button class="button" type="button" onclick="location.href = '../visual.html';">Visual</button>
  <button class="button" type="button" onclick="location.href = '../auditory.html';">Auditory</button><br>
  <button class="button" type="button" onclick="location.href = '../reading.html';">Reading and writing</button>
  <button class="button" type="button" onclick="location.href = '../kinesthetic.html';">Kinesthetic</button>
    <br><br><br><br><br><br>
  <p>Click here to learn more about other learning styles!</p>
  <button class="button" type="button" onclick="location.href = './learningTypes.html';">Learn More!</button>
  </body>
</html>



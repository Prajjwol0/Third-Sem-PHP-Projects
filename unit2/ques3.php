<!-- 2.3 Use elseif to grade a score: A (≥90), B (≥75), C (≥60), F (else). -->

<?php
$score=8;
if($score>=90){
    echo "Grade A";
}
elseif($score>=75){
    echo "Grade B";
}
elseif($score>=60){
    echo"Grade C";
}
else{
    echo"Grade F";
}
?>
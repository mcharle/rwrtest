<?php
if (isset($_POST['submitButton'])) { 
// The user clicked submit 
// Put the contents of the text into the file 
file_put_contents('./data.txt', $_POST['myInputName'], FILE_APPEND); 
// ./data.txt: the text file in which the data will be stored 
// $_POST['myInputName']: What the user put in the form field named "myInputName" 
// FILE_APPEND: This tells the function to append to the file and not to overwrite it. 
} 
?>

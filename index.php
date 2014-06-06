<html>
<body>
<h1>
<?php
echo "I'm a load balanced website! See how my ip address changes. ";
echo gethostbyname(trim(`hostname`));
?>
</h1>
</body>
</html>

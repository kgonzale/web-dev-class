<!DOCTYPE html>
<html>
    <body>
       <h1> <?php echo htmlspecialchars($_POST['fName']); ?>, your concern will be addressed. Please check your email: <?php echo ($_POST['email']); ?>, within 5 days.</h1>
    </body>
</html> 

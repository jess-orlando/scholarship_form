<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Form</title>
</head>
<body>
    <?php
        $firstName= $_POST["fName"];
        $lastName = $_POST["lName"];

        // definition of the displayRequired() function
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\" is required.<br/>";
        }

        // definition of the validateInput() function
        function validateInput($data, $fieldName) {
            global $errorCount;
            if(empty($data)) {
                displayRequired($fieldName);
                ++$errorCount;
                $retval = "";
            } else {
                $retval = trim($data);
            }
            return $retval;
        }

        $errorCount = 0;
        $firstName= validateInput($_POST["fName"], "First Name");
        $lastName = validateInput($_POST["lName"], "Last Name");

        if($errorCount > 0) {
            echo "Please use the BACK button on the browser to re-enter the data!<br/>";
        } else {
            echo "<h3>Thank you for filling out the scholarship form, $firstName $lastName!</h3>";
        }

    ?>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>

	<title>Checkboxes Example</title>
	<meta charset='utf-8'>

</head>
<body>

	<form method='POST' action='process.php'>

        <fieldgroup>
            <h2>Select which day you're available</h2>
            <label><input type='radio' name='daysAvailable' value='mon'> Mon</label><br>
            <label><input type='radio' name='daysAvailable' value='tue'> Tue</label><br>
            <label><input type='radio' name='daysAvailable' value='wed'> Wed</label><br>
            <label><input type='radio' name='daysAvailable' value='thu'> Thu</label><br>
            <label><input type='radio' name='daysAvailable' value='fri'> Fri</label><br>
        </fieldgroup>

        <input type='submit'>

    </form>

</body>
</html>

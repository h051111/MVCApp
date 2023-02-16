<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="mainstyle.css"></link>
    <title>Users</title>
</head>

<body>
    <div>
        <h1>Users</h1>
        <table border =\"1\" style='border-collapse: collapse' class="usertable">  <!--Create a table looping over the $users variable that the controller set-->
            <th>
                Name
            </th>
            <?php for ($i=0; $i < count($users); $i++) { ?>
            <tr>
                <td>
                <?php echo $users[$i]->getName(); ?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <button onclick="location.href='/'" type="button">
            Back</button>
    </div>
</body>

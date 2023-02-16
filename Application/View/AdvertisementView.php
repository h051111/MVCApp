<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="mainstyle.css"></link>
    <title>Advertisements</title>
</head>

<body>
    <div>
        <h1>Advertisements</h1>
        <table border =\"1\" style='border-collapse: collapse'>  <!--Create a table looping over the $advertisements variable that the controller set-->
            <th>
                Name
            </th>
            <th>
                Title
            </th>
            <?php for ($i=0; $i < count($advertisements); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $advertisements[$i]->getUsername(); ?>
                    </td>
                    <td>
                        <?php echo $advertisements[$i]->getTitle(); ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <button onclick="location.href='/'" type="button">
            Back</button>
    </div>
</body>

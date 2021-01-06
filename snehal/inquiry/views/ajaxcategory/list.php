    <?php include_once("../../header.php"); ?>

    <div class="container">
        <h2>Category List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Categoryname</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $filedname => $row):?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
    <?php include_once("../../footer.php"); ?>
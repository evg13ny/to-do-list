<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>To-do list</h1>
        <form action="pages/add.php" method="POST">
            <input type="text" name="task" id="task" placeholder="Add the task" class="form-control">
            <button type="submit" name="senfTask" class="btn btn-success">Add</button>
        </form>

        <?php

        require 'pages/configDB.php';

        echo '<ul>';

        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>' . $row->task . '</b><a href="pages/delete.php?id=' . $row->id . '"><button>Delete</button></a></li>';
        }

        echo '</ul>';

        ?>

    </div>
</body>

</html>
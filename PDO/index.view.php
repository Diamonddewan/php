<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP PDO</title>
</head>
<body>
	<ul>
    <?php foreach ($result as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li> 
    <?php endforeach; ?> 
    </ul>
</body>
</html>
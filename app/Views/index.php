<?php
/** @var \App\Components\Content $content */
?>

<!DOCTYPE html>
<html lang="en">
<?php include require __DIR__ . '/../Views/partials/head.php'; ?>
<body>
<?php include require __DIR__ . '/../Views/partials/menu.php'; ?>
<section><?php echo $content->person->description; ?></section>
</body>
<?php include require __DIR__ . '/../Views/partials/footer.php'; ?>
</html>

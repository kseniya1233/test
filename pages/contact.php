<?php
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $data = "$name | $email | $message | " . date('Y-m-d H:i:s') . PHP_EOL;
    file_put_contents('messages.txt', $data, FILE_APPEND);
    $success = 'Сообщение отправлено!';
}
?>
<?php include '../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>

<?php if ($success): ?>
    <p style="color: green; font-weight: bold;"><?= $success ?></p>
<?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>

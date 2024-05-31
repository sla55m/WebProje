<?php
// Kullanıcı bilgilerini al
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifre boş mu kontrol et
if (empty($username) || empty($password)) {
    header("Location: login.html");
    exit();
}

// Kullanıcı adının e-posta formatında olup olmadığını kontrol et
if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header("Location: login.html");
    exit();
}

// Doğru kullanıcı bilgilerini belirle
$correct_username = 'g231210558@sakarya.edu.tr';
$correct_password = 'g231210558';

// Kullanıcı bilgilerini kontrol et
if ($username === $correct_username && $password === $correct_password) {
    header("Location: welcome.php?username=" . urlencode(explode('@', $username)[0]));
    exit();
} else {
    header("Location: login.html");
    exit();
}
?>
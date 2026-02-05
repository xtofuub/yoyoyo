<?php
declare(strict_types=1);
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}
$username = isset($_POST['Login']) ? trim((string)$_POST['Login']) : '';
$password = isset($_POST['Password']) ? (string)$_POST['Password'] : '';
if ($username === '' || $password === '') {
    http_response_code(400);
    exit;
}
$webhook = getenv('DISCORD_WEBHOOK_URL') ?: '';
if ($webhook !== '') {
    $payload = json_encode(['content' => 'Login form submitted']);
    $ch = curl_init($webhook);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5,
    ]);
    curl_exec($ch);
    curl_close($ch);
}
header('Location: https://tyk.inschool.fi');
exit;

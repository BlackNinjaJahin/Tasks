<?php
interface LoggerInterface {
    public function log($message);
}

class FileLogger implements LoggerInterface {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function log($message) {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}

class DatabaseLogger implements LoggerInterface {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function log($message) {
        $stmt = $this->pdo->prepare("INSERT INTO logs (message) VALUES (:message)");
        $stmt->execute(['message' => $message]);
    }
}

// Example usage of FileLogger
$fileLogger = new FileLogger('app.log');
$fileLogger->log('This is a log message to a file.');

// Example usage of DatabaseLogger
$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'username', 'password');
$databaseLogger = new DatabaseLogger($pdo);
$databaseLogger->log('This is a log message to a database.');
?>

<?php
setcookie(
    "user_style", 
    "dark_mode", 
    time() + 3600, 
    "/", 
    "", 
    false, 
    true
);

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['send_login'])) {
    echo "POST request";
} 
elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['email'])) {
    echo "GET request";
}
?>

<form action="" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="send_login">Send</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['send_calc'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $Calculate = 0;

    if ($operation == '+') {
        $Calculate = $num1 + $num2;
    } 
    elseif ($operation == '-') {
        $Calculate = $num1 - $num2;
    } 
    elseif ($operation == '*') {
        $Calculate = $num1 * $num2;
    } 
    elseif ($operation == '/') {
        if ($num2 != 0) {
            $Calculate = $num1 / $num2;
        } else {
            $Calculate = "Cannot divide by zero";
        }
    }

    echo "Result: " . $Calculate;
}
?>

<form action="" method="POST">
    <label>Number 1:</label>
    <input type="number" name="num1" required><br><br>

    <label>Operation:</label>
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <label>Number 2:</label>
    <input type="number" name="num2" required><br><br>

    <button type="submit" name="send_calc">Calculate</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add_task'])) {
    $task = $_POST['task'];

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = array();
    }

    $_SESSION['tasks'][] = $task;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter']++;
    }
}

echo "Page Views: " . ($_SESSION['counter'] ?? 1) . "<br><br>";

if (isset($_SESSION['tasks'])) {
    echo "<ul>";
    foreach ($_SESSION['tasks'] as $single_task) {
        echo "<li>" . $single_task . "</li>";
    }
    echo "</ul>";
}
?>

<form action="" method="POST">
    <label>New Task:</label>
    <input type="text" name="task" required>
    <button type="submit" name="add_task">Add Task</button>
</form>

<hr>

<?php
// 2. Retrieve Cookie
if (isset($_COOKIE['user_style'])) {
    echo "Cookie Value: " . $_COOKIE['user_style'] . "<br>";
} else {
    echo "Cookie is not set<br>";
}
?>

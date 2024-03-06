<?php
require_once('model/database.php');
require_once('model/todoitems_db.php');

// Filter input to prevent XSS and SQL Injection
$itemNum = filter_input(INPUT_POST, 'itemNum', FILTER_VALIDATE_INT);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);

// Determine the action to take, defaulting to 'list_todo_items' if none specified
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?: filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ?: 'list_todo_items';

switch ($action) {
    case "add_todo_item":
        if (!empty($title) && !empty($description)) {
            add_todo_item($title, $description);
            header("Location: .");
            exit();
        } else {
            $error = "Invalid ToDo List item data. Check all fields and try again.";
            include("view/error.php");
            exit();
        }
        break;
    case "remove_todo_item":
        if ($itemNum) {
            delete_todo_item($itemNum);
            header("Location: .");
            exit();
        } else {
            $error = "Missing or incorrect ToDo List item ID.";
            include('view/error.php');
            exit();
        }
        break;
    default:
        $todoItems = get_todo_items();
        include('view/todoitems_list.php');
        // No break needed after default as it's the last case
}

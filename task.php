<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
    <style>
        body {
            margin-top: 20px;
        }

        .task-card {
            border: 1px solid #ececec;
            padding: 20px;
            border-radius: 5px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .task {
            color: #888;
        }

        .task-done {
            text-decoration: line-through;
            color: #888;
        }

        .task-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        ul {
            padding-left: 20px;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="task-card">
            <h1>To-Do App</h1>

            <!-- Add Task Form -->
            <form method="POST">
                <div class="row">
                    <div class="column column-75">
                        <input type="text" name="task" placeholder="Enter a new task" required>
                    </div>
                    <div class="column column-25">
                        <button type="submit" class="button-primary">Add Task</button>
                    </div>
                </div>
            </form>

            <!-- Task List -->
            <h2>Task List</h2>
            <ul style="list-style: none; padding: 0;">
                
            </ul>

        </div>
    </div>
</body>

</html>
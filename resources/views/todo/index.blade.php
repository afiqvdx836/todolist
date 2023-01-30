<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('todolist/styles.css') }}">
  <title>Todo List App</title>
</head>

<body>
  <div class="wrapper">
    <div class="task-input">
      <ion-icon name="create-outline"></ion-icon>
      <input type="text" placeholder="Add a New Task + Enter">
    </div>
    <div class="controls">
      <div class="filters">
        <span class="active" id="all">All</span>
        <span id="pending">Pending</span>
        <span id="completed">Completed</span>
      </div>
      <button class="clear-btn">Clear All</button>
    </div>
    <ul class="task-box"></ul>
  </div>

<script  src="{{ asset('todolist/script.js') }}"></script>
</body>

</html>
<?php require 'app/views/partials/header.view.php';?>
    <h1>All Users</h1>

    <legend>fetching name from the database</legend>
    <ul>
      <?php foreach ($users as $user): ?>
        <li><?=$user->name?></li>
      <?php endforeach?>
    </ul>
    <h2>Submit you form </h2>
    <form action="/users" method="post">
      <label for="">Name</label>
      <input type="text" name="name" placeholder="inset name here...">
      <button type="Submit">Submit</button>
    </form>


<?php require 'app/views/partials/footer.view.php';?>

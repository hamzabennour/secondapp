<h1>Tasks</h1>

<p>Today is: <?= $today ?></p>

<p>Number of Tasks <?= count($tasks) ?></p>

<!-- TODO: List of Tasks -->
<table class="table table-hover">
<thead>
  <tr>
  <th>ID </th>
  <th>task </th>
  <th>done </th>
  </tr>
</thead>
  <?php foreach( $tasks as $task){ ?>
    <tr>
    <td><?=$task->id?></td>
    <td><?=$task->task?></td>
    <td><?=$task->done?></td>
    </tr>
  <?php } ?>
</table>

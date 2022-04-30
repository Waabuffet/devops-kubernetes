<?php 
$_GET['title'] = 'Results';
$_GET['session_check'] = 'auth';
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/layout/header.php'; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Candidates</th>
      <th scope="col">Votes</th>
    </tr>
  </thead>
  <tbody>
    <?php include $path.'/API/get-votes.php'; ?>
  </tbody>
</table>

<small><a href="vote.php">Back to voting</a></small>

<?php include $path.'/layout/footer.php'; ?>
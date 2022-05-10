<?php 
$_GET['title'] = 'Vote';
$_GET['session_check'] = 'auth';
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/layout/header.php'; 
include $path.'/API/checkIfVoted.php'; 
?>

<form action="../API/add-vote.php" method="POST">
  <div class="form-group">
    <label for="candidates">Candidate</label>
    <select class="form-control" id="candidates" name="candidate_id" required <?php echo ($hasVoted)? 'disabled' : ''; ?>>
      <option value='0' selected disabled>Select Candidate</option>
      <?php if(!$hasVoted){include $path.'/API/getCandidates.php';} ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary" <?php echo ($hasVoted)? 'disabled' : ''; ?>>Vote</button>
  <?php if($hasVoted){echo "&nbsp; <small>You have already voted</small> &nbsp;";} ?>
  <small><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>/results">Check voting results</a></small>
</form>

<?php include $path.'/layout/footer.php'; ?>
<?php 
  include('lib/session_mgr.php'); include('lib/Customer.php');
  $user = new Customer($_REQUEST['identifier'], $_SESSION['PASSWORD']);
  if ($user->is_valid_user) {
?>
<div class="interface-position vertical-center">
  <table class="customerInterface" border="0" cellpadding="0" cellspacing="0" width="700px" align="center">
    <tr>
      <td align="center">
        <div id="submit-btn" class="btn btn-primary">
          View My Flights
          </div>
      </td>
      <td align="center">
        <div id="submit-btn" class="btn btn-primary">
          Purchase Tickets
          </div>
      </td>
    </tr>
    <tr>
      <td align="center">
        <div id="submit-btn" class="btn btn-primary">
          Search For Flights
          </div>
      </td>
      <td align="center">
        <div id="submit-btn" class="btn btn-primary">
          Logout
          </div>
      </td>
    </tr>
  </table>
</div>
<?php
  } else {
?>
<div class="interface-position vertical-center">
Invalid user session. Try relogging.
</div>
<?php } ?>
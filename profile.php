

<?php

    $page_title = "User Authentication - Profile";
    include_once 'partials/header.php';
    include_once 'partials/parseProfile.php';

 ?>

<div class="container">

    <div >
        <h1>Profile</h1>
        <?php if (!isset($_SESSION['username'])): ?>
          <p class="lead">  You are not authorized to view this page <a href="login.php">Login</a>

          Not Yet a Member? <a href="signup.php">Signup</a></p>

        <?php else: ?>
            <section class="col col-lg-7">
              <table class="table table-inverse table-bordered table-hover table-sucess">
                  <tr>
                    <th>Username:</th><td><?php if(isset($username)) echo $username; ?></td>
                  </tr>
                  <tr>
                    <th>Email:</th><td><?php if(isset($email)) echo $email; ?></td>
                  </tr>
                  <tr class="table bg-info">
                    <th></th><td><a href="edit-profile.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>">
                        <span class="glyphicon glyphicon-edit"></span>Edit Profile</a></td></tr>
                    </td>
                  </tr>

              </table>
            </section>
          <?php endif ?>
    </div>
  </div>
<?php include_once 'partials/footer.php'; ?>

</body>
</html>

















</div>

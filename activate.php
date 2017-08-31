<?php
$page_title = "User Authentication - Account Activation";
include_once 'partials/header.php';
include_once 'partials/parseSignup.php';
?>

<div class="container">
    <div class="flag">
        <h1>User Authentication System</h1>
        <?php if(isset($result)) echo $result; ?>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>
</body>
</html>

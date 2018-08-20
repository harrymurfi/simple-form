<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <div>Username: <?= $this->session->userdata['username'] ?></div>
    <div>Email: <?= $this->session->userdata['email'] ?></div>
    <div>
      Photo:<br>
      <img src="<?= '../uploads/' . $this->session->userdata['username'] . '.jpg' ?>">
    </div>
    <div><?= anchor('homepage/logout', 'Sign Out') ?></div>
</body>
</html>
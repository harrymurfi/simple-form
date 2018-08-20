<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
    <?php echo validation_errors(); ?>  
    <?php echo form_open_multipart('registration'); ?> 
    <label>Username</label><br>
    <input type="text" name="username" size="20" maxlength="20"/><br>
    <label>Email</label><br>
    <input type="email" name="email" size="20" maxlength="50"/><br>
    <label>Password</label><br>
    <input type="password" name="password" size="20" maxlength="30"/><br>
    <label>Profile Picture</label><br>
    <input type="file" name="photo" size="20"/><br>
    <input type="submit" value="Submit">
    </form>
    <div><?= anchor('login', 'Back to login') ?></div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <?php echo validation_errors(); ?>  
    <?php echo form_open('login'); ?> 
    <label>Name</label>
    <input type="text" name="username" size="20"/>
    <label>Password</label>
    <input type="text" name="password" size="20"/>
    <input type="submit" value="Sign In">
    <?php 
        $this->load->helper('url');
        echo anchor('registration', 'Sign Up');
    ?>
    </form>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
�����������:
<?php echo form_open('auth'); ?>
<label for="Login">�����: </label>
<input type="text" name="login" value="<?php echo set_value('login'); ?>" placeholder = "������� �����"/>
<?php echo form_error('login'); ?></br>

<label for="Pass">������: </label>
<input type="password" name="pass" value="<?php echo set_value('pass'); ?>" placeholder = "������� ������"/>
<?php echo form_error('pass'); ?></br>

<label for="Typeenter">��� �����: </label>
<select name="typeenter">
<option value="user" selected="selected">������</option>
<option value="partner">������</option>
<option value="compamy">��������</option>
</select>
<div><input type="submit" value="����" /></div>
</form>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
Авторизация:
<?php echo form_open('auth'); ?>
<label for="Login">Логин: </label>
<input type="text" name="login" value="<?php echo set_value('login'); ?>" placeholder = "Введите логин"/>
<?php echo form_error('login'); ?></br>

<label for="Pass">Пароль: </label>
<input type="password" name="pass" value="<?php echo set_value('pass'); ?>" placeholder = "Введите пароль"/>
<?php echo form_error('pass'); ?></br>

<label for="Typeenter">Тип входа: </label>
<select name="typeenter">
<option value="user" selected="selected">Клиент</option>
<option value="partner">Парнет</option>
<option value="compamy">Компания</option>
</select>
<div><input type="submit" value="Вход" /></div>
</form>
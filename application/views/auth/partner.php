<?php
defined('BASEPATH') OR exit('No direct script access allowed');
form_open('registration/regpartner/reg');
?>
<label for="Login">Логин</label>
<input type="text" name="login" value="<?php echo set_value('login'); ?>" placeholder = "Введите ваш логин"/>
<?php echo form_error('login'); ?></br>

<label for="FIO">ФИО</label>
<input type="text" name="fio" value="<?php echo set_value('fio'); ?>" placeholder = "Введите ваше ФИО"/>
<?php echo form_error('fio'); ?></br>

<label for="Phone">Телефон</label>
<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder = "Введите ваш телефон"/>
<?php echo form_error('phone'); ?></br>

<label for="Email">E-mail</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder = "Введите ваш E-Mail"/>
<?php echo form_error('email'); ?></br>

<input type="checkbox" name="validcheck" />Я согласен(на) со всеми условиями.</br>
<div>Ознакомиться с условиями можно здесь <?php anchor('#', 'здесь'); ?> .</div>
<div><input type="submit" value="Зарегистрироваться" /></div>
</form>
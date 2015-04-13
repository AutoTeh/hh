<?php
defined('BASEPATH') OR exit('No direct script access allowed');
form_open('registration/regcompany/reg');
?>
<label for="Login">Логин</label>
<input type="text" name="login" value="<?php echo set_value('login'); ?>" placeholder = "Введите логин"/>
<?php echo form_error('login'); ?></br>

<label for="INN">ИНН компании</label>
<input type="text" name="inn" value="<?php echo set_value('inn'); ?>" placeholder = "Введите ИНН"/>
<?php echo form_error('inn'); ?></br>

<label for="Address">Почтовый адрес компании</label>
<input type="text" name="address" value="<?php echo set_value('address'); ?>" placeholder = "Введите почтовый адрес"/>
<?php echo form_error('address'); ?></br>

<label for="Uraddress">Юр. адрес компании</label>
<input type="text" name="uraddress" value="<?php echo set_value('uraddress'); ?>" placeholder = "Введите юридический адрес"/>
<?php echo form_error('uraddress'); ?></br>

<label for="FIO">ФИО руководителя</label>
<input type="text" name="fio" value="<?php echo set_value('fio'); ?>" placeholder = "Введите ФИО руководителя"/>
<?php echo form_error('fio'); ?></br>

<label for="Phone">Телефон</label>
<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder = "Введите контактный телефон"/>
<?php echo form_error('phone'); ?></br>

<label for="Email">E-mail</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder = "Введите E-Mail"/>
<?php echo form_error('email'); ?></br>

<input type="checkbox" name="validcheck" />Я согласен(на) со всеми условиями.</br>
<div>Ознакомиться с условиями можно здесь <?php anchor('#', 'здесь'); ?> .</div>
<div><input type="submit" value="Зарегистрироваться" /></div>
</form>
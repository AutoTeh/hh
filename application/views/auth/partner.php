<?php
defined('BASEPATH') OR exit('No direct script access allowed');
form_open('registration/regpartner/reg');
?>
<label for="Login">�����</label>
<input type="text" name="login" value="<?php echo set_value('login'); ?>" placeholder = "������� ��� �����"/>
<?php echo form_error('login'); ?></br>

<label for="FIO">���</label>
<input type="text" name="fio" value="<?php echo set_value('fio'); ?>" placeholder = "������� ���� ���"/>
<?php echo form_error('fio'); ?></br>

<label for="Phone">�������</label>
<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder = "������� ��� �������"/>
<?php echo form_error('phone'); ?></br>

<label for="Email">E-mail</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder = "������� ��� E-Mail"/>
<?php echo form_error('email'); ?></br>

<input type="checkbox" name="validcheck" />� ��������(��) �� ����� ���������.</br>
<div>������������ � ��������� ����� ����� <?php anchor('#', '�����'); ?> .</div>
<div><input type="submit" value="������������������" /></div>
</form>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
form_open('registration/regcompany/reg');
?>
<label for="Login">�����</label>
<input type="text" name="login" value="<?php echo set_value('login'); ?>" placeholder = "������� �����"/>
<?php echo form_error('login'); ?></br>

<label for="INN">��� ��������</label>
<input type="text" name="inn" value="<?php echo set_value('inn'); ?>" placeholder = "������� ���"/>
<?php echo form_error('inn'); ?></br>

<label for="Address">�������� ����� ��������</label>
<input type="text" name="address" value="<?php echo set_value('address'); ?>" placeholder = "������� �������� �����"/>
<?php echo form_error('address'); ?></br>

<label for="Uraddress">��. ����� ��������</label>
<input type="text" name="uraddress" value="<?php echo set_value('uraddress'); ?>" placeholder = "������� ����������� �����"/>
<?php echo form_error('uraddress'); ?></br>

<label for="FIO">��� ������������</label>
<input type="text" name="fio" value="<?php echo set_value('fio'); ?>" placeholder = "������� ��� ������������"/>
<?php echo form_error('fio'); ?></br>

<label for="Phone">�������</label>
<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" placeholder = "������� ���������� �������"/>
<?php echo form_error('phone'); ?></br>

<label for="Email">E-mail</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder = "������� E-Mail"/>
<?php echo form_error('email'); ?></br>

<input type="checkbox" name="validcheck" />� ��������(��) �� ����� ���������.</br>
<div>������������ � ��������� ����� ����� <?php anchor('#', '�����'); ?> .</div>
<div><input type="submit" value="������������������" /></div>
</form>
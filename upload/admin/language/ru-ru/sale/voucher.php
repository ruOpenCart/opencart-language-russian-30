<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       admin/language/ru-ru/mail/sale/voucher.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']     = 'Подарочные сертификаты';

// Text
$_['text_success']      = 'Успешно: Вы изменили сертификаты!';
$_['text_list']         = 'Список подарочных сертификатов';
$_['text_add']          = 'Добавить подарочный сертификат';
$_['text_edit']         = 'Редактировать подарочный сертификат';

// Column
$_['column_name']       = 'Название сертификата';
$_['column_code']       = 'Код';
$_['column_from']       = 'От';
$_['column_to']         = 'Для';
$_['column_theme']      = 'Темя';
$_['column_amount']     = 'Сумма';
$_['column_status']     = 'Статус';
$_['column_order_id']   = 'Номер заказа';
$_['column_customer']   = 'Клиент';
$_['column_date_added'] = 'Дата добавления';
$_['column_action']     = 'Действие';

// Entry
$_['entry_code']        = 'Код';
$_['entry_from_name']   = 'Имя отправителя';
$_['entry_from_email']  = 'Эл. почта отправителя';
$_['entry_to_name']     = 'Имя получателя';
$_['entry_to_email']    = 'Эл. почта получателя';
$_['entry_theme']       = 'Тема';
$_['entry_message']     = 'Сообщение';
$_['entry_amount']      = 'Сумма';
$_['entry_status']      = 'Статус';

// Help
$_['help_code']         = 'Код, который клиент вводит для активации сертификата.';

// Error
$_['error_permission']  = 'Предупреждение: У вас нет разрешения изменять сертификаты!';
$_['error_exists']      = 'Предупреждение: Код сертификата уже используется!';
$_['error_code']        = 'Код должен быть от 3 до 10 символов!';
$_['error_to_name']     = 'Имя получателя должно быть от 1 до 64 символов!';
$_['error_from_name']   = 'Ваше имя должно быть от 1 до 64 символов!';
$_['error_email']       = 'Адрес электронной почты не является действительным!';
$_['error_amount']      = 'Сумма должна быть больше или равна 1!';
$_['error_order']       = 'Предупреждение: Этот сертификат нельзя удалить, поскольку он является частью <a href="%s">заказа</a>!';

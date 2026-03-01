<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/payment/klarna_invoice.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Text
$_['text_title']				= 'Klarna Invoice — оплата в течение 14 дней';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Для оформления заказа через Klarna Invoice требуется дополнительная информация.';
$_['text_male']					= 'Мужской';
$_['text_female']				= 'Женский';
$_['text_year']					= 'Год';
$_['text_month']				= 'Месяц';
$_['text_day']					= 'День';
$_['text_comment']				= 'Номер счёта Klarna: %s. ' . "\n" . '%s/%s: %.4f';
$_['text_trems_description']    = 'Направляя данные, необходимые для оформления покупки в кредит и проверки личности в Klarna, я даю согласие. Своё <a href="https://www.klarna.com/privacy-policy/" target="_blank">согласие</a> я могу отозвать в любое время.';

// Entry
$_['entry_gender']				= 'Пол';
$_['entry_pno']					= 'Личный номер';
$_['entry_dob']					= 'Дата рождения';
$_['entry_phone_no']			= 'Номер телефона';
$_['entry_street']				= 'Улица';
$_['entry_house_no']			= '№ дома';
$_['entry_house_ext']			= 'Корпус';
$_['entry_company']				= 'ИНН / регистрационный номер компании';

// Help
$_['help_pno']					= 'Укажите Ваш идентификационный номер.';
$_['help_phone_no']				= 'Укажите номер телефона.';
$_['help_street']				= 'Доставка возможна только на адрес, указанный при оплате Klarna.';
$_['help_house_no']				= 'Укажите номер дома.';
$_['help_house_ext']			= 'Укажите корпус/строение (например: А, Б, В).';
$_['help_company']				= 'Укажите ИНН или регистрационный номер компании.';

// Error
$_['error_deu_terms']			= 'Необходимо принять политику конфиденциальности Klarna.';
$_['error_address_match']		= 'Адрес доставки и плательщика должны совпадать для оплаты Klarna Invoice.';
$_['error_network']				= 'Ошибка при подключении к Klarna. Попробуйте позже.';

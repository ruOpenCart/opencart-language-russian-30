<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/payment/firstdata_remote.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Text
$_['text_title']				= 'Кредитная или дебетовая карта';
$_['text_credit_card']			= 'Данные кредитной карты';
$_['text_wait']					= 'Пожалуйста, подождите!';
$_['text_store_card']           = 'Сохранить данные карты?';

// Entry
$_['entry_cc_number']			= 'Номер карты';
$_['entry_cc_name']				= 'Имя владельца карты';
$_['entry_cc_expire_date']		= 'Срок действия карты';
$_['entry_cc_cvv2']				= 'Код безопасности карты (CVV2)';

// Help
$_['help_start_date']			= '(если указано)';
$_['help_issue']				= '(только для карт Maestro и Solo)';

// Text
$_['text_result']				= 'Результат: ';
$_['text_approval_code']		= 'Код одобрения: ';
$_['text_reference_number']		= 'Ссылка: ';
$_['text_card_number_ref']		= 'Последние 4 цифры карты: xxxx ';
$_['text_card_brand']			= 'Платёжная система: ';
$_['text_response_code']		= 'Код ответа: ';
$_['text_fault']				= 'Сообщение об ошибке: ';
$_['text_error']				= 'Ошибка: ';
$_['text_avs']					= 'Проверка адреса: ';
$_['text_address_ppx']			= 'Адрес не предоставлен или не проверен банком-эмитентом';
$_['text_address_yyy']			= 'Банк подтвердил совпадение улицы и индекса с записями';
$_['text_address_yna']			= 'Банк подтвердил улицу, но индекс не совпадает';
$_['text_address_nyz']			= 'Банк подтвердил индекс, но улица не совпадает';
$_['text_address_nnn']			= 'Улица и индекс не совпадают с записями банка';
$_['text_address_ypx']			= 'Банк подтвердил улицу. Индекс не проверялся';
$_['text_address_pyx']			= 'Банк подтвердил индекс. Улица не проверялась';
$_['text_address_xxu']			= 'Банк не проверял данные AVS';
$_['text_card_code_verify']		= 'Код безопасности: ';
$_['text_card_code_m']			= 'Код безопасности совпадает';
$_['text_card_code_n']			= 'Код безопасности не совпадает';
$_['text_card_code_p']			= 'Не обработано';
$_['text_card_code_s']			= 'Продавец указал, что кода нет на карте';
$_['text_card_code_u']			= 'Банк не сертифицирован и/или не предоставил ключи шифрования';
$_['text_card_code_x']			= 'Нет ответа от платёжной системы';
$_['text_card_code_blank']		= 'Пустой ответ означает, что код не был отправлен.';
$_['text_card_accepted']		= 'Принимаемые карты: ';
$_['text_card_type_m']			= 'Mastercard';
$_['text_card_type_v']			= 'Visa (Credit/Debit/Electron/Delta)';
$_['text_card_type_c']			= 'Diners';
$_['text_card_type_a']			= 'American Express';
$_['text_card_type_ma']			= 'Maestro';
$_['text_card_new']				= 'Новая карта';
$_['text_response_proc_code']	= 'Код процессора: ';
$_['text_response_ref']			= 'Номер ссылки: ';

// Error
$_['error_card_number']			= 'Проверьте корректность номера карты';
$_['error_card_name']			= 'Проверьте корректность имени владельца карты';
$_['error_card_cvv']			= 'Проверьте корректность CVV2';
$_['error_failed']				= 'Невозможно обработать платёж. Обратитесь к продавцу';

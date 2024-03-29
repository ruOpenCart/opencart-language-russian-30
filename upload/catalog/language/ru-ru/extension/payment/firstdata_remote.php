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
$_['text_title']              = 'Кредитная или Дебетовая карта';
$_['text_credit_card']        = 'Данные кредитной карты';
$_['text_wait']               = 'Пожалуйста, подождите!';
$_['text_store_card']         = 'Сохранить детали карты?';

// Entry
$_['entry_cc_number']         = 'Номер карты';
$_['entry_cc_name']           = 'Имя владельца карты';
$_['entry_cc_expire_date']    = 'Дата истечения срока действия карты';
$_['entry_cc_cvv2']           = 'Код безопасности карты (CVV2)';

// Help
$_['help_start_date']         = '(если доступно)';
$_['help_issue']              = '(только для карт Maestro и Solo)';

// Text
$_['text_result']             = 'Результат: ';
$_['text_approval_code']      = 'Код подтверждения: ';
$_['text_reference_number']   = 'Ссылка: ';
$_['text_card_number_ref']    = 'Последние 4 цифры карты: xxxx ';
$_['text_card_brand']         = 'Бренд карты: ';
$_['text_response_code']      = 'Код ответа: ';
$_['text_fault']              = 'Сообщение о неисправности: ';
$_['text_error']              = 'Сообщение об ошибке: ';
$_['text_avs']                = 'Проверка адреса: ';
$_['text_address_ppx']        = 'Адресные данные не предоставлены или Адрес не проверен эмитентом карты';
$_['text_address_yyy']        = 'Эмитент карты подтвердил, что улица и почтовый индекс совпадают с их записями';
$_['text_address_yna']        = 'Эмитент карты подтвердил, что улица совпадает с их записями, но почтовый индекс не совпадает';
$_['text_address_nyz']        = 'Эмитент карты подтвердил, что почтовый индекс совпадает с его записями, но улица не совпадает';
$_['text_address_nnn']        = 'И улица, и почтовый индекс не совпадают с записями эмитента карты';
$_['text_address_ypx']        = 'Эмитент карты подтвердил, что улица совпадает с их записями. Эмитент не проверял почтовый индекс';
$_['text_address_pyx']        = 'Эмитент карты подтвердил, что почтовый индекс совпадает с их записями. Эмитент не проверял улицу';
$_['text_address_xxu']        = 'Эмитент карты не проверял информацию AVS';
$_['text_card_code_verify']   = 'Код безопасности: ';
$_['text_card_code_m']        = 'Совпадение кода безопасности карты';
$_['text_card_code_n']        = 'Код безопасности карты не совпадает';
$_['text_card_code_p']        = 'Не обработано';
$_['text_card_code_s']        = 'Продавец указал, что код безопасности карты отсутствует на карте';
$_['text_card_code_u']        = 'Эмитент не сертифицирован и/или не предоставил ключи шифрования';
$_['text_card_code_x']        = 'Ответа от ассоциации кредитной карты получено не было';
$_['text_card_code_blank']    = 'Пустой ответ должен указывать на то, что код не был отправлен и что не было указаний на то, что код не был указан на карте.';
$_['text_card_accepted']      = 'Принимаемые карты: ';
$_['text_card_type_m']        = 'Mastercard';
$_['text_card_type_v']        = 'Visa (Credit/Debit/Electron/Delta)';
$_['text_card_type_c']        = 'Diners';
$_['text_card_type_a']        = 'American Express';
$_['text_card_type_ma']       = 'Maestro';
$_['text_card_new']           = 'Новая карта';
$_['text_response_proc_code'] = 'Код процессора: ';
$_['text_response_ref']       = 'Номер ссылки: ';

// Error
$_['error_card_number']       = 'Убедитесь, что номер вашей карты действителен';
$_['error_card_name']         = 'Убедитесь, что имя держателя карты действительное';
$_['error_card_cvv']          = 'Убедитесь, что CVV2 действителен';
$_['error_failed']            = 'Невозможно обработать ваш платеж, обратитесь к продавцу';

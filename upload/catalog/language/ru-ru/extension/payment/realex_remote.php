<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/payment/realex_remote.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Text
$_['text_title']				= 'Кредитная или дебетовая карта';
$_['text_credit_card']			= 'Данные карты';
$_['text_wait']					= 'Подождите, пожалуйста!';
$_['text_result']				= 'Результат';
$_['text_message']				= 'Сообщение';
$_['text_cvn_result']			= 'Результат CVN';
$_['text_avs_postcode']			= 'AVS почтовый индекс';
$_['text_avs_address']			= 'AVS адрес';
$_['text_eci']					= 'ECI (3D Secure)';
$_['text_tss']					= 'Результат TSS';
$_['text_card_bank']			= 'Банк-эмитент';
$_['text_card_country']			= 'Страна карты';
$_['text_card_region']			= 'Регион карты';
$_['text_last_digits']			= 'Последние 4 цифры';
$_['text_order_ref']			= 'Номер заказа';
$_['text_timestamp']			= 'Время';
$_['text_card_visa']			= 'Visa';
$_['text_card_mc']				= 'Mastercard';
$_['text_card_amex']			= 'American Express';
$_['text_card_switch']			= 'Switch';
$_['text_card_laser']			= 'Laser';
$_['text_card_diners']			= 'Diners';
$_['text_auth_code']			= 'Код авторизации';
$_['text_3d_s1']				= 'Держатель не зарегистрирован, сдвиг риска';
$_['text_3d_s2']				= 'Не удалось проверить регистрацию, без сдвига риска';
$_['text_3d_s3']				= 'Неверный ответ сервера, без сдвига риска';
$_['text_3d_s4']				= 'Зарегистрирован, неверный ответ ACS, без сдвига риска';
$_['text_3d_s5']				= 'Успешная аутентификация, сдвиг риска';
$_['text_3d_s6']				= 'Попытка аутентификации принята, сдвиг риска';
$_['text_3d_s7']				= 'Неверный пароль, без сдвига риска';
$_['text_3d_s8']				= 'Аутентификация недоступна, без сдвига риска';
$_['text_3d_s9']				= 'Неверный ответ ACS, без сдвига риска';
$_['text_3d_s10']				= 'Критическая ошибка RealMPI, без сдвига риска';

// Entry
$_['entry_cc_type']				= 'Тип карты';
$_['entry_cc_number']			= 'Номер карты';
$_['entry_cc_name']				= 'Имя держателя';
$_['entry_cc_expire_date']		= 'Срок действия';
$_['entry_cc_cvv2']				= 'Код CVV2';
$_['entry_cc_issue']			= 'Номер выпуска';

// Help
$_['help_start_date']			= '(если есть)';
$_['help_issue']				= '(только для Maestro и Solo)';

// Error
$_['error_card_number']			= 'Проверьте правильность номера карты';
$_['error_card_name']			= 'Проверьте правильность имени держателя';
$_['error_card_cvv']			= 'Проверьте правильность кода CVV2';
$_['error_3d_unable']			= 'Требуется 3D Secure, но банк не отвечает. Попробуйте позже';
$_['error_3d_500_response_no_payment'] = 'Неверный ответ платёжной системы. Платёж не проведён';
$_['error_3d_unsuccessful']		= 'Ошибка авторизации 3D Secure';
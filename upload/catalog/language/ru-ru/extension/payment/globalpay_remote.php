<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/payment/globalpay_remote.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Text
$_['text_title']				= 'Кредитная или дебетовая карта';
$_['text_credit_card']			= 'Данные кредитной карты';
$_['text_wait']					= 'Пожалуйста, подождите!';
$_['text_result']				= 'Результат';
$_['text_message']				= 'Сообщение';
$_['text_cvn_result']			= 'Результат CVN';
$_['text_avs_postcode']			= 'AVS индекс';
$_['text_avs_address']			= 'AVS адрес';
$_['text_eci']					= 'Результат ECI (3D Secure)';
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
$_['text_3d_s1']				= 'Держатель не подключён к 3D Secure';
$_['text_3d_s2']				= 'Не удалось проверить подключение к 3D Secure';
$_['text_3d_s3']				= 'Неверный ответ сервера регистрации';
$_['text_3d_s4']				= 'Подключён, но неверный ответ ACS';
$_['text_3d_s5']				= 'Успешная аутентификация 3D Secure';
$_['text_3d_s6']				= 'Попытка аутентификации принята';
$_['text_3d_s7']				= 'Неверный пароль';
$_['text_3d_s8']				= 'Аутентификация недоступна';
$_['text_3d_s9']				= 'Неверный ответ ACS';
$_['text_3d_s10']				= 'Критическая ошибка RealMPI';

// Entry
$_['entry_cc_type']				= 'Тип карты';
$_['entry_cc_number']			= 'Номер карты';
$_['entry_cc_name']				= 'Имя владельца карты';
$_['entry_cc_expire_date']		= 'Срок действия карты';
$_['entry_cc_cvv2']				= 'Код безопасности карты (CVV2)';
$_['entry_cc_issue']			= 'Номер выпуска карты';

// Help
$_['help_start_date']			= '(если указано)';
$_['help_issue']				= '(только для карт Maestro и Solo)';

// Error
$_['error_card_number']			= 'Проверьте корректность номера карты';
$_['error_card_name']			= 'Проверьте корректность имени владельца карты';
$_['error_card_cvv']			= 'Проверьте корректность CVV2';
$_['error_3d_unable']			= 'Требуется 3D Secure, но проверка с банком недоступна. Попробуйте позже';
$_['error_3d_500_response_no_payment'] = 'Неверный ответ от платёжной системы. Списание не производилось';
$_['error_3d_unsuccessful']		= 'Авторизация 3D Secure не пройдена';

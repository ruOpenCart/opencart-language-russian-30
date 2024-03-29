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
$_['text_title']                       = 'Кредитная или дебетовая карты';
$_['text_credit_card']                 = 'Данные кредитной карты';
$_['text_wait']                        = 'Пожалуйста, подождите!';
$_['text_result']                      = 'Результат';
$_['text_message']                     = 'Сообщение';
$_['text_cvn_result']                  = 'Результат CVN';
$_['text_avs_postcode']                = 'Почтовый индекс AVS';
$_['text_avs_address']                 = 'Адрес AVS';
$_['text_eci']                         = 'Результат ECI (3D secure)';
$_['text_tss']                         = 'Результат TSS';
$_['text_card_bank']                   = 'Банк-эмитент карты';
$_['text_card_country']                = 'Страна карты';
$_['text_card_region']                 = 'Регион карты';
$_['text_last_digits']                 = 'Последние 4 цифры';
$_['text_order_ref']                   = 'Номер заказа';
$_['text_timestamp']                   = 'Отметка';
$_['text_card_visa']                   = 'Visa';
$_['text_card_mc']                     = 'Mastercard';
$_['text_card_amex']                   = 'American Express';
$_['text_card_switch']                 = 'Switch';
$_['text_card_laser']                  = 'Laser';
$_['text_card_diners']                 = 'Diners';
$_['text_auth_code']                   = 'Код авторизации';
$_['text_3d_s1']                       = 'Держатель карты не зарегистрирован, смена ответственности';
$_['text_3d_s2']                       = 'Невозможно подтвердить регистрацию, нет сдвига ответственности';
$_['text_3d_s3']                       = 'Недействительный ответ от сервера регистрации, нет сдвига ответственности';
$_['text_3d_s4']                       = 'Зарегистрирован, но недействительный ответ от ACS (сервера контроля доступа), нет сдвига ответственности';
$_['text_3d_s5']                       = 'Успешная аутентификация, смещение ответственности';
$_['text_3d_s6']                       = 'Попытка аутентификации подтверждена, смещение ответственности';
$_['text_3d_s7']                       = 'Введен неверный пароль, сдвиг ответственности отсутствует';
$_['text_3d_s8']                       = 'Аутентификация недоступна, нет сдвига ответственности';
$_['text_3d_s9']                       = 'Недействительный ответ от ACS, нет сдвига ответственности';
$_['text_3d_s10']                      = 'Неустранимая ошибка RealMPI, без сдвига ответственности';

// Entry
$_['entry_cc_type']                    = 'Тип карты';
$_['entry_cc_number']                  = 'Номер карты';
$_['entry_cc_name']                    = 'Имя владельца карты';
$_['entry_cc_expire_date']             = 'Дата истечения срока действия карты';
$_['entry_cc_cvv2']                    = 'Код безопасности карты (CVV2)';
$_['entry_cc_issue']                   = 'Номер выпуска карты';

// Help
$_['help_start_date']                  = '(если доступно)';
$_['help_issue']                       = '(только для карт Maestro и Solo)';

// Error
$_['error_card_number']                = 'Убедитесь, что номер вашей карты действителен';
$_['error_card_name']                  = 'Убедитесь, что имя держателя карты действительное';
$_['error_card_cvv']                   = 'Убедитесь, что CVV2 действителен';
$_['error_3d_unable']                  = 'Продавец требует 3D secure, но не может подтвердить в вашем банке, попробуйте позже';
$_['error_3d_500_response_no_payment'] = 'Получен недействительный ответ от обработчика карты, платеж не поступил';
$_['error_3d_unsuccessful']            = 'Ошибка авторизации 3D secure';

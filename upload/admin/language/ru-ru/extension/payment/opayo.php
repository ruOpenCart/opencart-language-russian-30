<?php

/**
 * @package    Русский язык для OpenCart 3.x
 * @file       admin/language/ru-ru/extension/payment/opayo.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']                       = 'Opayo';

// Text
$_['text_opayo']                          = '<img src="view/image/payment/opayo.png" alt="Opayo" title="Opayo" />';
$_['text_extensions']                     = 'Расширения';
$_['text_edit']                           = 'Редактировать Opayo';
$_['text_tab_general']                    = 'Общие';
$_['text_tab_cron']                       = 'Cron';
$_['text_test']                           = 'Тест';
$_['text_live']                           = 'Живой';
$_['text_defered']                        = 'Отложенный';
$_['text_authenticate']                   = 'Аутентифицировать';
$_['text_payment']                        = 'Оплата';
$_['text_payment_info']                   = 'Платежная информация';
$_['text_release_status']                 = 'Платеж осуществлен';
$_['text_void_status']                    = 'Платеж аннулирован';
$_['text_rebate_status']                  = 'Платеж возвращен';
$_['text_order_ref']                      = 'Заказать реф';
$_['text_order_total']                    = 'Всего авторизовано';
$_['text_total_released']                 = 'Всего осуществлено';
$_['text_transactions']                   = 'Транзакции';
$_['text_column_amount']                  = 'Количество';
$_['text_column_type']                    = 'Тип';
$_['text_column_date_added']              = 'Создано';
$_['text_confirm_void']                   = 'Вы уверены, что хотите аннулировать платеж?';
$_['text_confirm_release']                = 'Вы уверены, что хотите осуществить платеж?';
$_['text_confirm_rebate']                 = 'Вы уверены, что хотите вернуть платеж?';

// Entry
$_['entry_vendor']                        = 'Вендор';
$_['entry_environment']                   = 'Среда';
$_['entry_transaction_method']            = 'Метод транзакции';
$_['entry_total']                         = 'Итого';
$_['entry_order_status']                  = 'Статус заказа';
$_['entry_geo_zone']                      = 'Гео зона';
$_['entry_status']                        = 'Статус';
$_['entry_sort_order']                    = 'Порядок сортировки';
$_['entry_debug']                         = 'Отладочное ведение журнала';
$_['entry_card_save']                     = 'Сохранить карты';
$_['entry_cron_token']                    = 'Секретный токен';
$_['entry_cron_url']                      = 'URL-адрес';
$_['entry_cron_last_run']                 = 'Время последнего запуска:';

// Help
$_['help_total']                          = 'Общая сумма заказа, которую необходимо достичь, чтобы этот способ оплаты стал активным.';
$_['help_debug']                          = 'Включение отладки запишет конфиденциальные данные в файл журнала. Всегда следует отключать, если не указано иное.';
$_['help_transaction_method']             = 'Для разрешения оплаты подписки метод транзакции ДОЛЖЕН быть установлен на «Оплата».';
$_['help_card_save']                      = 'Чтобы покупатель мог сохранить данные карты для последующих платежей, MID TOKEN должен быть подписан. Вам нужно будет связаться со службой поддержки клиентов Opayo, чтобы обсудить включение системы токенов для вашего аккаунта.';
$_['help_cron_token']                     = 'Сделайте это длинным и трудным для угадывания.';
$_['help_cron_url']                       = 'Установите cron для вызова этого URL-адреса.';

// Button
$_['button_release']                      = 'Выпустить';
$_['button_rebate']                       = 'Скидка / Возврат';
$_['button_void']                         = 'Аннулировать';
$_['button_enable_recurring']             = 'Включить повторяющиеся платежи';
$_['button_disable_recurring']            = 'Выключить повторяющиеся платежи';

// Success
$_['success_save']                        = 'Успех: Вы изменили Opayo!';
$_['success_release_ok']                  = 'Успех: Выпуск прошел успешно!';
$_['success_release_ok_order']            = 'Успех: Выпуск прошел успешно, статус заказа обновлен до «успешно — урегулировано»!';
$_['success_rebate_ok']                   = 'Успех: Скидка прошла успешно!';
$_['success_rebate_ok_order']             = 'Успех: Скидка была успешно выполнена, статус заказа обновлен до «Скидка получена»!';
$_['success_void_ok']                     = 'Успех: Аннулирование прошло успешно, статус заказа изменен на «аннулировано»!';
$_['success_enable_recurring']            = 'Успех: Повторяющиеся платежи были успешно включены!';
$_['success_disable_recurring']           = 'Успех: Повторяющиеся платежи были успешно отключены!';

// Error
$_['error_warning']                       = 'Предупреждение: Внимательно проверьте форму на наличие ошибок!';
$_['error_permission']                    = 'Предупреждение: У вас нет разрешения на изменение платежа Opayo!';
$_['error_vendor']                        = 'Требуется идентификатор вендора!';

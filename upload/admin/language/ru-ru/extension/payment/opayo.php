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
$_['heading_title']		 				= 'Opayo';

// Text
$_['text_opayo']	  					= '<img src="view/image/payment/opayo.png" alt="Opayo" title="Opayo" />';
$_['text_extensions']     				= 'Расширения';
$_['text_edit']          				= 'Редактировать Opayo';
$_['text_tab_general']				 	= 'Общие';
$_['text_tab_cron']						= 'Cron';
$_['text_test']				  			= 'Тестовый';
$_['text_live']				  			= 'Боевой';
$_['text_defered']			  			= 'Отложенная';
$_['text_authenticate']		  			= 'Авторизация';
$_['text_payment']		  				= 'Оплата';
$_['text_payment_info']		  			= 'Информация об оплате';
$_['text_release_status']	  			= 'Платёж подтверждён';
$_['text_void_status']		 			= 'Платёж отменён';
$_['text_rebate_status']	  			= 'Платёж возвращён';
$_['text_order_ref']		  			= 'Номер заказа';
$_['text_order_total']		  			= 'Сумма авторизации';
$_['text_total_released']	  			= 'Всего подтверждено';
$_['text_transactions']		  			= 'Транзакции';
$_['text_column_amount']	  			= 'Сумма';
$_['text_column_type']		  			= 'Тип';
$_['text_column_date_added']  			= 'Создано';
$_['text_confirm_void']		  			= 'Вы уверены, что хотите отменить платёж?';
$_['text_confirm_release']	  			= 'Вы уверены, что хотите подтвердить платёж?';
$_['text_confirm_rebate']	  			= 'Вы уверены, что хотите выполнить возврат платежа?';

// Entry
$_['entry_vendor']			  			= 'Продавец';
$_['entry_environment']			  		= 'Среда';
$_['entry_transaction_method']		  	= 'Метод транзакции';
$_['entry_total']             			= 'Всего';
$_['entry_order_status']	  			= 'Статус заказа';
$_['entry_geo_zone']		  			= 'Геозона';
$_['entry_status']			  			= 'Статус';
$_['entry_sort_order']		  			= 'Порядок сортировки';
$_['entry_debug']			  			= 'Журнал отладки';
$_['entry_card_save']			  		= 'Сохранять карты';
$_['entry_cron_token']	  				= 'Секретный токен';
$_['entry_cron_url']	  				= 'URL';
$_['entry_cron_last_run']	 			= 'Время последнего запуска:';

// Help
$_['help_total']			  			= 'Минимальная сумма заказа для активации этого способа оплаты.';
$_['help_debug']			  			= 'Включение отладки записывает конфиденциальные данные в журнал. Всегда отключайте, если не указано иное.';
$_['help_transaction_method']  			= 'Для оплаты по подписке метод транзакции должен быть установлен на «Оплата».';
$_['help_card_save']			  		= 'Чтобы покупатель мог сохранять данные карты для последующих платежей, необходимо подключить MID TOKEN. Свяжитесь со службой поддержки Opayo для подключения системы токенов для Вашего аккаунта.';
$_['help_cron_token']	  				= 'Сделайте его длинным и трудным для угадывания.';
$_['help_cron_url']		  				= 'Настройте задачу cron для вызова этого URL.';

// Button
$_['button_release']		  			= 'Подтвердить';
$_['button_rebate']			  			= 'Возврат';
$_['button_void']			  			= 'Отменить';
$_['button_enable_recurring']			= 'Включить регулярные платежи';
$_['button_disable_recurring']			= 'Отключить регулярные платежи';

// Success
$_['success_save']		 				= 'Успешно: Вы изменили настройки Opayo!';
$_['success_release_ok']		  		= 'Успешно: Платёж подтверждён!';
$_['success_release_ok_order']	  		= 'Успешно: Платёж подтверждён, статус заказа обновлён на «завершён»!';
$_['success_rebate_ok']		  			= 'Успешно: Возврат выполнен!';
$_['success_rebate_ok_order']	  		= 'Успешно: Возврат выполнен, статус заказа обновлён на «возвращён»!';
$_['success_void_ok']			  		= 'Успешно: Платёж отменён, статус заказа обновлён на «отменён»!';
$_['success_enable_recurring']			= 'Успешно: Регулярные платежи включены!';
$_['success_disable_recurring']			= 'Успешно: Регулярные платежи отключены!';

// Error
$_['error_warning']          			= 'Предупреждение: Пожалуйста, проверьте форму на наличие ошибок!';
$_['error_permission']		  			= 'Предупреждение: У Вас нет разрешения на изменение способа оплаты Opayo!';
$_['error_vendor']			  			= 'Требуется ID продавца!';

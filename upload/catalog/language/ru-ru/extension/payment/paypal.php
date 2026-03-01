<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/payment/paypal.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Text
$_['text_paypal']							= 'PayPal';
$_['text_paypal_fastlane']					= 'Кредитные и дебетовые карты (Fastlane)';
$_['text_paypal_title']						= 'PayPal (оплата PayPal или картой)';
$_['text_paypal_paylater_title']			= 'Купить сейчас — оплатить позже с PayPal';
$_['text_paypal_googlepay_title']			= 'Google Pay';
$_['text_paypal_applepay_title']			= 'Apple Pay';
$_['text_paypal_fastlane_title']			= 'Кредитные и дебетовые карты';
$_['text_checkout_payment_address']  		= 'Данные плательщика';
$_['text_checkout_shipping_address'] 		= 'Адрес доставки';
$_['text_checkout_shipping_method']  		= 'Способ доставки';
$_['text_checkout_payment_method']  		= 'Способ оплаты';
$_['text_your_details']              		= 'Ваши данные';
$_['text_your_address']              		= 'Ваш адрес';
$_['text_cart']               				= 'Корзина';
$_['text_shipping_updated']   				= 'Способ доставки обновлён';
$_['text_fastlane']  						= 'Fastlane';
$_['text_fastlane_shipping']  				= 'Доставка';
$_['text_fastlane_payment']  				= 'Оплата';
$_['text_day']                 				= 'день';
$_['text_week']                				= 'неделя';
$_['text_semi_month']          				= 'полмесяца';
$_['text_month']               				= 'месяц';
$_['text_year']                				= 'год';
$_['text_card_number']          			= '%s, заканчивается на %s';
$_['text_trial']               				= '%s каждые %s %s за %s платежей, затем ';
$_['text_recurring']          				= '%s каждые %s %s';
$_['text_recurring_item']      				= 'Периодический товар';
$_['text_payment_recurring']   				= 'Профиль оплаты';
$_['text_trial_description']   				= '%s каждые %d %s за %d платеж(ей), затем';
$_['text_payment_description'] 				= '%s каждые %d %s за %d платеж(ей)';
$_['text_payment_cancel']      				= '%s каждые %d %s до отмены';
$_['text_length']							= ' за %s платежей';
$_['text_order_message']					= 'Защита продавца PayPal — %s';
$_['text_wait']								= 'Пожалуйста, подождите!';
$_['text_loading']          				= 'Загрузка...';
$_['text_failure_page_title']				= 'Ошибка оформления заказа!';
$_['text_failure_page_message']				= 'Транзакция не выполнена. Выберите другой способ оплаты или <a href="%s" target="_blank">свяжитесь с нами</a>';

// Column
$_['column_image']             				= 'Изображение';
$_['column_name']              				= 'Товар';
$_['column_model']             				= 'Модель';
$_['column_quantity']          				= 'Количество';
$_['column_price']             				= 'Цена';
$_['column_total']             				= 'Итого';

// Entry
$_['entry_email']                    		= 'E-Mail';
$_['entry_firstname']                		= 'Имя';
$_['entry_lastname']                 		= 'Фамилия';
$_['entry_telephone']               		= 'Телефон';
$_['entry_company']                  		= 'Компания';
$_['entry_address_1']                		= 'Адрес';
$_['entry_address_2']                		= 'Адрес (доп.)';
$_['entry_postcode']                 		= 'Индекс';
$_['entry_city']                     		= 'Город';
$_['entry_country']                  		= 'Страна';
$_['entry_zone']                    		= 'Регион';
$_['entry_card_number']						= 'Номер карты';
$_['entry_expiration_date']					= 'Срок действия';
$_['entry_cvv']								= 'CVV';
$_['entry_card_save']						= 'Сохранить карту';
$_['entry_shipping']						= 'Требуется доставка';

// Button
$_['button_continue']  						= 'Продолжить';
$_['button_confirm']  						= 'Подтвердить';
$_['button_shipping'] 						= 'Обновить доставку';
$_['button_pay']							= 'Оплатить картой';
$_['button_edit']  							= 'Изменить';

// Success
$_['success_order']		 					= 'Успешно: Вы изменили заказы!';

// Error
$_['error_warning']							= 'Проверьте форму на ошибки.';
$_['error_stock']              				= 'Товары, отмеченные ***, недоступны в нужном количестве или отсутствуют на складе!';
$_['error_minimum']            				= 'Минимальная сумма заказа для %s — %s!';
$_['error_required']           				= 'Обязательно поле %s!';
$_['error_product']            				= 'Предупреждение: В Вашей корзине нет товаров!';
$_['error_recurring_required'] 				= 'Выберите вариант периодической оплаты!';
$_['error_unavailable'] 	  				= 'Для этого заказа используйте полное оформление!';
$_['error_shipping']                 		= 'Предупреждение: Выберите способ доставки!';
$_['error_no_shipping']    					= 'Предупреждение: Нет доступных способов доставки.';
$_['error_firstname']                		= 'Имя должно быть от 1 до 32 символов!';
$_['error_lastname']                 		= 'Фамилия должна быть от 1 до 32 символов!';
$_['error_email']                    		= 'Некорректный адрес E-Mail!';
$_['error_telephone']                		= 'Телефон должен быть от 3 до 32 символов!';
$_['error_password']                 		= 'Пароль должен быть от 4 до 20 символов!';
$_['error_confirm']                  		= 'Пароли не совпадают!';
$_['error_address_1']                		= 'Адрес должен быть от 3 до 128 символов!';
$_['error_city']                     		= 'Город должен быть от 2 до 128 символов!';
$_['error_postcode']                 		= 'Индекс должен быть от 2 до 10 символов!';
$_['error_country']                  		= 'Выберите страну!';
$_['error_zone']                     		= 'Выберите регион!';
$_['error_agree']                    		= 'Предупреждение: Необходимо принять %s!';
$_['error_address']                  		= 'Предупреждение: Выберите адрес!';
$_['error_custom_field']             		= 'Обязательно поле %s!';
$_['error_fastlane_billing_address']        = 'Некорректный адрес плательщика!';
$_['error_order_voided']					= 'Не удалось обработать платёж. Все единицы заказа аннулированы. <a href="%s" target="_blank">Свяжитесь с нами</a>.';
$_['error_order_completed']					= 'Не удалось обработать платёж. Платёж уже авторизован или списан. <a href="%s" target="_blank">Свяжитесь с нами</a>.';
$_['error_authorization_captured']			= 'Не удалось обработать платёж. По авторизации есть списания на сумму больше исходной. <a href="%s" target="_blank">Свяжитесь с нами</a>.';
$_['error_authorization_denied']			= 'Платёж этой картой не прошёл. Средства не списаны. Используйте другой способ оплаты.';
$_['error_authorization_expired']			= 'Не удалось обработать платёж. Авторизация просрочена. <a href="%s" target="_blank">Свяжитесь с нами</a>.';
$_['error_capture_declined']				= 'Платёж этой картой не прошёл. Средства не списаны. Используйте другой способ оплаты.';
$_['error_capture_failed']					= 'Не удалось обработать платёж. Ошибка при списании. <a href="%s" target="_blank">Свяжитесь с нами</a>.';
$_['error_3ds_failed_authentication']		= 'Платёж этой картой не прошёл. Проверка 3D Secure не пройдена или устройство не подтверждено.';
$_['error_3ds_rejected_authentication']		= 'Платёж этой картой не прошёл. Вы пропустили проверку 3D Secure.';
$_['error_3ds_attempted_authentication'] 	= 'Платёж этой картой не прошёл. Карта не подключена к 3D Secure.';
$_['error_3ds_unable_authentication']		= 'Платёж этой картой не прошёл. Банк не может провести аутентификацию.';
$_['error_3ds_challenge_authentication']	= 'Платёж этой картой не прошёл. Требуется дополнительная проверка.';
$_['error_3ds_card_ineligible']				= 'Платёж этой картой не прошёл. Карта и банк не поддерживают 3D Secure.';
$_['error_3ds_system_unavailable']			= 'Платёж этой картой не прошёл. Ошибка системы 3D Secure.';
$_['error_3ds_system_bypassed'] 			= 'Платёж этой картой не прошёл. 3D Secure был пропущен системой.';
$_['error_payment']							= 'Выберите другой способ оплаты или <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_timeout'] 	  					= 'PayPal временно недоступен. Попробуйте позже!';

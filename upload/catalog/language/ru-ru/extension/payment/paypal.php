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
$_['text_paypal']                        = 'PayPal';
$_['text_paypal_title']                  = 'PayPal (оплата с помощью PayPal, картой)';
$_['text_paypal_paylater_title']         = 'Купи сейчас, заплати потом через PayPal';
$_['text_paypal_googlepay_title']        = 'Google Pay';
$_['text_paypal_applepay_title']         = 'Apple Pay';
$_['text_checkout_payment_address']      = 'Платежные данные';
$_['text_checkout_shipping_address']     = 'Сведения о доставке';
$_['text_checkout_shipping_method']      = 'Способ доставки';
$_['text_checkout_payment_method']       = 'Способ оплаты';
$_['text_your_details']                  = 'Ваши личные данные';
$_['text_your_address']                  = 'Ваш адрес';
$_['text_cart']                          = 'Корзина покупок';
$_['text_shipping_updated']              = 'Служба доставки обновлена';
$_['text_day']                           = 'день';
$_['text_week']                          = 'неделя';
$_['text_semi_month']                    = 'полмесяца';
$_['text_month']                         = 'месяц';
$_['text_year']                          = 'год';
$_['text_card_number']                   = '%s заканчивается в %s';
$_['text_trial']                         = '%s каждые %s %s для %s платежей, затем ';
$_['text_recurring']                     = '%s каждые %s %s';
$_['text_recurring_item']                = 'Recurring Item';
$_['text_payment_recurring']             = 'Payment Profile';
$_['text_trial_description']             = '%s каждые %d %s для %d платежа(ей), затем';
$_['text_payment_description']           = '%s каждые %d %s для %d платежа(ей)';
$_['text_payment_cancel']                = '%s каждые %d %s до отмены';
$_['text_length']                        = ' для платежей: %s';
$_['text_order_message']                 = 'Защита продавца PayPal - %s';
$_['text_wait']                          = 'Пожалуйста, подождите!';
$_['text_loading']                       = 'Загрузка...';
$_['text_failure_page_title']            = 'Ваш заказ не выполнен!';
$_['text_failure_page_message']          = 'Извините, но транзакция не удалась! Пожалуйста, выберите другой способ оплаты или <a href="%s" target="_blank">свяжитесь с нами</a>';

// Column
$_['column_image']                       = 'Изображение';
$_['column_name']                        = 'Название товара';
$_['column_model']                       = 'Модель';
$_['column_quantity']                    = 'Количество';
$_['column_price']                       = 'Цена за единицу товара';
$_['column_total']                       = 'Итого';

// Entry
$_['entry_email']                        = 'Эл. почта';
$_['entry_firstname']                    = 'Имя';
$_['entry_lastname']                     = 'Фамилия';
$_['entry_telephone']                    = 'Телефон';
$_['entry_company']                      = 'Компания';
$_['entry_address_1']                    = 'Адрес 1';
$_['entry_address_2']                    = 'Адрес 2';
$_['entry_postcode']                     = 'Индекс';
$_['entry_city']                         = 'Город';
$_['entry_country']                      = 'Страна';
$_['entry_zone']                         = 'Область';
$_['entry_card_number']                  = 'Номер карты';
$_['entry_expiration_date']              = 'Дата окончания срока';
$_['entry_cvv']                          = 'CVV';
$_['entry_card_save']                    = 'Сохранить вашу карту';


// Button
$_['button_confirm']                     = 'Подтвердить';
$_['button_shipping']                    = 'Обновить доставку';
$_['button_pay']                         = 'Оплатить картой';

// Error
$_['error_warning']                      = 'Внимательно проверьте форму на наличие ошибок.';
$_['error_stock']                        = 'Товары, отмеченные значком ***, недоступны в нужном количестве или отсутствуют на складе!';
$_['error_minimum']                      = 'Минимальная сумма заказа для %s составляет %s!';
$_['error_required']                     = 'Требуется %s!';
$_['error_product']                      = 'Предупреждение: в вашей корзине нет товаров!';
$_['error_recurring_required']           = 'Пожалуйста, выберите повторяющийся платеж!';
$_['error_unavailable']                  = 'Пожалуйста, используйте полную проверку этого заказа!';
$_['error_shipping']                     = 'Предупреждение: Требуется способ доставки!';
$_['error_no_shipping']                  = 'Предупреждение: Варианты доставки недоступны.';
$_['error_firstname']                    = 'Имя должно содержать от 1 до 32 символов!';
$_['error_lastname']                     = 'Фамилия должна содержать от 1 до 32 символов!';
$_['error_email']                        = 'Адрес электронной почты недействителен!';
$_['error_telephone']                    = 'Телефон должен содержать от 3 до 32 символов!';
$_['error_password']                     = 'Пароль должен содержать от 4 до 20 символов!';
$_['error_confirm']                      = 'Подтверждение пароля не соответствует паролю!';
$_['error_address_1']                    = 'Адрес 1 должен содержать от 3 до 128 символов!';
$_['error_city']                         = 'Город должен содержать от 2 до 128 символов!';
$_['error_postcode']                     = 'Почтовый индекс должен содержать от 2 до 10 символов!';
$_['error_country']                      = 'Пожалуйста, выберите страну!';
$_['error_zone']                         = 'Пожалуйста, выберите область!';
$_['error_agree']                        = 'Предупреждение: Вы должны согласиться с %s!';
$_['error_address']                      = 'Предупреждение: необходимо выбрать адрес!';
$_['error_custom_field']                 = 'Требуется %s!';
$_['error_order_voided']                 = 'Нам не удалось обработать ваш платеж. Все единицы покупки в заказе аннулируются. Пожалуйста, <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_order_completed']              = 'Нам не удалось обработать ваш платеж. The payment was authorized or the authorized payment was captured for the order. Пожалуйста, <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_authorization_captured']       = 'Нам не удалось обработать ваш платеж. Нам не удалось обработать ваш платеж. Авторизованный платеж имеет одно или несколько захватов. Сумма этих зафиксированных платежей превышает сумму первоначального авторизованного платежа. Пожалуйста, <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_authorization_denied']         = 'Нам не удалось обработать транзакцию с помощью этой карты. Средства не удалось захватить. Пожалуйста, попробуйте другой источник финансирования.';
$_['error_authorization_expired']        = 'Нам не удалось обработать ваш платеж. Срок авторизованного платежа истек. Пожалуйста, <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_capture_declined']             = 'Нам не удалось обработать транзакцию с помощью этой карты. Средства не удалось захватить. Пожалуйста, попробуйте другой источник финансирования.';
$_['error_capture_failed']               = 'Нам не удалось обработать ваш платеж. При получении платежа произошла ошибка. Пожалуйста, <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_3ds_failed_authentication']    = 'Нам не удалось обработать транзакцию с помощью этой карты. Возможно, вы не прошли проверку или устройство не было проверено.';
$_['error_3ds_rejected_authentication']  = 'Нам не удалось обработать транзакцию с помощью этой карты. Вы пропустили аутентификацию 3D Secure.';
$_['error_3ds_attempted_authentication'] = 'Нам не удалось обработать транзакцию с помощью этой карты. Карта не зарегистрирована в 3D Secure, поскольку банк-эмитент карты не участвует в 3D Secure.';
$_['error_3ds_unable_authentication']    = 'Нам не удалось обработать транзакцию с помощью этой карты. Банк-эмитент не может завершить аутентификацию.';
$_['error_3ds_challenge_authentication'] = 'Нам не удалось обработать транзакцию с помощью этой карты. Для аутентификации требуется вызов.';
$_['error_3ds_card_ineligible']          = 'Нам не удалось обработать транзакцию с помощью этой карты. Тип карты и банк-эмитент не готовы выполнить аутентификацию 3D Secure.';
$_['error_3ds_system_unavailable']       = 'Нам не удалось обработать транзакцию с помощью этой карты. Произошла ошибка в системе аутентификации 3D Secure.';
$_['error_3ds_system_bypassed']          = 'Нам не удалось обработать транзакцию с помощью этой карты. 3D Secure был пропущен, так как система аутентификации не требовала запроса.';
$_['error_payment']                      = 'Пожалуйста, выберите другой способ оплаты или <a href="%s" target="_blank">свяжитесь с нами</a>.';
$_['error_timeout']                      = 'К сожалению, PayPal сейчас занят. Пожалуйста, повторите попытку позже!';

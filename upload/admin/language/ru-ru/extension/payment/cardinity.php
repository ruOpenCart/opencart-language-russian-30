<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       admin/language/ru-ru/extension/payment/cardinity.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']         = 'Cardinity';

// Text
$_['text_editing_shop']     = 'Выберите магазин, которому вы хотите назначить ключи API';
$_['text_extension']        = 'Расширения';
$_['text_success']          = 'Успешно: Вы изменили модуль оплаты Cardinity!';
$_['text_edit']             = 'Редактировать Cardinity';
$_['text_cardinity']        = '<a href="http://cardinity.com/?crdp=opencart" target="_blank"><img src="view/image/payment/cardinity.png" alt="Cardinity" title="Cardinity" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_production']       = 'Производство';
$_['text_sandbox']          = 'Песочница';
$_['text_payment_info']     = 'Информация о возврате';
$_['text_no_refund']        = 'Нет истории возврата';
$_['text_confirm_refund']   = 'Вы уверены, что хотите вернуть деньги?';
$_['text_na']               = 'Н/Д';
$_['text_success_action']   = 'Успешно';
$_['text_error_generic']    = 'Ошибка: Произошла ошибка с Вашим запросом. Пожалуйста, проверьте журналы.';

// Column
$_['column_refund']         = 'Возврат';
$_['column_date']           = 'Дата';
$_['column_refund_history'] = 'История возврата';
$_['column_action']         = 'Действие';
$_['column_status']         = 'Статус';
$_['column_amount']         = 'Количество';
$_['column_description']    = 'Описание';

// Entry
$_['entry_editing_shop']	= 'Магазин';
$_['entry_total']           = 'Всего';
$_['entry_order_status']    = 'Статус заказа';
$_['entry_geo_zone']        = 'Геозона';
$_['entry_status']          = 'Статус';
$_['entry_sort_order']      = 'Порядок сортировки';
$_['entry_key']				= 'Ключ потребителя';
$_['entry_secret']			= 'Секрет потребителя';
$_['entry_debug']			= 'Отладка';
$_['project_key']			= 'Идентификатор проекта';
$_['project_secret']		= 'Секрет проекта';
$_['entry_external']		= 'Внешняя оплата';
$_['entry_log']		        = 'Журнал транзакций';

// Help
$_['help_debug']            = 'Включение отладки приведет к записи конфиденциальных данных в файл журнала. Вы должны всегда отключать, если не указано иное.';
$_['help_total']            = 'Общая сумма, которую должен достичь заказ, прежде чем этот метод оплаты станет активным.';
$_['help_external']			= 'Включение внешней оплаты приведет к выполнению оплаты на нашем защищенном хостинг-сервере, вместо внутреннего.';
$_['help_consumer_cred']	= 'Ключ потребителя и секрет потребителя можно найти в панели управления Cardinity > Интеграция > Настройки API. Требуется только при использовании внутреннего метода.';
$_['help_project_cred']		= 'Идентификатор проекта и секрет проекта можно найти в панели управления Cardinity > Интеграция > Настройки API. Требуется только при использовании внешнего хостинг-сервера.';


// Button
$_['button_refund']         = 'Вернуть';

// Error
$_['error_key']             = 'Ключ обязателен!';
$_['error_secret']          = 'Секрет обязателен!';
$_['error_project_key']		= 'Ключ проекта обязателен!';
$_['error_project_secret']	= 'Секрет проекта обязателен!';
$_['error_composer']        = 'Невозможно загрузить Cardinity SDK. Пожалуйста, скачайте скомпилированную папку продавца или запустите composer.';
$_['error_php_version']     = 'Минимальная версия PHP 5.4.0 обязательна!';
$_['error_permission']      = 'Предупреждение: У Вас нет разрешения на изменение оплаты Cardinity!';
$_['error_connection']      = 'Возникла проблема с установлением соединения с API Cardinity. Пожалуйста, проверьте настройки: Ваш ключ и секрет.';
$_['error_warning']         = 'Предупреждение: Пожалуйста, внимательно проверьте форму на наличие ошибок!';
$_['refund_approved']	    = 'Возврат одобрен';
$_['refund_declined']	    = 'Возврат отклонен';
$_['refund_processing']	    = 'Возврат обрабатывается, проверьте позже';
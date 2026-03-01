<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       admin/language/ru-ru/extension/currency/fixer.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']    = 'Конвертер валют Fixer';

// Text
$_['text_extension']   = 'Расширения';
$_['text_success']     = 'Успешно: Вы изменили конвертер валют Fixer!';
$_['text_edit']        = 'Редактировать конвертер валют Fixer';
$_['text_edit']       .= '<br><br>';
$_['text_edit']       .= 'Fixer.io — сервис конвертации валют. Перед первым использованием необходимо <b><a href="https://fixer.io/" target="_blank">зарегистрироваться здесь</a></b> для получения ключа API доступа.';
$_['text_edit']       .= '<br><br>';
$_['text_edit']       .= 'При включении расширение можно выбрать в качестве движка курсов валют в разделе <b><a href="%2">Система &gt; Настройки</b></a>, а обновлять курсы валют можно в разделе <b><a href="%1">Система &gt; Локализация &gt; Валюты</a></b>.';

// Entry
$_['entry_api']        = 'Ключ API доступа';
$_['entry_ip']         = 'IP-адрес сервера';
$_['entry_cron']       = 'CRON-команда';
$_['entry_status']     = 'Статус';

// Help
$_['help_ip']          = 'Необязательный IP-адрес сервера, на котором выполняется CRON-задача для обновления курсов валют.';
$_['help_cron']        = 'Используйте эту команду при настройке CRON-задачи на Вашем сервере.';

// Error
$_['error_permission'] = 'Предупреждение: У Вас нет разрешения на изменение конвертера валют Fixer!';
$_['error_ip']         = 'Неверный IP-адрес!';
$_['error_api']        = 'Требуется ключ API доступа!';

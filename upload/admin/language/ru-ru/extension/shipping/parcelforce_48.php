<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       admin/language/ru-ru/extension/shipping/parcelforce_48.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']           = 'Parcelforce 48';

// Text
$_['text_extension']          = 'Расширения';
$_['text_success']            = 'Успешно: Вы изменили доставку Parcelforce 48!';
$_['text_edit']               = 'Редактировать доставку Parcelforce 48';

// Entry
$_['entry_rate']              = 'Parcelforce 48 ставки';
$_['entry_insurance']         = 'Parcelforce 48 ставки компенсации';
$_['entry_display_weight']    = 'Отображать вес доставки';
$_['entry_display_insurance'] = 'Отображать страхование';
$_['entry_display_time']      = 'Отображать время доставки';
$_['entry_tax_class']         = 'Налоговый класс';
$_['entry_geo_zone']          = 'Геозона';
$_['entry_status']            = 'Статус';
$_['entry_sort_order']        = 'Порядок сортировки';

// Help
$_['help_rate']               = 'Введите значения до 5,2 десятичных знаков. (12345.67) Пример: .1:1,.25:1.27 - Вес меньше или равен 0.1кг будет стоить 1.00, вес меньше или равен 0.25 г, но больше 0.1кг будет стоить 1.27. Не вводите КГ или символы.';
$_['help_insurance']          = 'Введите значения до 5,2 десятичных знаков. (12345.67) Пример: 34:0,100:1,250:2.25 - Страховое покрытие для значений корзины до 34 будет стоить дополнительно 0.00, эти значения более 100 и до 250 будут стоить дополнительно 2.25. Не вводите символы валюты.';
$_['help_display_weight']     = 'Вы хотите отобразить вес доставки? (например, вес при доставке: 2,7674 кг)';
$_['help_display_insurance']  = 'Хотите отобразить страховку доставки? (например, застрахованный до 500)';
$_['help_display_time']       = 'Вы хотите отобразить время доставки? (например, доставка в течение 3-5 дней)';

// Error
$_['error_permission']        = 'Предупреждение: У вас нет разрешения на изменение доставки Parcelforce 48!';

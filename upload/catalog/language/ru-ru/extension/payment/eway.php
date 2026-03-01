<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/payment/eway.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Text
$_['text_title']												= 'Оплата кредитной картой (eWAY)';
$_['text_credit_card']											= 'Данные кредитной карты';
$_['text_testing']												= 'Платёжный шлюз в режиме тестирования. С Вашей карты списание не производится.<br />Для реального заказа используйте другой способ оплаты.';

$_['text_basket']												= 'Корзина';
$_['text_checkout']												= 'Оформить заказ';
$_['text_success']												= 'Успешно';
$_['text_shipping']												= 'Доставка';

// Entry
$_['entry_cc_number']											= 'Номер карты';
$_['entry_cc_name']												= 'Имя владельца карты';
$_['entry_cc_expire_date']										= 'Срок действия карты';
$_['entry_cc_cvv2']												= 'Код безопасности карты (CVV2)';

$_['button_pay']												= 'Оплатить сейчас';

$_['text_card_accepted']										= 'Принимаемые карты: ';
$_['text_card_type_m']											= 'Mastercard';
$_['text_card_type_v']											= 'Visa (Credit/Debit/Electron/Delta)';
$_['text_card_type_c']											= 'Diners';
$_['text_card_type_a']											= 'American Express';
$_['text_card_type_j']											= 'JCB';
$_['text_card_type_pp']											= 'PayPal';
$_['text_card_type_mp']											= 'Masterpass';
$_['text_card_type_vm']											= 'Visa Checkout';
$_['text_type_help']											= 'После нажатия «Подтвердить заказ» Вы будете перенаправлены на ';

$_['text_transaction_failed']									= 'К сожалению, платёж отклонён.';

// Help
$_['help_cvv']													= 'Для Mastercard или Visa — последние три цифры в зоне подписи на обороте карты.';
$_['help_cvv_amex']												= 'Для American Express — четыре цифры на лицевой стороне карты.';

// Validation Error codes
$_['text_card_message_Please check the API Key and Password']   = 'Проверьте API Key и пароль';

$_['text_card_message_V6000']									= 'Неопределённая ошибка проверки';
$_['text_card_message_V6001']									= 'Неверный IP клиента';
$_['text_card_message_V6002']									= 'Неверный DeviceID';
$_['text_card_message_V6011']									= 'Неверная сумма';
$_['text_card_message_V6012']									= 'Неверное описание счёта';
$_['text_card_message_V6013']									= 'Неверный номер счёта';
$_['text_card_message_V6014']									= 'Неверная ссылка на счёт';
$_['text_card_message_V6015']									= 'Неверный код валюты';
$_['text_card_message_V6016']									= 'Требуется оплата';
$_['text_card_message_V6017']									= 'Требуется код валюты платежа';
$_['text_card_message_V6018']									= 'Неизвестный код валюты';
$_['text_card_message_V6021']									= 'Требуется имя владельца карты';
$_['text_card_message_V6022']									= 'Требуется номер карты';
$_['text_card_message_V6023']									= 'Требуется CVN';
$_['text_card_message_V6031']									= 'Неверный номер карты';
$_['text_card_message_V6032']									= 'Неверный CVN';
$_['text_card_message_V6033']									= 'Неверная дата окончания срока действия';
$_['text_card_message_V6034']									= 'Неверный номер выпуска';
$_['text_card_message_V6035']									= 'Неверная дата начала';
$_['text_card_message_V6036']									= 'Неверный месяц';
$_['text_card_message_V6037']									= 'Неверный год';
$_['text_card_message_V6040']									= 'Неверный Token Customer Id';
$_['text_card_message_V6041']									= 'Требуются данные клиента';
$_['text_card_message_V6042']									= 'Требуется имя клиента';
$_['text_card_message_V6043']									= 'Требуется фамилия клиента';
$_['text_card_message_V6044']									= 'Требуется код страны клиента';
$_['text_card_message_V6045']									= 'Требуется обращение клиента';
$_['text_card_message_V6046']									= 'Требуется Token Customer ID';
$_['text_card_message_V6047']									= 'Требуется RedirectURL';
$_['text_card_message_V6051']									= 'Неверное имя';
$_['text_card_message_V6052']									= 'Неверная фамилия';
$_['text_card_message_V6053']									= 'Неверный код страны';
$_['text_card_message_V6054']									= 'Неверная эл. почта';
$_['text_card_message_V6055']									= 'Неверный телефон';
$_['text_card_message_V6056']									= 'Неверный мобильный';
$_['text_card_message_V6057']									= 'Неверный факс';
$_['text_card_message_V6058']									= 'Неверное обращение';
$_['text_card_message_V6059']									= 'Неверный URL перенаправления';
$_['text_card_message_V6060']									= 'Неверный URL перенаправления';
$_['text_card_message_V6061']									= 'Неверная ссылка';
$_['text_card_message_V6062']									= 'Неверное название компании';
$_['text_card_message_V6063']									= 'Неверное описание должности';
$_['text_card_message_V6064']									= 'Неверная улица 1';
$_['text_card_message_V6065']									= 'Неверная улица 2';
$_['text_card_message_V6066']									= 'Неверный город';
$_['text_card_message_V6067']									= 'Неверный регион';
$_['text_card_message_V6068']									= 'Неверный почтовый индекс';
$_['text_card_message_V6069']									= 'Неверная эл. почта';
$_['text_card_message_V6070']									= 'Неверный телефон';
$_['text_card_message_V6071']									= 'Неверный мобильный';
$_['text_card_message_V6072']									= 'Неверные комментарии';
$_['text_card_message_V6073']									= 'Неверный факс';
$_['text_card_message_V6074']									= 'Неверный URL';
$_['text_card_message_V6075']									= 'Неверное имя в адресе доставки';
$_['text_card_message_V6076']									= 'Неверная фамилия в адресе доставки';
$_['text_card_message_V6077']									= 'Неверная улица 1 в адресе доставки';
$_['text_card_message_V6078']									= 'Неверная улица 2 в адресе доставки';
$_['text_card_message_V6079']									= 'Неверный город в адресе доставки';
$_['text_card_message_V6080']									= 'Неверный регион в адресе доставки';
$_['text_card_message_V6081']									= 'Неверный индекс в адресе доставки';
$_['text_card_message_V6082']									= 'Неверная эл. почта в адресе доставки';
$_['text_card_message_V6083']									= 'Неверный телефон в адресе доставки';
$_['text_card_message_V6084']									= 'Неверная страна в адресе доставки';
$_['text_card_message_V6091']									= 'Неизвестный код страны';
$_['text_card_message_V6100']									= 'Неверное имя на карте';
$_['text_card_message_V6101']									= 'Неверный месяц окончания срока';
$_['text_card_message_V6102']									= 'Неверный год окончания срока';
$_['text_card_message_V6103']									= 'Неверный месяц начала';
$_['text_card_message_V6104']									= 'Неверный год начала';
$_['text_card_message_V6105']									= 'Неверный номер выпуска карты';
$_['text_card_message_V6106']									= 'Неверный CVN карты';
$_['text_card_message_V6107']									= 'Неверный AccessCode';
$_['text_card_message_V6108']									= 'Неверный CustomerHostAddress';
$_['text_card_message_V6109']									= 'Неверный UserAgent';
$_['text_card_message_V6110']									= 'Неверный номер карты';
$_['text_card_message_V6111']									= 'Несанкционированный доступ к API, счёт не сертифицирован PCI';
$_['text_card_message_V6112']									= 'Лишние данные карты';
$_['text_card_message_V6113']									= 'Неверная транзакция для возврата';
$_['text_card_message_V6114']									= 'Ошибка проверки шлюза';
$_['text_card_message_V6115']									= 'Неверный DirectRefundRequest, ID транзакции';
$_['text_card_message_V6116']									= 'Неверные данные карты в исходной транзакции';
$_['text_card_message_V6124']									= 'Неверные позиции. Суммы не совпадают с TotalAmount';
$_['text_card_message_V6125']									= 'Выбранный способ оплаты не включён';
$_['text_card_message_V6126']									= 'Неверный зашифрованный номер карты';
$_['text_card_message_V6127']									= 'Неверный зашифрованный CVN';
$_['text_card_message_V6128']									= 'Неверный метод для типа оплаты';
$_['text_card_message_V6129']									= 'Транзакция не авторизована для списания/отмены';
$_['text_card_message_V6130']									= 'Ошибка данных клиента';
$_['text_card_message_V6131']									= 'Ошибка данных доставки';
$_['text_card_message_V6132']									= 'Транзакция уже завершена или отменена';
$_['text_card_message_V6133']									= 'Оформление недоступно для данного типа оплаты';
$_['text_card_message_V6134']									= 'Неверный ID транзакции для списания/отмены';
$_['text_card_message_V6135']									= 'Ошибка PayPal при обработке возврата';
$_['text_card_message_V6140']									= 'Счёт продавца приостановлен';
$_['text_card_message_V6141']									= 'Неверные данные аккаунта PayPal или подпись API';
$_['text_card_message_V6142']									= 'Авторизация недоступна для банка/филиала';
$_['text_card_message_V6150']									= 'Неверная сумма возврата';
$_['text_card_message_V6151']									= 'Сумма возврата превышает исходную транзакцию';

// Payment failure messages
$_['text_card_message_D4401']									= 'Обратитесь в банк-эмитент';
$_['text_card_message_D4402']									= 'Обратитесь в банк-эмитент (спец.)';
$_['text_card_message_D4403']									= 'Торговец не найден';
$_['text_card_message_D4404']									= 'Изъять карту';
$_['text_card_message_D4405']									= 'Отклонено банком';
$_['text_card_message_D4406']									= 'Ошибка';
$_['text_card_message_D4407']									= 'Изъять карту (спец.)';
$_['text_card_message_D4409']									= 'Запрос в обработке';
$_['text_card_message_D4412']									= 'Неверная транзакция';
$_['text_card_message_D4413']									= 'Неверная сумма';
$_['text_card_message_D4414']									= 'Неверный номер карты';
$_['text_card_message_D4415']									= 'Банк-эмитент не найден';
$_['text_card_message_D4419']									= 'Повторите последнюю транзакцию';
$_['text_card_message_D4421']									= 'Метод не принят';
$_['text_card_message_D4422']									= 'Подозрение на сбой';
$_['text_card_message_D4423']									= 'Недопустимая комиссия';
$_['text_card_message_D4425']									= 'Запись не найдена';
$_['text_card_message_D4430']									= 'Ошибка формата';
$_['text_card_message_D4431']									= 'Банк не поддерживается';
$_['text_card_message_D4433']									= 'Карта просрочена';
$_['text_card_message_D4434']									= 'Подозрение на мошенничество, изъять карту';
$_['text_card_message_D4435']									= 'Свяжитесь с эквайером, изъять карту';
$_['text_card_message_D4436']									= 'Ограниченная карта, изъять';
$_['text_card_message_D4437']									= 'Свяжитесь с отделом безопасности, изъять карту';
$_['text_card_message_D4438']									= 'Превышено число попыток PIN';
$_['text_card_message_D4439']									= 'Нет кредитного счёта';
$_['text_card_message_D4440']									= 'Функция не поддерживается';
$_['text_card_message_D4441']									= 'Потерянная карта';
$_['text_card_message_D4442']									= 'Нет универсального счёта';
$_['text_card_message_D4443']									= 'Украденная карта';
$_['text_card_message_D4444']									= 'Нет инвестиционного счёта';
$_['text_card_message_D4451']									= 'Недостаточно средств';
$_['text_card_message_D4452']									= 'Нет расчётного счёта';
$_['text_card_message_D4453']									= 'Нет сберегательного счёта';
$_['text_card_message_D4454']									= 'Карта просрочена';
$_['text_card_message_D4455']									= 'Неверный PIN';
$_['text_card_message_D4456']									= 'Карта не найдена';
$_['text_card_message_D4457']									= 'Операция не разрешена держателю';
$_['text_card_message_D4458']									= 'Операция не разрешена терминалу';
$_['text_card_message_D4460']									= 'Эквайеру связаться с эмитентом';
$_['text_card_message_D4461']									= 'Превышен лимит снятия';
$_['text_card_message_D4462']									= 'Ограниченная карта';
$_['text_card_message_D4463']									= 'Нарушение безопасности';
$_['text_card_message_D4464']									= 'Неверная исходная сумма';
$_['text_card_message_D4466']									= 'Эквайеру связаться с эмитентом (безопасность)';
$_['text_card_message_D4467']									= 'Изъять карту';
$_['text_card_message_D4475']									= 'Превышено число попыток PIN';
$_['text_card_message_D4482']									= 'Ошибка проверки CVV';
$_['text_card_message_D4490']									= 'Обработка отсечки';
$_['text_card_message_D4491']									= 'Банк-эмитент недоступен';
$_['text_card_message_D4492']									= 'Невозможно направить транзакцию';
$_['text_card_message_D4493']									= 'Невозможно завершить (нарушение закона)';
$_['text_card_message_D4494']									= 'Дубликат транзакции';
$_['text_card_message_D4496']									= 'Системная ошибка';
$_['text_card_message_D4497']									= 'Ошибка MasterPass';
$_['text_card_message_D4498']									= 'Ошибка создания транзакции PayPal';
$_['text_card_message_D4499']									= 'Неверная транзакция для Auth/Void';

$_['text_card_message_F7000']									= 'Неопределённая ошибка мошенничества';
$_['text_card_message_F7001']									= 'Оспоренное мошенничество';
$_['text_card_message_F7002']									= 'Мошенничество по стране';
$_['text_card_message_F7003']									= 'Мошенничество: страна высокого риска';
$_['text_card_message_F7004']									= 'Мошенничество: анонимный прокси';
$_['text_card_message_F7005']									= 'Мошенничество: прозрачный прокси';
$_['text_card_message_F7006']									= 'Мошенничество: бесплатная эл. почта';
$_['text_card_message_F7007']									= 'Мошенничество: международная транзакция';
$_['text_card_message_F7008']									= 'Мошенничество: оценка риска';
$_['text_card_message_F7009']									= 'Мошенничество: отклонено';
$_['text_card_message_F7010']									= 'Отклонено правилами PayPal по мошенничеству';
$_['text_card_message_F9010']									= 'Страна плательщика высокого риска';
$_['text_card_message_F9011']									= 'Страна карты высокого риска';
$_['text_card_message_F9012']									= 'IP клиента высокого риска';
$_['text_card_message_F9013']									= 'Эл. почта высокого риска';
$_['text_card_message_F9014']									= 'Страна доставки высокого риска';
$_['text_card_message_F9015']									= 'Несколько карт на одну эл. почту';
$_['text_card_message_F9016']									= 'Несколько карт на один адрес';
$_['text_card_message_F9017']									= 'Несколько эл. почт на одну карту';
$_['text_card_message_F9018']									= 'Несколько эл. почт на один адрес';
$_['text_card_message_F9019']									= 'Несколько адресов на одну карту';
$_['text_card_message_F9020']									= 'Несколько адресов на одну эл. почту';
$_['text_card_message_F9021']									= 'Подозрительное имя клиента';
$_['text_card_message_F9022']									= 'Подозрительная фамилия клиента';
$_['text_card_message_F9023']									= 'Транзакция отклонена';
$_['text_card_message_F9024']									= 'Несколько транзакций с одного адреса (известная карта)';
$_['text_card_message_F9025']									= 'Несколько транзакций с одного адреса (новая карта)';
$_['text_card_message_F9026']									= 'Несколько транзакций с одной эл. почты (новая карта)';
$_['text_card_message_F9027']									= 'Несколько транзакций с одной эл. почты (известная карта)';
$_['text_card_message_F9028']									= 'Несколько транзакций с новой карты';
$_['text_card_message_F9029']									= 'Несколько транзакций с известной карты';
$_['text_card_message_F9030']									= 'Несколько транзакций с одной эл. почты';
$_['text_card_message_F9031']									= 'Несколько транзакций с одной карты';
$_['text_card_message_F9032']									= 'Неверная фамилия клиента';
$_['text_card_message_F9033']									= 'Неверная улица оплаты';
$_['text_card_message_F9034']									= 'Неверная улица доставки';
$_['text_card_message_F9037']									= 'Подозрительная эл. почта клиента';

// Error
$_['error_payment']                                             = 'Ошибка оплаты';
$_['error_empty_name']                                          = 'Укажите имя владельца карты';
$_['error_invalid_card']                                        = 'Некорректный номер карты';
$_['error_expiry_date']                                         = 'Срок действия карты истёк';
$_['error_cvv']                                                 = 'Некорректный CVV/CVC';
$_['error_payment_text']                                        = 'Ошибка при завершении платежа';

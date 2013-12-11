<?php

$mod_strings['LBL_MAP'] = 'Карта';
$mod_strings['LBL_MAPS'] = 'Карты';
$mod_strings['LBL_MODULE_NAME'] = 'Карты';
$mod_strings['LBL_MODULE_TITLE'] = 'Карты: Главная';
$mod_strings['LBL_MODULE_ID'] = 'Карты';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Карты';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Пользовательская метка';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Участок карты';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Карты';

$mod_strings['LBL_FLEX_RELATE'] = 'Показать на карте адрес (центр)';
$mod_strings['LBL_MODULE_TYPE'] = 'Отображать на карте объекты:';
$mod_strings['LBL_DISTANCE'] = 'Отображать объекты, находящиеся в радиусе:';
$mod_strings['LBL_UNIT_TYPE'] = 'Единицы измерения расстояния:';

$mod_strings['LBL_MAP_ACTION'] = 'Map It';
$mod_strings['LBL_MAP_DISPLAY'] = 'Отобразить карту';
$mod_strings['LBL_MAP_LEGEND'] = 'Обозначение центральной точки:';
$mod_strings['LBL_MAP_USERS'] = 'Пользователи:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Другие обозначения:';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Ответственный(ая):';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Проложить маршрут';

$mod_strings['LNK_NEW_MAP'] = 'Добавить новую карту';
$mod_strings['LNK_NEW_RECORD'] = 'Добавить новую карту';
$mod_strings['LNK_MAP_LIST'] = 'Карты';
$mod_strings['LNK_IMPORT_MAPS'] = 'Импорт карт';
$mod_strings['LBL_MAP_GEOCODE_ADDRESSES'] = 'Геокодировать адреса';
$mod_strings['LBL_MAP_DONATE'] = 'Помочь проекту';
$mod_strings['LBL_MAP_DONATE_TO_THIS_PROJECT'] = 'Помочь проекту';
$mod_strings['LBL_BUG_FIX'] = 'Bug Fix'; ///

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Тест геокодирования';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Отобразить объекты';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = '--не указано--';
$mod_strings['LBL_MAP_ADDRESS'] = 'Адрес';
$mod_strings['LBL_MAP_PROCESS'] = 'Запустить';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Last Geocode Status'; ///
$mod_strings['LBL_MAP_GEOCODED_COUNTS'] = 'Результаты геокодирования';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Результаты геокодирования';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Модуль';
$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Всего';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Сбросить';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'В приведённой таблице показано количество геокодированных записей по модулям, сгруппированных в зависимости от полученных результатов. '. 
'Помните, что Карты Google накладывают ограничение на определение количества координат, равное 2500 запросам в сутки для одного ip-адреса. '.
' Данный модуль кэширует результаты геокодирования для уменьшения количества необходимых запросов.';
$mod_strings['LBL_CRON_URL'] = 'CRON URL';
$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Для автоматического регулярного геокодирования рекомендуется прописать соответствующее задание для CRON и выполнять его ежедневно во время наименьшей загрузки сервера. '.
'Указанный URL предназначен для использования в соответствующем задании планировщика. '.
'За более подобной информацией обратитесь к документации системы.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Экспорт адресов';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'При необходимости геокодирования адресов сторонними утилитами, вы можете воспользоваться следующими ссылками для экспорта адресов из соответствующих модулей.  '.
'По окончании геокодирования импортируйте обновлённые адреса через модуль <b>Кэш адресов</b>. '.
'Помните, что модуль <b>Кэш адресов</b> используется как необязательное дополнение к основному функционалу карт. Вся информация, полученная в результате геокодирования, хранится в соответствующем модуле.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Кэш адресов';


$mod_strings['LBL_CONFIG_TITLE'] = 'Параметры конфигурации';
$mod_strings['LBL_CONFIG_SAVED'] = 'Настройки успешно сохранены!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Расчётный адрес';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Отгрузочный адрес';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Основной адрес';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Другой адрес';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex Relate';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Address (Simple, Users)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Custom (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Вкл.';
$mod_strings['LBL_DISABLED'] = 'Выкл.';
$mod_strings['LBL_DEFAULT'] = 'По умолчанию:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'По умолчанию:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Обрабатываемые при геокодировании модули:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Обрабатываемые при геокодировании таблицы:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = 'Тип адреса: Указание типа адреса, который будет обрабатываться в процессе геокодирования. Возможные значения: расчётный, отгрузочный, основной, другой, связанный.';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Тип адреса для ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Тип адреса для Контрагентов:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Тип адреса для Контактов:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Тип адреса для Предварит. контактов:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Тип адреса для Сделок:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(соответствующего Контрагента)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Тип адреса для Обращений:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Тип адреса для Проектов:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(соответствующего Контрагента/Сделки)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Тип адреса для Встреч:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Тип адреса для Адресатов:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Обрабатывается адрес из модуля, связанного с данным мероприятием';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = 'Настройка названия группы меток: Указание названия для меток, относящихся к определённому модулю. Например: ответственный(ая), отрасль, статус, стадия продаж, приоритет';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Название группы меток для ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Название группы меток для Контрагентов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Название группы меток для Контактов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Название группы меток для Предварит. контактов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Название группы меток для Сделок:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Название группы меток для Обращений:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Название группы меток для Проектов:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Название группы меток для Встреч:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Название группы меток для Адресатов:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Параметры геокодирования:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Лимит геокодирования:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = 'Установка лимита на количество записей, получаемых запросом для геокодирования';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Лимит геокодирования для Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = 'Установка лимита на количество записей при использовании Google Maps API при геокодировании.';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Лимит экспортируемых адресов:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = 'Установка лимита на количество экспортируемых адресов.';

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Параметры кэша адресов:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Использование кэша адресов при чтении:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = 'Разрешить модулю кэша адресов получать данные из соответствующей таблицы.';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Использование кэша адресов при записи:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = 'Разрешить модулю кэша адресов записывать данные в соответствующую таблицу.';

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Параметры хуков (Logic Hooks):';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Использование хуков: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = 'Разрешить хукам обновление записей. Рекомендуется отключить данный параметр при обновлении системы.';

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Параметры меток:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = 'Лимит меток:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = 'Установка лимита на количество одновременно отображаемых на карте меток.';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = 'Автоматически устанавливаемая широта:';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = 'Автоматическое позиционирование центральной части карты на указанную широту при создании нового объекта (метки, участка карты и т.д.).';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = 'Автоматически устанавливаемая долгота:';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = 'Автоматическое позиционирование центральной части карты на указанную долготу при создании нового объекта (метки, участка карты и т.д.).';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = 'Единицы измерения расстояния:';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = 'Установка единиц измерения расстояния. Возможные варианты: километры или мили.';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = 'Расстояние по умолчанию (радиус окружности):';
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = 'При просмотре карты отображать выбранные объекты, расположенные от центра карты на указанном расстоянии.';
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = 'Разница в отображении координат дублированных меток:';
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = 'Установка смещения широты и долготы для меток с одинаковыми координатами.';
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = 'Размер ячейки сетки при кластеризации меток:';
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = 'Установка размера ячейки сетки (в пикселях). Метки, расположенные в границах одной ячейки, считаются единым кластером меток.';
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = 'Максимальный масштаб для кластеризации:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = 'Установка максимального масштаба карты, при котором метки будут отображаться единым кластером.';
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = 'Примечание: все сохранённые параметры находятся в таблице <b>config</b>, категория <b>jjwg</b>. Файл controller.php для перезаписи параметров больше не используется.';

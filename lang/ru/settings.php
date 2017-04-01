<?php
/**
 * Русский языковый файл для Userhomepage plugin
 * @author: Artem Dobryakov <d0br0t4@gmail.com>
 * @license: CC Attribution-Share Alike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0/>
 */

    $lang['create_private_ns'] = 'Создать приватное пространство пользователя (дважды проверьте все параметры перед включением)?';
    $lang['use_name_string'] = 'Используйте полное имя пользователя вместо логина для своего приватного пространства.';
    $lang['use_start_page'] = 'Используйте имя стартовой страницы вики для начальной страницы каждого приватного пространства (в противном случае используется имя приватного пространства).';
    $lang['users_namespace'] = 'Пространство имен, в котором создаются пользовательские пространства имен.';
    $lang['group_by_name'] = 'Группировать пространства имен пользователей по первому символу имени пользователя?';
    $lang['edit_before_create'] = 'Разрешить пользователям редактировать начальную страницу своего приватного пространства при создании (будет работать только в том случае, если публичная страница не создается одновременно).';
    $lang['acl_all_private'] = 'Разрешения для группы @ALL в приватных пространствах';
    $lang['acl_all_private_o_0'] = 'Нет (по умолчанию)';
    $lang['acl_all_private_o_1'] = 'Читать';
    $lang['acl_all_private_o_2'] = 'Редактировать';
    $lang['acl_all_private_o_4'] = 'Создать';
    $lang['acl_all_private_o_8'] = 'Загрузить';
    $lang['acl_all_private_o_16'] = 'Удалить';
    $lang['acl_all_private_o_noacl'] = 'Нет автоматического ACL';
    $lang['acl_user_private'] = 'Разрешения для группы @user в приватных пространствах';
    $lang['acl_user_private_o_0'] = 'Нет (по умолчанию)';
    $lang['acl_user_private_o_1'] = 'Читать';
    $lang['acl_user_private_o_2'] = 'Редактировать';
    $lang['acl_user_private_o_4'] = 'Создать';
    $lang['acl_user_private_o_8'] = 'Загрузить';
    $lang['acl_user_private_o_16'] = 'Удалить';
    $lang['acl_user_private_o_noacl'] = 'Нет автоматического ACL';
    $lang['groups_private'] = 'Разделенный запятыми список групп пользователей, связанных с созданием приватного пространства (оставьте пустым, чтобы применить выше настройки ко всем пользователям).';
    $lang['create_public_page'] = 'Создать публичную страницу пользователя?';
    $lang['public_pages_ns'] = 'Пространство имен, в котором создаются общедоступные страницы.';
    $lang['acl_all_public'] = 'Разрешения для группы @ALL на публичных страницах';
    $lang['acl_all_public_o_0'] = 'Нет';
    $lang['acl_all_public_o_1'] = 'Читать (по умолчанию)';
    $lang['acl_all_public_o_2'] = 'Редактировать';
    $lang['acl_all_public_o_noacl'] = 'Нет автоматического ACL';
    $lang['acl_user_public'] = 'Разрешения для группы @user на публичных страницах';
    $lang['acl_user_public_o_0'] = 'Нет';
    $lang['acl_user_public_o_1'] = 'Читать (по умолчанию)';
    $lang['acl_user_public_o_2'] = 'Редактировать';
    $lang['acl_user_public_o_noacl'] = 'Нет автоматического ACL';
    $lang['groups_public'] = 'Разделенный запятыми список групп пользователей, связанных с созданием публичных страниц (оставьте пустым, чтобы применить вышеуказанные настройки ко всем пользователям).';
    $lang['templates_path'] = 'Относительный путь из  [<code>savedir</code>] где будут храниться шаблоны  (userhomepage_private.txt и userhomepage_public.txt). Пример: <code>./pages/user</code> или <code>../lib/plugins/userhomepage</code>.';
    $lang['templatepath'] = 'Путь к шаблону из версии 3.0.4. Если этот файл существует, он будет использоваться в качестве источника по умолчанию для нового шаблона начальной страницы пространства имен (очистите путь, если вы этого не хотите).';
    $lang['acl_all_templates'] = 'Разрешения для группы @ALL на шаблонах (если они хранятся в <code>data/pages...</code>)';
    $lang['acl_all_templates_o_0'] = 'Нет';
    $lang['acl_all_templates_o_1'] = 'Читать (по умолчанию)';
    $lang['acl_all_templates_o_2'] = 'Редактировать';
    $lang['acl_all_templates_o_noacl'] = 'Нет автоматического ACL';
    $lang['acl_user_templates'] = 'Разрешения для группы @user на шаблонах (если они хранятся в <code>data/pages...</code>)';
    $lang['acl_user_templates_o_0'] = 'Нет';
    $lang['acl_user_templates_o_1'] = 'Читать (по умолчанию)';
    $lang['acl_user_templates_o_2'] = 'Редактировать';
    $lang['acl_user_templates_o_noacl'] = 'Нет автоматического ACL';
    $lang['no_acl'] = 'Нет автоматической настройки ACL, но вам придется удалить созданные вручную. Не забудьте установить некоторые ACL для шаблонов.';
    $lang['redirection'] = 'Включить перенаправление (даже если отключено, оно все равно будет появляться при создании страниц).';
    $lang['action'] = 'Действие при первом перенаправлении на публичную страницу после её создания (или на приватную домашнюю страницу).';
    $lang['action_o_edit'] = 'Редактировать (по умолчанию)';
    $lang['action_o_show'] = 'Показать';
    $lang['userlink_replace'] = 'Включить замену ссылки [<code>Logged in as</code>], в зависимости от страниц, созданных Userhomepage (работает только, если для параметра  <code>showuseras</code> установлена ссылка).';
    $lang['userlink_classes'] = 'Список (разделенныq пробелами) категорий CSS для применения к [<code>Logged in as</code>] interwiki ссылок (по умолчанию: <code>interwiki iw_user wikilink1</code>).';
    $lang['userlink_fa'] = 'Использовать иконки Fontawesome вместо изображений (Fontawesome должен быть установлен по шаблону или плагину)?';

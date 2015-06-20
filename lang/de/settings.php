<?php
/**
 * German settings file for Userhomepage plugin
 * Previous authors: James GuanFeng Lin, Mikhail I. Izmestev, Daniel Stonier
 * @author: Simon Delage <simon.geekitude@gmail.com>
 * @license: CC Attribution-Share Alike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0/>
 */

    $lang['create_private_ns'] = 'Privaten Namespace für die Benutzer anlegen (alle anderen Optionen überprüfen, bevor diese Option aktiviert wird!)';
    $lang['use_name_string'] = 'Den vollen Namen des Benutzers statt des Logins für seinen privaten Namespace benutzen';
    $lang['use_start_page'] = 'Den Startseitennamen des Wikis für die Startseiten der privaten Namespaces benutzen (andernfalls wird der Name des privaten Namespace benutzt).';
    $lang['users_namespace'] = 'Namespace, unter dem die privaten Namespaces der Benutzer angelegt werden';
    $lang['group_by_name'] = 'Namespaces der Benutzer nach dem ersten Buchstaben des Benutzernamens gruppieren';
    $lang['edit_before_create'] = 'Benutzern erlauben, die Startseite ihres privaten Namespace beim Anlegen zu bearbeiten (funktioniert nur, wenn nicht gleichzeitig eine öffentliche Seite angelegt wird)';
    $lang['acl_all_private'] = 'Berechtigungen der Gruppe @ALL für private Namespaces';
    $lang['acl_all_private_o_0'] = 'Keine (Standard)';
    $lang['acl_all_private_o_1'] = 'Lesen';
    $lang['acl_all_private_o_2'] = 'Bearbeiten';
    $lang['acl_all_private_o_4'] = 'Anlegen';
    $lang['acl_all_private_o_8'] = 'Hochladen';
    $lang['acl_all_private_o_16'] = 'Entfernen';
    $lang['acl_all_private_o_noacl'] = 'Kein automatischer ACL-Eintrag';
    $lang['acl_user_private'] = 'Berechtigungen der Gruppe @user für private Namespaces';
    $lang['acl_user_private_o_0'] = 'Keine (Standard)';
    $lang['acl_user_private_o_1'] = 'Lesen';
    $lang['acl_user_private_o_2'] = 'Bearbeiten';
    $lang['acl_user_private_o_4'] = 'Anlegen';
    $lang['acl_user_private_o_8'] = 'Hochladen';
    $lang['acl_user_private_o_16'] = 'Entfernen';
    $lang['acl_user_private_o_noacl'] = 'Kein automatischer ACL-Eintrag';
    $lang['create_public_page'] = 'Öffentliche Seite für die Benutzer anlegen';
    $lang['public_pages_ns'] = 'Namespace, unter dem die öffentlichen Seiten der Benutzer angelegt werden';
    $lang['acl_all_public'] = 'Berechtigungen der Gruppe @ALL für öffentliche Seiten';
    $lang['acl_all_public_o_0'] = 'Keine';
    $lang['acl_all_public_o_1'] = 'Lesen (Standard)';
    $lang['acl_all_public_o_2'] = 'Bearbeiten';
    $lang['acl_all_public_o_noacl'] = 'Kein automatischer ACL-Eintrag';
// TRANSLATION NEEDED    $lang['acl_user_public'] = 'Permissions for @user group on Public Pages';
    $lang['acl_user_public_o_0'] = 'Keine';
    $lang['acl_user_public_o_1'] = 'Lesen (Standard)';
    $lang['acl_user_public_o_2'] = 'Bearbeiten';
    $lang['acl_user_public_o_noacl'] = 'Kein automatischer ACL-Eintrag';
// (RE)TRANSLATION NEEDED    $lang['templates_path'] = 'Relative path from [<code>savedir</code>] where templates will be stored (userhomepage_private.txt and userhomepage_public.txt). Examples: <code>./pages/user</code> or <code>../lib/plugins/userhomepage</code>.';
    $lang['templatepath'] = 'Templatepfad aus Version 3.0.4. Exisitert diese Datei, wird sie als Template für die Startseite neuer privater Namespaces verwendet (löschen, wenn dies nicht gewünscht wird)';
    $lang['acl_all_templates'] = 'Berechtigungen der Gruppe @ALL für Templates, die in <code>data/pages...</code> liegen';
    $lang['acl_all_templates_o_0'] = 'Keine';
    $lang['acl_all_templates_o_1'] = 'Lesen (Standard)';
    $lang['acl_all_templates_o_2'] = 'Bearbeiten';
    $lang['acl_all_templates_o_noacl'] = 'Kein automatischer ACL-Eintrag';
    $lang['acl_user_templates'] = 'Berechtigungen der Gruppe @user für Templates, die in <code>data/pages...</code> liegen';
    $lang['acl_user_templates_o_0'] = 'Keine';
    $lang['acl_user_templates_o_1'] = 'Lesen (Standard)';
    $lang['acl_user_templates_o_2'] = 'Bearbeiten';
    $lang['acl_user_templates_o_noacl'] = 'Kein automatischer ACL-Eintrag';
    $lang['no_acl'] = 'Automatische Erstellung von ACL-Einträgen deaktivieren; bereits erstellte Einträge müssen manuell entfernt werden. Vergessen Sie nicht, ggf. ACL-Einträge für die Templates zu erstellen, falls diese in <code>data/pages...</code> liegen.';
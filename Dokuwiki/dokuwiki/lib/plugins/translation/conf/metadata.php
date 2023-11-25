<?php
/**
 * Options for the translation plugin
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 */

$meta['translations']  = array('string','_pattern' => '/^(|[a-zA-Z\- ,]+)$/'); // Список языков для перевода
$meta['translationns'] = array('string','_pattern' => '/^(|[\w:\-]+)$/'); // Пространство имен для перевода
$meta['skiptrans']     = array('string'); // Страницы, которые следует пропустить при переводе
$meta['dropdown']      = array('onoff'); // Отображать ли выпадающий список для выбора языка
$meta['display']       = array('multicheckbox', '_choices' => array('langcode','name','flag','title')); // Какие сведения отображать в меню выбора языка
$meta['translateui']   = array('onoff'); // Переводить ли пользовательский интерфейс DokuWiki
$meta['redirectstart'] = array('onoff'); // Перенаправлять ли пользователей на переведенную версию стартовой страницы
$meta['checkage']      = array('onoff'); // Предупреждать ли пользователей о старых переводах
$meta['about']         = array('string','_pattern' => '/^(|[\w:\-]+)$/'); // Страница, объясняющая процесс перевода
$meta['localabout']    = array('onoff'); // Есть ли разные страницы "О проекте" для каждого языка
$meta['copytrans']     = array('onoff'); // Копировать ли оригинальный текст при создании нового перевода
$meta['show_path']     = array('onoff'); // Отображать ли путь к текущей странице
?>



<?php

class BackEndController extends Controller {

    // лейаут
    public $layout='//layouts/main';
    // меню
    public $menu = array();
    // крошки
    public $breadcrumbs = array();
    
    public $templatePath = '/admin/template'; 

    /*
      Фильтры
     */

    public function filters() {
        return array(
            'accessControl',
        );
    }

    /*
      Права доступа
     */

    public function accessRules() {
        return array(
            // даем доступ только админам
            array(
                'allow',
                 'users' => array('*'),
            ),
            // всем остальным разрешаем посмотреть только на страницу авторизации
            array(
                'allow',
                'actions' => array('login'),
                'users' => array('?'),
            ),
            // запрещаем все остальное
            array(
                'deny',
                'users' => array('*'),
            ),
        );
    }

}
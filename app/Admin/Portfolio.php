<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 09.09.16
 * Time: 18:08
 */
use App\Portfolio;
use App\Tags;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Portfolio::class, function (ModelConfiguration $model) {
    $model->setTitle('Портфоліо');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-primary');
        $display->setColumns([
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::text('tag.title')->append(AdminColumn::filter('tag_id'))->setLabel('Теги'),
        ]);

        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::form()->setItems([
            AdminFormElement::select('tag_id', 'Тег')->setModelForOptions('App\Tags')->setDisplay('title'),
            AdminFormElement::text('title', 'Заголовок'),
            AdminFormElement::image('img', 'Обкладинка'),
            AdminFormElement::ckeditor('text', 'Текст'),
            AdminFormElement::date('date', 'Дата створення роботи'),
        ]);

        $form->getButtons()
            ->setSaveButtonText('Зберегти')
            ->hideSaveAndCloseButton();

        return $form;
    });
});

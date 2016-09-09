<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 09.09.16
 * Time: 19:08
 */
use App\Blog;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Blog::class, function (ModelConfiguration $model) {
    $model->setTitle('Блог');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::text('subtitle')->setLabel('Підзаголовок')
        ]);
        return $display;
    });
//        // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::form()->setItems([
            AdminFormElement::text('title', 'Заголовок'),
            AdminFormElement::text('subtitle', 'Підзаголовок'),
            AdminFormElement::image('phoneimg', 'Фон'),
            AdminFormElement::textarea('mintext', 'Короткий текст'),
            AdminFormElement::ckeditor('text', 'Текст'),
        ]);

        $form->getButtons()
            ->setSaveButtonText('Зберегти')
            ->hideSaveAndCloseButton();

        return $form;
    });
});
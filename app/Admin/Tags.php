<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 09.09.16
 * Time: 17:43
 */
use App\Tags;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Tags::class, function (ModelConfiguration $model) {
    $model->setTitle('Теги з портфоліо');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::link('title')->setLabel('Текст'),
            AdminColumn::text('class')->setLabel('Посилання En')
        ]);
        return $display;
    });
//        // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::form()->setItems([
            AdminFormElement::text('title', 'Текст'),
            AdminFormElement::text('class', 'Посилання En'),
        ]);

        $form->getButtons()
            ->setSaveButtonText('Зберегти')
            ->hideSaveAndCloseButton();

        return $form;
    });
});
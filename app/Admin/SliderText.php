<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 26.09.16
     * Time: 10:48
     */
    use App\SliderText;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(SliderText::class, function (ModelConfiguration $model) {
        $model->setTitle('Заголовок');
        $model->onDisplay(function () {
            $display = AdminDisplay::table();
            $display->setHtmlAttribute('class', 'table-bordered table-success table-hover');
            $display->setApply(function ($query) {
                $query->orderBy('order', 'asc');
            });
            $display->setColumns([
                AdminColumn::text('id')
                    ->setLabel('#')
                    ->setWidth('30px'),
                AdminColumn::link('title')->setLabel('Заголовок'),
                AdminColumn::order()
                    ->setLabel('Order')
                    ->setHtmlAttribute('class', 'text-center')
                    ->setWidth('100px'),
            ]);

            return $display;
        });
        $model->onCreateAndEdit(function ($id = null) {
            $form = AdminForm::form();
            $form->setItems([
                AdminFormElement::text('title', 'Title')->required(),
            ]);

            return $form;
        });
    })
        ->addMenuPage(SliderText::class)
        ->setIcon('fa fa-globe');
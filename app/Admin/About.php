<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 26.09.16
     * Time: 11:36
     */
    use App\About;
    use SleepingOwl\Admin\Model\ModelConfiguration;

    AdminSection::registerModel(About::class, function (ModelConfiguration $model) {
        $model->setTitle('Про мене');
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
                AdminColumn::link('text')->setLabel('Tекст'),
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
                AdminFormElement::textarea('text', 'Tекст'),
            ]);

            return $form;
        });
    })
        ->addMenuPage(About::class)
        ->setIcon('fa fa-globe');
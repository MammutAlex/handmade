<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use SleepingOwl\Admin\Traits\OrderableModel;

    class SliderText extends Model
    {
        use OrderableModel;

        protected $fillable = ['title'];

        protected $hidden = [
            'created_at',
            'updated_at'
        ];

        public function getOrderField()
        {
            return 'order';
        }
    }

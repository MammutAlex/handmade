<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use SleepingOwl\Admin\Traits\OrderableModel;

    class About extends Model
    {
        use OrderableModel;

        protected $fillable = [
            'text'
        ];

        protected $hidden = [
            'created_at',
            'updated_at'
        ];

        public function getOrderField()
        {
            return 'order';
        }
    }

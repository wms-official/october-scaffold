<?php namespace Wms\Duplicate\Traits;

trait Duplicate {

    public function formExtendFieldsBefore($formField) {
        parent::formExtendFieldsBefore($formField);
        if ($model_id = get('id')) {
            $model = get_class($formField->model);
            $model = $model::find($model_id);
            $attributes = $model->getAttributes();
            unset($attributes['id']);
            $formField->model->attributes = $attributes;
        }
    }
}
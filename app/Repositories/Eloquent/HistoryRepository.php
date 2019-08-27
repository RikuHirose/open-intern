<?php

namespace App\Repositories\Eloquent;

use App\Repositories\HistoryRepositoryInterface;
use App\Models\History;

class HistoryRepository implements HistoryRepositoryInterface
{

    public function __construct()
    {
    }

    public function getBlankModel()
    {
        return new History();
    }

    public function create($input)
    {
        $history = $this->history->create($input);

        return $history;
    }

    public function update($history, $input)
    {
      $history->fill($input)->save();

      return $history;
    }

    public function findById($id)
    {
        $history = $this->history->where('id', $id)->first();

        return $history;
    }

    public function getHistoryIdOptions()
    {
        $history_id_options = [];
        $tmp = History::orderBy('id')->get(['id', 'name']);
        if ($tmp->isNotEmpty()) {
            $list = $tmp->all();
            foreach ($list as $v) {
                if ($v->name == null) {
                    $history_id_options[$v->id] = $v->id;
                } else {
                    $history_id_options[$v->id] = $v->name;
                }
            }
        }

        return $history_id_options;
    }

}
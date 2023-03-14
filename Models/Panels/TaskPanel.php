<?php

namespace Modules\Job\Models\Panels;

use Illuminate\Http\Request;
use Modules\Xot\Contracts\RowsContract;
use Illuminate\Contracts\Support\Renderable;


use Modules\Cms\Models\Panels\XotBasePanel;

class TaskPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Job\Models\Task';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = array (
);

    /**
     * The relationships that should be eager loaded on index queries.
     *
     */
    public function with():array {
        return [];
    }

    public function search() :array {

        return [];
    }

    /**
     * on select the option id
     *
     * quando aggiungi un campo select, è il numero della chiave
     * che viene messo come valore su value="id"
     *
     * @param Modules\Job\Models\Task $row
     *
     * @return int|string|null
     */
    public function optionId($row) {
        $key = $row->getKey();
        if(null===$key||(!is_string($key)&&!is_int($key))){
            throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
        }
        return $key;
    }

    /**
     * on select the option label.
     *
     * @param Modules\Job\Models\Task $row
     */
    public function optionLabel($row):string {
        return 'To Set';
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?Renderable {
        return null;
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */
    public function indexQuery(array $data, $query)
    {
        //return $query->where('user_id', $request->user()->id);
        return $query;
    }



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
        'value'=>'..',
     */
    public function fields(): array {
        return array (
  0 => 
  (object) array(
     'type' => 'Text',
     'name' => 'id',
     'comment' => 'not in Doctrine',
  ),
  1 => 
  (object) array(
     'type' => 'Text',
     'name' => 'description',
     'comment' => 'not in Doctrine',
  ),
  2 => 
  (object) array(
     'type' => 'Text',
     'name' => 'command',
     'comment' => 'not in Doctrine',
  ),
  3 => 
  (object) array(
     'type' => 'Text',
     'name' => 'parameters',
     'comment' => 'not in Doctrine',
  ),
  4 => 
  (object) array(
     'type' => 'Text',
     'name' => 'expression',
     'comment' => 'not in Doctrine',
  ),
  5 => 
  (object) array(
     'type' => 'Text',
     'name' => 'timezone',
     'comment' => 'not in Doctrine',
  ),
  6 => 
  (object) array(
     'type' => 'Text',
     'name' => 'is_active',
     'comment' => 'not in Doctrine',
  ),
  7 => 
  (object) array(
     'type' => 'Text',
     'name' => 'dont_overlap',
     'comment' => 'not in Doctrine',
  ),
  8 => 
  (object) array(
     'type' => 'Text',
     'name' => 'run_in_maintenance',
     'comment' => 'not in Doctrine',
  ),
  9 => 
  (object) array(
     'type' => 'Text',
     'name' => 'notification_email_address',
     'comment' => 'not in Doctrine',
  ),
  10 => 
  (object) array(
     'type' => 'Text',
     'name' => 'notification_phone_number',
     'comment' => 'not in Doctrine',
  ),
  11 => 
  (object) array(
     'type' => 'Text',
     'name' => 'notification_slack_webhook',
     'comment' => 'not in Doctrine',
  ),
  12 => 
  (object) array(
     'type' => 'Text',
     'name' => 'auto_cleanup_type',
     'comment' => 'not in Doctrine',
  ),
  13 => 
  (object) array(
     'type' => 'Text',
     'name' => 'auto_cleanup_num',
     'comment' => 'not in Doctrine',
  ),
  14 => 
  (object) array(
     'type' => 'Text',
     'name' => 'run_on_one_server',
     'comment' => 'not in Doctrine',
  ),
  15 => 
  (object) array(
     'type' => 'Text',
     'name' => 'run_in_background',
     'comment' => 'not in Doctrine',
  ),
);
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs():array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request):array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request = null):array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request):array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions():array {
        return [];
    }
}

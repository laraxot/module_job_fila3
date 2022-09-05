<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Job;

use Livewire\Component;
use Illuminate\Support\Str;
use Modules\Job\Models\Job as JobModel; 
use Modules\Job\Models\FailedJob as FailedJobModel;
use Modules\Job\Models\JobBatch as JobBatchModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Contracts\Support\Renderable;



// use Illuminate\Support\Carbon;

/**
 * Class RolePermission.
 */
class Status extends Component {
    public array $form_data=[];
    public string $out='';
    public string $old_value='';
   
    public function mount(){
        Artisan::call('queue:monitor',['queues'=>'default,queue01,emails']);
        $this->out.=Artisan::output();
        Artisan::call('worker:check');
        $this->out.=Artisan::output();

        $this->out.='<br/>['.JobModel::count().'] Jobs';
        $this->out.='<br/>['.FailedJobModel::count().'] Failed Jobs';
        $this->out.='<br/>['.JobBatchModel::count().'] Job Batch';


        $this->old_value=getenv('QUEUE_CONNECTION');
        $this->form_data['conn']=getenv('QUEUE_CONNECTION');

        //$env_file=base_path('.env');
        //dddx(getenv(base_path('')));
        //$env_file = getenv('LARAVEL_DIR').'/.env';
        //dddx();
    }

    public function render(): Renderable {
        $view = 'job::livewire.job.status';
        $view_params = [
            'view' => $view,
        ];

        return view()->make($view, $view_params);
    }

    public function updatedFormData(string $value,string $key){
        //dddx([$value,$key,$this->form_data]);
        if($key=='conn'){
            //putenv ("QUEUE_CONNECTION=".$value);
            $this->saveEnv();
        }
    }

    public function saveEnv(){
        $env_file=base_path('.env');
        $env_content=File::get($env_file);
        $new_content=Str::replace(
            'QUEUE_CONNECTION='.$this->old_value,
            'QUEUE_CONNECTION='.$this->form_data['conn'],
            $env_content);
        putenv ("QUEUE_CONNECTION=".$this->form_data['conn']);
        File::put($env_file,$new_content);
        $this->old_value=$this->form_data['conn'];

    }

}

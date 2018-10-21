<?php
use App\Src\CollectData\CollectFactory;
use App\Src\UploadFiles;
use App\Src\SyncData;
use Illuminate\Database\Eloquent\Model;
use App\Src\FileType;
use App\Models\Permission;
use App\Src\SendNotificationToConsultantEngineers;
use App\Src\HierarchyData\ItemResolver;

if (!function_exists('collectData')) {

    function collectData(array $details, $type = 'multiple')
    {
        $factory = new CollectFactory($details, $type);
        return $factory->build()->collect();
    }

}
if (!function_exists('uploadFile')) {

    function uploadFile(array $fileDetails)
    {
        $uploadFile = new UploadFiles($fileDetails['file'], $fileDetails['path']);
        return $uploadFile->upload();
    }

}
if (!function_exists('sync')) {

    function sync(Model $model, $related, array $data)
    {
        SyncData::sync($model, $related, $data);
    }

}
if (!function_exists('getFileType')) {
    function getFileType($fileName)
    {
        $file = new FileType($fileName);
        return $file->getType();
    }
}
if (!function_exists('dateDiff')) {
    function dateDiff($date1, $date2)
    {
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);
        $diff = $date1->diff($date2);
        return $diff;

    }
}
if (!function_exists('getAllPermissions')) {
    function getAllPermissions()
    {
        $permissions = Permission::all();
        return $permissions;
    }
}
if (!function_exists('consultantEngineersNotification')) {
    function consultantEngineersNotification($project_id)
    {
        $sender = new SendNotificationToConsultantEngineers($project_id);
        $sender->sendMail();
    }
}
if (!function_exists('timeLinesChilds')) {
    function timeLinesChilds(ItemResolver $item)
    {
        if ($item->haveChilds()) {
            foreach ($item->getChilds() as $child) {
                $return = '<tr>';
                $return .= '<td colspan="5" class="child-container">';
                $return .= '<table class="table table-bordered main-table">';
                $return .= '<tbody>';
                $return .= '<tr>';
                $return .= '<td colspan="2">' . $child->name . '</td>';
                $return .= '<td></td>';
                $return .= '<td></td>';
                $return .= '<td></td>';
                $return .= '</tr>';
                foreach ($child->items as $timeLineItem) {
                    $return .= '<tr>';
                    $return .= '<td>'.$timeLineItem->activity_id.'</td>';
                    $return .= '<td>'.$timeLineItem->activity_name.'</td>';
                    $return .= '<td>'.$timeLineItem->original.'</td>';
                    $return .= '<td>'.$timeLineItem->starting_date.'</td>';
                    $return .= '<td>'.$timeLineItem->ending_date.'</td>';
                    $return .= '</tr>';
                }
                $return .= timeLinesChilds($child);
                $return .= '</tbody>';
                $return .= '</table>';
                $return .= '</td>';
                $return .= '</tr>';

            }
            return $return;
        }

    }
}
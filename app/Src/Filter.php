<?php
namespace App\Src;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class Filter
{
    private static $extensions = [
        'files' => ['pdf', 'doc', 'docx', 'xls', 'xlsx'],
        'images' => ['png', 'jpg', 'jpeg', 'gif'],
        'videos' => ['mp4', 'avi', '3gp', 'wmv', 'flv']
    ];
    private $request;
    private $project;
    private $hasMany;
    private $result;

    public function __construct(Request $request, $related)
    {
        $this->setRequest($request)->setProject()->setHasMany($related);

    }

    private function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    private function setProject()
    {
        $this->project = Project::find($this->request->project_id);
        return $this;
    }

    private function setHasMany($related)
    {
        $this->hasMany = call_user_func_array([$this->project, $related], []);
    }

    private function filterSort()
    {
        if (isset($this->request->sort)) {
            $this->result = $this->hasMany->where('sort', $this->request->sort);
        } else {
            $this->result = $this->hasMany;
        }
        return $this;

    }

    private function filterDateFrom()
    {
        if (isset($this->request->date_from)) {
            $this->result = $this->result->where('date', '>=', $this->request->date_from);
        }
        return $this;

    }

    private function filterDateTo()
    {
        if (isset($this->request->date_to)) {
            $this->result = $this->result->where('date', '<=', $this->request->date_to);
        }
        return $this;

    }

    private function filterFileType(Collection &$collection)
    {
        if (isset($this->request->type) && array_key_exists($this->request->type, self::$extensions)) {
            $this->checkCollection($collection);
        }
    }

    private function checkCollection(Collection &$collection)
    {
        foreach ($collection as $key => $item) {
            if (!in_array(strtolower(pathinfo($item->document, PATHINFO_EXTENSION)), self::$extensions[$this->request->type])) {
                $collection->forget($key);
            }
        }
    }


    public function results()
    {
        $this->filterSort()->filterDateFrom()->filterDateTo();
        $result = $this->result->get();
        $this->filterFileType($result);
        return $result;

    }

}
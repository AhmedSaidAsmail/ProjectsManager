<?php

namespace App\Src;

use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectNotification;


class SendNotificationToConsultantEngineers
{
    private $project;
    private $consultantCrew;


    /**
     * @param integer $project_id
     */
    public function __construct($project_id)
    {
        $this->setProject($project_id)->setConsultantCrew();
    }

    /**
     * @param integer $project_id
     * @return $this
     */
    private function setProject($project_id)
    {
        $this->project = Project::find($project_id);
        return $this;
    }

    /**
     * @return void
     */

    private function setConsultantCrew()
    {
        $this->consultantCrew = $this->project->consultantEngineers;

    }

    /**
     * @return void
     */

    public function sendMail()
    {
        foreach ($this->consultantCrew as $crew) {
            Mail::to($crew->engineer->email)->send(new ProjectNotification($this->project->name));
        }
    }

}
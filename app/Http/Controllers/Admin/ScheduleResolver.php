<?php

namespace App\Http\Controllers\Admin;

use App\Models\Schedule;
use Carbon\Carbon;

class ScheduleResolver
{
    private $schedule;
    private $planed_st_date;
    private $planed_end_date;

    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function getPlanedStDate()
    {
        if (!is_null($this->schedule->planed_starting_date)) {
            $this->planed_st_date = $this->formatDate($this->schedule->planed_starting_date);
        } else {
            $this->planed_st_date = $this->getStDateFromParent();
        }
        return $this->planed_st_date;
    }

    public function getPlanedEndDate()
    {
        if (!is_null($this->planed_st_date)) {
            $this->planed_end_date = Carbon::parse($this->planed_st_date)
                ->addDays((int)$this->schedule->default_duration - 1)
                ->format('d-M-y');
        } else {
            $this->planed_end_date = null;
        }
        return $this->planed_end_date;
    }

    private function formatDate($date)
    {
        return Carbon::parse($date)->format('d-M-y');
    }

    private function getStDateFromParent()
    {
        if (!is_null($this->schedule->parent->actual_ending_date)) {
            return $this->formatDate($this->schedule->parent->actual_ending_date);
        }
        return null;
    }

}
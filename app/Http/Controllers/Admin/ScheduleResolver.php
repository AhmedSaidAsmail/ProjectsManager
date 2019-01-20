<?php

namespace App\Http\Controllers\Admin;

use App\Models\Schedule;
use Carbon\Carbon;

class ScheduleResolver
{
    const status = [
        "جاري" => null,
        "متوقف او لم يبدأ" => 0,
        "متأخر 90%" => 10,
        "متأخر 80%" => 20,
        "متأخر 70%" => 30,
        "متأخر 60%" => 40,
        "متأخر 50%" => 50,
        "متأخر 40%" => 60,
        "متأخر 30%" => 70,
        "متأخر 20%" => 80,
        "متأخر 10%" => 90,
        "منتهي" => 100

    ];
    private $schedule;
    private $planed_st_date;
    private $planed_end_date;
    private $actual_st_date;
    private $actual_end_date;
    private $delay_duration;
    private $delay_percentage;

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

    public function getActualStDate()
    {
        if (!is_null($this->schedule->actual_starting_date)) {
            $this->actual_st_date = $this->formatDate($this->schedule->actual_starting_date);
        }
        return $this->actual_st_date;
    }

    public function getActualEndDate()
    {
        $actual_end_date = $this->schedule->actual_ending_date;
        if (!is_null($actual_end_date)) {
            $this->actual_end_date = $this->formatDate($actual_end_date);
        }
        return $this->actual_end_date;
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

    public function getStatusOptions()
    {
        return static::status;
    }

    public function getCompletionPercentage()
    {
        return (int)$this->schedule->status;
    }

    public function getDelayDuration()
    {
        if (!is_null($this->actual_end_date)) {
            $planed = Carbon::parse($this->planed_end_date);
            $actual = Carbon::parse($this->actual_end_date);
            $this->delay_duration = $actual->diffInDays($planed);

        }
        return $this->delay_duration;

    }

    public function getDelayPercentage()
    {
        $delay = $this->getDelayDuration();
        if (!is_null($delay)) {
            $start = Carbon::parse($this->getPlanedStDate());
            $end = Carbon::parse($this->getPlanedEndDate());
            $this->delay_percentage = $delay / $end->diffInDays($start) * 100;
        }
        return (int)$this->delay_percentage;

    }

}
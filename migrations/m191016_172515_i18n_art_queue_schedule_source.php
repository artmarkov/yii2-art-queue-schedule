<?php

use artsoft\db\SourceMessagesMigration;

class m191016_172515_i18n_art_queue_schedule_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'art/queue';
    }

    public function getMessages()
    {
        return [
            'Job Class' => 1,
            'Cron Expression' => 1,
            'Priority' => 1,
            'Next Date' => 1,
            'Next Dates' => 1,
            'Disable' => 1,
            'Enable' => 1,
            'High' => 1,
            'Med' => 1,
            'Low' => 1,
            'Queue Schedules' => 1,
            'Run now' => 1,
            'Switch on' => 1,
            'Switch off' => 1,
            'Invalid cron expression.' => 1,
            'The job has been queued.' => 1,
            'Error sending job to queue.' => 1,
            'All selected jobs has been queued.' => 1,
            'Error sending selected jobs to queue.' => 1,
            'The schedule is successfully activated.' => 1,
            'Schedule activation error.' => 1,
            'The schedule is successfully deactivated.' => 1,
            'Schedule deactivation error.' => 1,
            'Examples Cron Expression.' => 1,
            'Run every minute.' => 1,
            'Run every day in Midnight.' => 1,
            'Run every 5 minute.' => 1,
            'Run 2 times a month.' => 1,
            'Run in 10:05 every 9 days.' => 1,
            'Run every 3 hours in period between 0 to 12 hours a day every 15 days.' => 1,
            'Run in Midnight every Thursday in May.' => 1,
            'Run Midnight every Saturday and Sunday.' => 1,
            'Run at Noon every Sunday through Thursday.' => 1,
            'Run every last Friday of the month.' => 1,
            'Run every fourth Wednesday of the month.' => 1,
            'Run on the next working day at Midnight of the 16th of each month.' => 1,
        ];
    }
}
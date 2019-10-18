<?php

use artsoft\db\TranslatedMessagesMigration;

class  m191016_172730_i18n_ru_art_queue_schedule extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/queue';
    }

    public function getTranslations()
    {
        return [
            'Job Class' => 'Класс задания',
            'Cron Expression' => 'Выражение Cron',
            'Priority' => 'Приоритет',
            'Next Date' => 'Следующая Дата',
            'Next Dates' => 'Ближайшие Даты',
            'Disable' => 'Выключено',
            'Enable' => 'Включено',
            'High' => 'Высокий',
            'Med' => 'Средний',
            'Low' => 'Низкий',
            'Queue Schedules' => 'Фоновые задания',
            'Run now' => 'Выполнить сейчас',
            'Switch on' => 'Включить',
            'Switch off' => 'Выключить',
            'Invalid cron expression.' => 'Недопустимое выражение Cron.',
            'The job has been queued.' => 'Задание поставлено в очередь.',
            'Error sending job to queue.' => 'Ошибка отправки задания в очередь.',
            'All selected jobs has been queued.' => 'Все выбранные задания поставлены в очередь.',
            'Error sending selected jobs to queue.' => 'Ошибка отправки выбранных заданий в очередь.',
            'The schedule is successfully activated.' => 'Расписание успешно активировано.',
            'Schedule activation error.' => 'Ошибка активации расписания.',
            'The schedule is successfully deactivated.' => 'Расписание успешно деактивировано.',
            'Schedule deactivation error.' => 'Ошибка деактивации расписания.',
            'Examples Cron Expression.' => 'Примеры Выражения Cron.',
            'Run every minute.' => 'Выполнять каждую минуту.',
            'Run every day in Midnight.' => 'Выполнять каждый день в полночь',
            'Run every 5 minute.' => 'Выполнять каждые 5 минут.',
            'Run 2 times a month.' => 'Выполнять 2 раза в месяц.',
            'Run in 10:05 every 9 days.' => 'Запуск в 10: 05 каждые 9 дней.',
            'Run every 3 hours in period between 0 to 12 hours a day every 15 days.' => 'Запус каждые 3 часа в период от 0 до 12 часов в день каждые 15 дней.',
            'Run in Midnight every Thursday in May.' => 'Выполнять в полночь каждый четверг в мае-месяце.',
            'Run Midnight every Saturday and Sunday.' => 'Выполнять в полночь каждую субботу и воскресенье.',
            'Run at Noon every Sunday through Thursday.' => 'Выполнять в полдень с воскресенья по четверг.',
            'Run every last Friday of the month.' => 'Выполнять каждую последнюю пятницу месяца.',
            'Run every fourth Wednesday of the month.' => 'Выполнять каждую четвертую среду месяца.',
            'Run on the next working day at Midnight of the 16th of each month.' => 'Выполнять в ближайший рабочий день от 16-го числа в полночь каждого месяца.',
            
        ];        
    }
}
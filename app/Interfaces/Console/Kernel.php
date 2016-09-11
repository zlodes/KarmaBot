<?php
namespace Interfaces\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Class Kernel
 */
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \Interfaces\Console\Commands\StartGitterPool::class,
        \Interfaces\Console\Commands\StartGitterBot::class,
        \Interfaces\Console\Commands\GetGitterRoomId::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule
            ->command('gitter:pool', ['restart'])
            ->everyFiveMinutes();
    }

    /**
     * @return void
     */
    protected function commands()
    {

    }
}

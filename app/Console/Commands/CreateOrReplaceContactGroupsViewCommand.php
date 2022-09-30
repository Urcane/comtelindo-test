<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateOrReplaceContactGroupsViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db-view:contact-group {--groupid=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $groupid = $this->option('groupid');

        $query = "
            CREATE OR REPLACE VIEW contact_group_views AS (   
                SELECT 
                * 
                FROM groups
                WHERE id = $groupid
            )
        ";

        config()->set('database.connections.mysql.strict', false);
        DB::reconnect();
        DB::statement($query);
        config()->set('database.connections.mysql.strict', true);
        DB::reconnect();

        $this->info('contact_group_views (re)created');
    }
}

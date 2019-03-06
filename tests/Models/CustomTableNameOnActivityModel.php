<?php

namespace CrixuAMG\ActivityLog\Test\Models;

use CrixuAMG\ActivityLog\Models\Activity;

class CustomTableNameOnActivityModel extends Activity
{
    protected $table = 'custom_table_name';
}

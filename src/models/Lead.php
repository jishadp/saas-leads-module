<?php

namespace Jishadp\SaasLeadModule\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $connection='mysql_tenant';
    protected $guarded = [];
}

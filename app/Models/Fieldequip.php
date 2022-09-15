<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fieldequip extends Model
{
    use HasFactory;
    protected $primaryKey = 'Identification_No';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Identification_No',
        'Equipment_Name', 'category','Serial_No'
        ,'Software_Version'
        ,'Manufacturer_Name'
        ,'Supplier_Name'
        ,'Supplier_Contact'
        ,'Supplier_Email'
        ,'classification',
        'date_received',
        'Service_date',
        'Location',
        'Operation_Section',
        'Manual_Location',
        'Authorized_User',
        'equip_limit',
        'Technical_Info',
        'Grouping',
        'Frequency',
        'Executor',
        'Registrant',
        'Registrant_date',
        'Authorizer',
        'Authorized_date',
        'Declaration',
        'Declaration_date',
        'Comment',
        'Comment_Approver',
        'Comment_Approval_date',
        'Notified_By',
        'Status',
    ];
    protected $guarded=[];
}

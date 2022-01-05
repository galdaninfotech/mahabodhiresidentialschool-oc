<?php namespace JorgeAndrade\OctoDonations\Models;

use Model;
use DB;
use Carbon\Carbon;
use JorgeAndrade\OctoDonations\Models\Settings;

/**
 * Donatione Model
 */
class Donatione extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jorgeandrade_octodonations_donationes';

    /*
     * Validation
     */
    public static $rules = [
        'email'     => 'email|required',
        'amount'    => 'required|numeric|min:5',
        'currency'  => 'required',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['is_complete', 'is_cancel'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'email', 'country', 'comment', 'paymentid', 'amount', 'currency', 'hash', 'is_live'];

    public function scopeThisMonth($query)
    {
        return $query
            ->where('created_at', '>=', Carbon::now()->startOfMonth())
            ->where('created_at', '<=', Carbon::now()->endOfMonth());
    }

    public function scopeLastMonth($query)
    {
        return $query
            ->where('created_at', '>=', Carbon::now()->subMonth()->startOfMonth())
            ->where('created_at', '<=', Carbon::now()->subMonth()->endOfMonth());
    }

    public function scopeIsLive($query)
    {
        $islive = (Settings::get('mode') == 'live')?1:0;
        return $query->whereIsLive($islive);
    }

    

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model {
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function campus() {
        return $this->belongsTo('App\Campus');
    }

    public function teams() {
        return $this->belongsToMany('App\Team');
    }

    public function ministries() {
        return $this->belongsToMany('App\Ministry', 'staff_ministry');
    }

    public function getUrlAttribute() {
        return '/staff/' . $this->ident;
    }

    public function getImageAttribute() {
        $img = 'images/staff/' . $this->ident . '-square.jpg';
        return asset_exists($img) ? $img : 'images/staff/default-square.jpg';
    }

    public function getBioAttribute() {
        $str = preg_replace('/\n(\s*\n)+/', '</p><p>', trim($this->getOriginal('bio')));
        $str = preg_replace('/\n/', '<br>', $str);
        $str = strlen($str) ? '<p>'.$str.'</p>' : '';
        return $str;
    }

    public function get8bitPathAttribute() {
        return 'images/staff/' . $this->ident . '-8bit-square.jpg';
    }

    public function getHasSocialLinksAttribute() {
        return !empty($this->facebook) OR !empty($this->twitter) OR !empty($this->instagram);
    }

    public function getFacebookUrlAttribute() {
        return empty($this->facebook) ? null : facebook_url($this->facebook);
    }

    public function getTwitterUrlAttribute() {
        return empty($this->twitter) ? null : twitter_url($this->twitter);
    }

    public function getInstagramUrlAttribute() {
        return empty($this->instagram) ? null : instagram_url($this->instagram);
    }

    public function getProfileNameAttribute() {
        return $this->display_name;
    }

    public function getProfileTitleAttribute() {
        return $this->title;
    }

    public function getProfileUrlAttribute() {
        return $this->getUrlAttribute();
    }

    public function getProfileImageAttribute() {
        return $this->getImageAttribute();
    }

}

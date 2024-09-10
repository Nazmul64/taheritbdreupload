<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainProfile extends Model
{
    protected $fillable = [
        "portfoli_category_id",
        "name",
        "slug",
        "short_description",
        "description",
        "photo",
        "banner",
        "project_client",
        "project_company",
        "project_start_date",
        "project_end_date",
        "project_cos",
        "project_website",
        "seo_title",
        "seo_meta_description",
        "new_photo",
        "new_banner",
    ];
    public function rPortfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfoli_category_id');
    }
}

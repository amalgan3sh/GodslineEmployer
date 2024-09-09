<?php

namespace App\Models;

use CodeIgniter\Model;
 
class SurveyModel extends Model
{
    protected $table = 'survey_responses';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'full_name',
        'dob',
        'gender',
        'nationality',
        'current_address',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'email',
        'linkedin_profile',
        'position_title',
        'department',
        'other_department',
        'rating',
        'highest_degree',
        'field_of_study',
        'institution_name',
        'year_of_graduation',
        'additional_certificates',
        'recent_comp_name',
        'recent_comp_position_title',
        'recent_comp_emp_period_from',
        'recent_comp_emp_period_to',
        'recent_comp_responsibilities',
        'prev_comp_name',
        'prev_comp_position_title',
        'prev_comp_emp_period_from',
        'prev_comp_emp_period_to',
        'prev_comp_responsibilities',
        'total_yeras_of_exp',
        'techinical_skills',
        'soft_skills',
        'language_spoken',
        'other_language',
        'experience_with_sustainable_construction',
        'experience_with_sustainable_construction_desc',
        'experience_with_green_technology',
        'experience_with_green_technology_desc',
        'experience_with_engagement_initiatives',
        'experience_with_engagement_initiatives_desc',
        'experience_with_water_management_project',
        'experience_with_water_management_project_desc',
        'erliest_start_date',
        'prefered_employment_type',
        'reference_1',
        'reference_2',
        'motivation',
        'share_your_details',
        // 'resume'
        // 'cover_letter'
        // 'certifications'
        // 'signature'
        // 'date'
    ];
    // protected $useTimestamps = true;
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
}
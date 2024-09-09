<?php

namespace App\Controllers;
use App\Models\SurveyModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index');
    }
    public function Survey(): string
    {
        return view('survey');
    }

    public function Overview(): string
    {
        return view('header') . view('overview');
    }

    public function OurInspiration(): string
    {
        return view('header') . view('our_inspiration');
    }
    public function VisionAndMission(): string
    {
        return view('header') . view('vision_and_mission');
    }

    public function AboutAraneaPlatform(): string
    {
        return view('header') . view('about_aranea_platform');
    }

    public function SubmitSurvey(){

        $json = $this->request->getJSON();
        // return $json;


        if (!$json) {
            
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON(['error' => 'Invalid input']);
        }
        

        // Load the SurveyModel
        $surveyModel = new SurveyModel();


            // Define the data array
    $data = [
        'full_name' => $json->fullName,
        'dob' => $json->dateOfBirth,
        'gender' => $json->gender,
        'nationality' => $json->nationality,
        'current_address' => $json->currentAddress,
        'city' => $json->city,
        'state' => $json->state,
        'postal_code' => $json->postalCode,
        'country' => $json->country,
        'phone' => $json->phone,
        'email' => $json->email,
        'linkedin_profile' => $json->linkedinPofile,
        'position_title' => $json->positionTitle,
        'department' => $json->department,
        'other_department' => $json->otherDepartment,
        'rating' => $json->rating,
        'highest_degree' => $json->highestDegree,
        'field_of_study' => $json->fieldofStudy,
        'institution_name' => $json->institutionName,
        'year_of_graduation' => $json->yearOfGraduation,
        'additional_certificates' => $json->additionalCertificates,
        'recent_comp_name' => $json->companyName1,
        'recent_comp_position_title' => $json->positionTitle1,
        'recent_comp_emp_period_from' => $json->from1,
        'recent_comp_emp_period_to' => $json->to1,
        'recent_comp_responsibilities' => $json->responsibilities1,
        'prev_comp_name' => $json->companyName2,
        'prev_comp_position_title' => $json->positionTitle2,
        'prev_comp_emp_period_from' => $json->from2,
        'prev_comp_emp_period_to' => $json->to2,
        'prev_comp_responsibilities' => $json->responsibilities2,
        'total_yeras_of_exp' => $json->totalYearsOfExperience,
        'techinical_skills' => $json->techinicalSkills,
        'soft_skills' => $json->softSkills,
        'language_spoken' => $json->languageSpoken,
        'other_language' => $json->otherLanguageSpoken,
        'experience_with_sustainable_construction' => $json->experienceWithGreenTechnology,
        'experience_with_sustainable_construction_desc' => $json->experienceWithGreenTechnology,
        'experience_with_green_technology' => $json->experienceWithGreenTechnology,
        'experience_with_green_technology_desc' => $json->experienceWithGreenTechnologyDesc,
        'experience_with_engagement_initiatives' => $json->experienceWithEngagementInitiatives,
        'experience_with_engagement_initiatives_desc' => $json->experienceWithEngagementInitiativesDesc,
        'experience_with_water_management_project' => $json->experienceWithwaterManagementProject,
        'experience_with_water_management_project_desc' =>  $json->experienceWithwaterManagementProjectDesc,
        'erliest_start_date' => $json->erliestStartDate,
        'prefered_employment_type' => $json->preferedEmplymentType,
        'reference_1' => $json->ref_1_name.'|'.$json->ref_1_relationship.'|'.$json->ref_1_company.'|'.$json->ref_1_phone.'|'.$json->ref_1_email,
        'reference_2' =>  $json->ref_2_name.'|'.$json->ref_2_relationship.'|'.$json->ref_2_company.'|'.$json->ref_2_phone.'|'.$json->ref_2_email,
        'motivation' => $json->motivation,
        'share_your_details' => $json->shareYourDetails,
        'date' => $json->date,
        
    ];
    
        

        if ($surveyModel->insert($data)) {
            return $this->response->setJSON(['success' => true,]);
        } else {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON(['success' => false, 'error' => 'Failed to save data']);
        }
    }
}

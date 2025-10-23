<?php

namespace App\Services;

class DeveloperService{

    public function getprofile(){
        return [
            'name' =>  'Adnane Kesksu',
            'title' => 'Full stack Developer',
            'email' => 'kesadnane@gmail.com',
            'phone' => '+212 688 199 181',
            'description' => "I m a passionate Full stack developer with over 1 year experience building websites and web apps using modern technologies like HTML , CSS , JavaScript , and PHP. "
        ];
 }
        public function  getSkills(){

            return [
                'Frontend' =>['HTML' , 'CSS', 'JavaScript', 'Bootstrap'],
                'Backend & Database' => ['PHP' , 'SQL'],
                'Tools & Others' => ['Git', 'Figma', 'canva','wordPress']
            ];
        }
   
}
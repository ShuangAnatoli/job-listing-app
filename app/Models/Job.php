<?php
namespace App\Models;

class Job{
    public static function all(){
        return [
            [
                "id" => 1,
                "title" => "Data Analyst",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida est non elementum ultricies. Vestibulum eget mattis lorem, id condimentum dolor. Mauris sollicitudin consequat bibendum. Sed eget ante ac sapien blandit eleifend at sed odio. Quisque feugiat odio quis ligula vestibulum, sed tempor nisl sodales."
            ],
            [
                "id" => 2,
                "title" => "Data Scientist",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida est non elementum ultricies. Vestibulum eget mattis lorem, id condimentum dolor. Mauris sollicitudin consequat bibendum. Sed eget ante ac sapien blandit eleifend at sed odio. Quisque feugiat odio quis ligula vestibulum, sed tempor nisl sodales."
            ]   
        ];
}
}
?>
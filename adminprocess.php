<?php
/**
 * Created by PhpStorm.
 * User: somba
 * Date: 4/26/2018
 * Time: 4:34 PM
 */

 require_once("htmlStructure.php");





    $body = <<<BODY
        <h1 style="text-align: center">Faculty View </h1>
            <form action="adminViewCourses.php" method="get">
                <div class="form-group">
                    <input type="submit" value="View Courses" class="form-control">
                </div>
            </form>
            <form action="adminViewApplications.php" method="get">
                <div class="form-group">
                    <input type="submit" value="View Applications" class="form-control">
                </div>
            </form>
            <form action="addCoursesForm.php" method="get">
                <div class="form-group">
                    <input type="submit" value="Add Courses" class="form-control">
                </div>
            </form>
            
        
BODY;



    echo generatePage($body);



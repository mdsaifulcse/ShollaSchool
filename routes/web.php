<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ShollaSchoolController@index');
Route::get('/go-back', 'ShollaSchoolController@goToBack');
Route::get('/more-about-school/{id}', 'ShollaSchoolController@moreAboutSchool');


Route::get('/notices-list', 'NoticesController@allNoticseList');


Route::get('/school-addmission', 'SchoolAddmissionController@schoolAddmission');
Route::get('/school-overview', 'OverviewController@schoolOverview');
Route::get('/history', 'SchoolInfoRulesController@schoolHistory');

Route::get('/president-speech', 'SpeechController@presidentSpeech');
Route::get('/principal-speech', 'SpeechController@principalSpeech');


Route::get('/rules', 'SchoolInfoRulesController@instituteRules');
Route::get('/land-info', 'SchoolInfoRulesController@landInfo');
Route::get('/building-info', 'SchoolInfoRulesController@buildingInfo');

Route::get('/teachers', 'TeachersController@teacherList');
Route::get('/teacher-info/{id}', 'TeachersController@teacherInfo');


Route::get('/administration', 'AdministrationController@administrations');
Route::get('/administration-info/{id}', 'AdministrationController@administrationInfo');

Route::get('/stuff-list', 'StuffsController@stuffList');
Route::get('/stuff-info/{id}', 'StuffsController@stuffInfo');

Route::get('/class-routine', 'RoutineController@classRoutine');
Route::get('/exam-routine', 'RoutineController@examRoutine');

Route::get('/courses-studies', 'AcademicContentController@coursesStudie');

Route::get('/academic-curriculum', 'AcademicContentController@curriculumContent');

Route::get('/lectures', 'LecturesController@lecturesDownload');

Route::get('/meritorious-students', 'MeritoriousStudentsController@meritoriousStudents');
Route::get('/merit-student/{id}', 'MeritoriousStudentsController@meritoriousStudentInfo');



Route::get('/students-summary', 'StudentsController@studentSummary');

Route::get('/school-student', 'StudentsController@schoolStudentInfo');
Route::get('/school-student-profile/{id}', 'StudentsController@schoolStudentProfile');

Route::get('/college-student', 'StudentsController@collegeStudentInfo');
Route::get('/college-student-profile/{id}', 'StudentsController@collegeStudentProfile');

Route::get('/alumni-students', 'AlumniStudents@alumniStudentsInfo');

Route::get('/academic-result', 'ResultsController@academicResult');
Route::get('/jsc-result', 'ResultsController@jscResult');
Route::get('/ssc-result', 'ResultsController@sscResult');
Route::get('/hsc-result', 'ResultsController@hscResult');

Route::get('/national-event', 'GalleryController@nationalEventsPhoto');
Route::get('/exam-result', 'GalleryController@examEesultPhoto');
Route::get('/study-tour', 'GalleryController@studyTourPhoto');
Route::get('/cultural-event', 'GalleryController@culturalEventPhoto');
Route::get('/sports', 'GalleryController@sportsPhoto');
Route::get('/memory', 'GalleryController@memoryPhoto');
Route::get('/other', 'GalleryController@otherPhoto');



Route::get('/contact-us', 'ContactUsController@contactUsInfo');
Route::post('/new-message', 'MessageController@saveNewMessage');



Route::group( ['middleware'=>'SchoolMiddleware'], function(){

    Route::resource('/designations', 'DesignationController');

    Route::get('/manage-rules-history-property-info', 'SchoolInfoRulesController@manageRulesHistoryPropertyInfo');
    Route::get('/edit-school-info/{id}', 'SchoolInfoRulesController@editRulesHistoryPropertyInfo');
    Route::post('/update-school-info', 'SchoolInfoRulesController@updatetRulesHistoryPropertyInfo');


    Route::get('/manage-Overview', 'OverviewController@manageOverview');
    Route::get('/update-overview/{id}', 'OverviewController@updateOverviewForm');
    Route::post('/update-Overview', 'OverviewController@updateOvervie');

    Route::get('/add-slider', 'SliderController@showSliderForm');
    Route::post('/new-slider', 'SliderController@saveSliderInfo');
    Route::get('/manage-slider', 'SliderController@manageSliderInfo');
    Route::get('/unpublished-slider/{id}', 'SliderController@unpublishedSlider');
    Route::get('/published-slider/{id}', 'SliderController@publishedSlider');
    Route::get('/edit-slider/{id}', 'SliderController@editSlider');
    Route::get('/delete-slider/{id}', 'SliderController@deleteSlider');
    Route::post('/update-slider', 'SliderController@updateSliderInfo');

    Route::get('/add-teacher', 'TeachersController@showAddTeacherForm');
    Route::post('/new-teacher', 'TeachersController@saveNewTeacherInfo');
    Route::get('/teacher-education', 'TeachersController@teacherEducation');
    Route::post('/new-teacher-education', 'TeachersController@saveTeacherEducation');

    Route::get('/manage-teacher', 'TeachersController@manageTeacherInfo');
    Route::get('/edit-teacher-personal-info/{id}', 'TeachersController@editTeacherPersonalInfo');
    Route::get('/delete-teacher-personal-info/{id}', 'TeachersController@deleteTeacherPersonalInfo');

    Route::get('/delete-teacher-education/{id}', 'TeachersController@deleteTeacherEducationInfo');
    Route::post('/update-teacher', 'TeachersController@updateTeacherInfo');
    Route::get('/manage-education', 'TeachersController@manageTeacherEducationInfo');
    Route::get('/edit-teacher-education/{id}', 'TeachersController@editTeacherEducationInfo');
    Route::post('/update-teacher-education', 'TeachersController@updateTeacherEducationInfo');


    Route::get('/add-administrator', 'AdministrationController@showAddAdministratorForm');
    Route::post('/new-administrator', 'AdministrationController@saveNewAdministratorInfo');
    Route::get('/manage-administrator', 'AdministrationController@manageAdministratorInfo');
    Route::get('/edit-administrator/{id}', 'AdministrationController@editAdministratorInfo');
    Route::post('/update-administrator', 'AdministrationController@updateAdministratorInfo');

    Route::get('/add-stuff', 'StuffsController@showAddStuffForm');
    Route::post('/new-stuff', 'StuffsController@saveNewStuffInfo');
    Route::get('/manage-stuff', 'StuffsController@manageStuffInfo');
    Route::get('/edit-stuff/{id}', 'StuffsController@showEditStuffInfoForm');
    Route::post('/update-stuff', 'StuffsController@updateStuffInfo');

    Route::get('/add-notice', 'NoticesController@showNoticeForm');
    Route::post('/new-notice', 'NoticesController@saveNoticeInfo');
    Route::get('/manage-notice', 'NoticesController@manageNoticeInfo');
    Route::get('/unpublished-notice/{id}', 'NoticesController@unpublishedNotic');
    Route::get('/published-notice/{id}', 'NoticesController@publishedNotic');
    Route::get('/edit-notice/{id}', 'NoticesController@editNotic');
    Route::post('/update-notice', 'NoticesController@updateNotice');
    Route::get('/delete-notice/{id}', 'NoticesController@deleteNotic');


    Route::get('/add-lecture', 'LecturesController@showAddNewLectureForm');
    Route::post('/new-lecture', 'LecturesController@saveNewLectureInfo');
    Route::get('/manage-lecture', 'LecturesController@manageLectureInfo');
    Route::get('/unpublished-lecture/{id}', 'LecturesController@unpublishedLectureInfo');
    Route::get('/published-lecture/{id}', 'LecturesController@publishedLectureInfo');
    Route::get('/edit-lecture/{id}', 'LecturesController@showeditLectureForm');
    Route::post('/update-lecture', 'LecturesController@updateLectureInfo');
    Route::get('/delete-lecture/{id}', 'LecturesController@deleteLectureInfo');

    Route::get('/add-student', 'StudentsController@showAddNewStudentForm');
    Route::post('/new-student', 'StudentsController@saveNewStudentInfo');
    Route::get('/manage-school-student', 'StudentsController@manageSchoolStudentInfo');
    Route::get('/details-school-student/{id}', 'StudentsController@detailsSchoolStudentInfo');
    Route::get('/edit-school-student/{id}', 'StudentsController@editSchoolStudentInfo');
    Route::post('/update-school-student', 'StudentsController@updateSchoolStudentInfo');
    Route::get('/delete-school-student/{id}', 'StudentsController@deleteSchoolStudentInfo');

    Route::get('/manage-college-student', 'StudentsController@manageCollegeStudentInfo');
    Route::get('/details-collete-student/{id}', 'StudentsController@detailsCollegeStudentInfo');
    Route::get('/edit-collete-student/{id}', 'StudentsController@editCollegeStudentInfo');
    Route::post('/update-college-student', 'StudentsController@updateCollegeStudentInfo');
    Route::get('/delete-collete-student/{id}', 'StudentsController@deleteCollegeStudentInfo');

    Route::get('/add-routine', 'RoutineController@showAddRoutineForm');
    Route::post('/new-routine', 'RoutineController@saveNewRoutineInfo');
    Route::get('/manage-routine', 'RoutineController@manageRoutineInfo');
    Route::get('/unpublished-routine/{id}', 'RoutineController@unpublishedRoutine');
    Route::get('/published-routine/{id}', 'RoutineController@publishedRoutine');
    Route::get('/edit-routine/{id}', 'RoutineController@showEditRoutineFoem');
    Route::post('/update-routine', 'RoutineController@updateRoutineInfo');
    Route::get('/delete-routine/{id}', 'RoutineController@deleteRoutineInfo');


    Route::get('/about-school-form', 'AboutSchoolController@showAboutSchoolForm');
    Route::post('/about-schoo-info', 'AboutSchoolController@saveaboutSchooInfo');
    Route::get('/manage-about-school', 'AboutSchoolController@manageAboutSchoo');
    Route::get('/edit-about-school/{id}', 'AboutSchoolController@editAboutSchoo');
    Route::post('/update-about-school-info', 'AboutSchoolController@updateAboutSchooInfo');


    Route::get('/add-speech', 'SpeechController@showSpeechForm');
    Route::post('/new-speech', 'SpeechController@saveNewSpeech');
    Route::get('/manage-speech', 'SpeechController@manageSpeech');
    Route::get('/edit-speech/{id}', 'SpeechController@editSpeech');
    Route::post('/update-speech', 'SpeechController@updateSpeech');


    Route::get('/add-meritorioue-student', 'MeritoriousStudentsController@addMeritoriousStudent');
    Route::post('/new-meritorious-student', 'MeritoriousStudentsController@saveMeritoriousStudentInfo');
    Route::get('/manage-meritorious', 'MeritoriousStudentsController@manageMeritoriousStudentInfo');
    Route::get('/unpublished-mrt-student/{id}', 'MeritoriousStudentsController@unpublishedMeritoriousStudentInfo');
    Route::get('/published-mrt-student/{id}', 'MeritoriousStudentsController@publishedMeritoriousStudentInfo');
    Route::get('/edit-mrt-student/{id}', 'MeritoriousStudentsController@editMeritoriousStudentInfo');
    Route::post('/update-meritorious-student', 'MeritoriousStudentsController@updateMeritoriousStudentInfo');
    Route::get('/delete-mrt-student/{id}', 'MeritoriousStudentsController@deleteMeritoriousStudentInfo');


    Route::get('/add-photo', 'GalleryController@showAddPhotoForm');
    Route::post('/new-gallery-photo', 'GalleryController@saveGalleryPhoto');
    Route::get('/manage-photo', 'GalleryController@manageGalleryPhoto');
    Route::get('/unpublished-gallery-photo/{id}', 'GalleryController@unpublishedGalleryPhoto');
    Route::get('/published-gallery-photo/{id}', 'GalleryController@publishedGalleryPhoto');
    Route::get('/edit-gallery-photo/{id}', 'GalleryController@editGalleryPhotoForm');
    Route::post('/update-gallery-photo', 'GalleryController@updateGalleryPhotoForm');
    Route::get('/delete-gallery-photo/{id}', 'GalleryController@deleteGalleryPhoto');


    Route::get('/add-result', 'ResultsController@showAddNewResultForm');
    Route::post('/new-result', 'ResultsController@saveNewResultInfo');
    Route::get('/manage-result', 'ResultsController@manageResultInfo');
    Route::get('/unpublished-result/{id}', 'ResultsController@unpublishedResultInfo');
    Route::get('/published-result/{id}', 'ResultsController@publishedResultInfo');
    Route::get('/edit-result/{id}', 'ResultsController@editResultInfo');
    Route::post('/update-result', 'ResultsController@updateResultInfo');
    Route::get('/delete-result/{id}', 'ResultsController@deleteResultInfo');

    Route::get('/manage-academic-content', 'AcademicContentController@manageAcademicContent');
    Route::get('/edit-academic-content/{id}', 'AcademicContentController@editAcademicContent');
    Route::post('/update-academic-content', 'AcademicContentController@updateAcademicContent');

    Route::get('/add-alumni-student', 'AlumniStudents@showAddNewAlumniStudentForm');
    Route::post('/new-alumni-student', 'AlumniStudents@saveNewAlumniStudentInfo');
    Route::get('/manage-alumni-student', 'AlumniStudents@manageAlumniStudentForm');
    Route::get('/unpublished-alumni-student/{id}', 'AlumniStudents@unpublishedAlumniStudentInfo');
    Route::get('/published-alumni-student/{id}', 'AlumniStudents@publishedAlumniStudentInfo');
    Route::get('/edit-alumni-student/{id}', 'AlumniStudents@showEditAlumniStudentForm');
    Route::post('/update-alumni-student', 'AlumniStudents@updateAlumniStudentInfo');
    Route::get('/delete-alumni-student/{id}', 'AlumniStudents@deleteAlumniStudentInfo');


    Route::get('/manage-contact-info', 'ContactUsController@manageContactUsInfo');
    Route::get('/edit-contact-info/{id}', 'ContactUsController@editContactInfo');
    Route::post('/update-contact-info', 'ContactUsController@updateContactInfo');
    Route::get('/message-list', 'MessageController@showMessage');
    Route::get('/delete-message/{id}', 'MessageController@deleteMessage');

    Route::get('/add-class-section', 'ClassSectionController@showAddNewClassSectionForm');
    Route::post('/new-class-section', 'ClassSectionController@saveddNewClassSectionInfo');
    Route::get('/manage-class-section', 'ClassSectionController@manageClassSectionInfo');
    Route::get('/edit-class-section/{id}', 'ClassSectionController@showEditClassSectionForm');
    Route::post('/update-class-section', 'ClassSectionController@updateClassSectionInfo');
    Route::get('/delete-class-section/{id}', 'ClassSectionController@deleteClassSectionInfo');

    // ---------------------
     Route::resource('class-of-school','ClassOfSchoolController');
     Route::get('load-section-of-class/{classId}','StudentsController@loadSectionOfClass');
     Route::resource('class-section','ClassSectionsController');
} );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update-admin', 'HomeController@showAdminUpdateForm')->name('update-admin');
Route::post('/update-admin', 'HomeController@updateExistingAdminInfo')->name('update-admin');

//Clear Cache facade value:
Route::get('/cache-clear','ShollaSchoolController@clearCache');
//Clear View cache:
Route::get('/view-clear','ShollaSchoolController@viewClear');

//Clear Route cache:
Route::get('/route-clear','ShollaSchoolController@routeCache');

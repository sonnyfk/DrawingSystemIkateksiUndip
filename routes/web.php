<?php


// Route::match(['GET','POST'],'/','AdminController@notika');
// Route::match(['GET','POST'],'/','AdminController@subscriberattendance');
Route::match(['GET','POST'],'/','AdminController@attendance');
Route::match(['GET','POST'],'/subscriber/attendance/detail','AdminController@subscriberattendancedetail');
Route::match(['GET','POST'],'/subscriber','AdminController@subscriber');
// Route::match(['GET','POST'],'/subscriber','AdminController@subscriber');
Route::match(['GET','POST'],'/subscriber/manual','AdminController@subscribermanual');
Route::match(['GET','POST'],'/subscriber/register/{employeeID}','AdminController@subscriberregister');


Route::match(['GET','POST'],'/grandprize','AdminController@grandprize');
Route::match(['GET','POST'],'/doorprize','AdminController@doorprize');




Route::match(['GET','POST'],'/undian','AdminController@home');
Route::match(['GET','POST'],'/list/pemenang','AdminController@listpemenang');
Route::match(['GET','POST'],'/submit/pemenang','AdminController@submitpemenang');





<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    $students = [
        4200001 => [
            'lastname' => 'seno',
            'firstname' => 'chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => true,
        ],
        4200011 => [
            'lastname' => 'ortiz',
            'firstname' => 'bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => false,
        ],
    ];
    return $students;
});
Route::get('/show/{id}', function ($id) {
    $students = [
        4200001 => [
            'lastname' => 'seno',
            'firstname' => 'chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => true,
        ],
        4200011 => [
            'lastname' => 'ortiz',
            'firstname' => 'bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => false,
        ],
    ];

    return view('show', ['student' => $students[$id]]);
});
Route::get('/add-student', function () {
    $students = [
        4200001 => [
            'lastname' => 'seno',
            'firstname' => 'chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => true,
        ],
        4200011 => [
            'lastname' => 'ortiz',
            'firstname' => 'bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => false,
        ],
    ];
    return view('addstudent');
});
Route::get('/edit-student/{id}', function ($id) {
    $students = [
        4200001 => [
            'lastname' => 'seno',
            'firstname' => 'chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => true,
        ],
        4200011 => [
            'lastname' => 'ortiz',
            'firstname' => 'bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => false,
        ],
    ];
    return view('editstudent', ['student' => $students[$id]]);
});
Route::get('/delete-student/{id}', function ($id) {
    $students = [
        4200001 => [
            'lastname' => 'seno',
            'firstname' => 'chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => true,
        ],
        4200011 => [
            'lastname' => 'ortiz',
            'firstname' => 'bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => false,
        ],
    ];
    return redirect('/home', ['student' => $students[$id]]);
});

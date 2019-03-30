<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/create', function () {
   $blog = new Blog;
   $blog->nama="Kalif";
   $blog->asal="Semarang";
   $blog->tanggal="19-10-1996";
   $blog->save();
});

Route::get('/update', function () {
   $blog = Blog::find(1);
   $blog->nama="Kalif Ardy";
   $blog->asal="Semarang";
   $blog->tanggal="19-10-1996";
   $blog->save();
});

Route::get('/read', function () {
   $blogs = Blog::all();
   echo "<ul>";
   foreach ($blogs as $blog) {
   	# code...
   	echo "<li>";
   	echo "<b>Nama :</b>" ;
   	echo $blog->nama;

   	echo "<b>Asal :</b>" ;
   	echo $blog->asal;

   	echo "<b>Tanggal :</b>" ;
   	echo $blog->tanggal;
   echo"</li>";
   }

      echo "<ul>";

});
Route::get('/delete', function () {
   $blog = Blog::find(1);
   $blog->delete();
});

Route::get('/blog','BlogController@index');
Route::get('/blog/{id}','BlogController@tampilkanID');

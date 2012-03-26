<?php
  /*
   * Extraction of some functions from this Polytech Nice Sophia's web course.
   *
   * @author Christian Brel
   *
   */

  /** Function library to handle Image Galery
   * @author Sebastian Mosser <mosser@polytech.unice.fr>
   * @copyright Polytech'Nice Sophia Engineering School, Web Courses
   * @date 03 / 20 / 2009
   */

/** Return all files in a given directory mathcing the given regular expr.
 * @param $dirName the name of the directory you wanna read
 * @param $regExp the POSIX regular expression to match
 * @return an array containing all files names.
 * @remarks The 'getAllLibraries' from WebTunes can be written as: 
 *   function getAllLibraries()
 *   {
 *     return getAllFiles("./resources","[:word:]*\.xml$")
 *   }
 */
function getAllFiles($dirName, $regExp)
{
  $dir = "./images/photos/" . $dirName . "/";
  $files = scandir($dir);
  $result = array();
  foreach($files as $f) {
    $filename = $dir . $f;
    if (is_file($filename) && @ereg($regExp,$f))
      $result[] = $f;
  }
  return $result; 
}

/** Return all pictures (*.png, *.jpg, *.jpeg, *.gif) from a given dir
 * @param $dir the name of the directory you wanna read
 * @return an array of files names.
 */
function getAllPictures($dir)
{
  return getAllFiles($dir,"[:word:]*\.(jpg|png|jpeg|gif)");
}

function getAllAlbums($dir)
{
  $files = scandir($dir);
  $result = array();
  foreach($files as $f)
  {
    $filename = $dir . $f;
    if (is_dir($filename) && $f != '.' && $f != '..')
      $result[] = $f;
  }
  return $result;
}

function getAllAlbumsInPhotos()
{
  $dir = "./images/photos/";
  return getAllAlbums($dir);
}

function getAllDeViNTDayAlbums()
{
	$albums = getAllAlbumsInPhotos();
	
	$result = array();
	foreach($albums as $album)
	{
		$pos = strpos($album, "ca");
		
		if ($pos === false) {
		    $result[] = $album;
		}
	}
	
	return $result;
}

function getAllCADayAlbums()
{
	$albums = getAllAlbumsInPhotos();
	
	$result = array();
	foreach($albums as $album)
	{
		$pos = strpos($album, "ca");
		
		if ($pos !== false) {
		    $result[] = $album;
		}
	}
	
	return $result;
}

?>
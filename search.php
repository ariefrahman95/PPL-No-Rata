<?php
require_once('database_connection.php'); //connect to your database in this file
define("NUMBER_PER_PAGE", 10); //number of records per page of the search results

/****
* Purpose: paginate a result set
* Precondition: current page, total records, extra variables to pass in the page string
* Postcondition: pagination is displayed
****/
function pagination($current_page_number, $total_records_found, $query_string = null)
{
    $page = 1;

    echo "Page: ";

    for ($total_pages = ($total_records_found / NUMBER_PER_PAGE); $total_pages > 0; $total_pages--)
    {
        if ($page != $current_page_number)
            echo "<a href=\"?page=$page" . (($query_string) ? "&$query_string" : "") . "\">";

        echo "$page ";

        if ($page != $current_page_number)
            echo "</a>";

        $page++;
    }
}

/**
* Display Search Results Below Here
**/

//load the current paginated page number
$page = 1;
$searched = false;
if(isset($_GET['page'])) {
	$page = $_GET['page'];
	
}
$start = ($page-1) * NUMBER_PER_PAGE;

/**
* if we used the search form use those variables, otherwise look for
* variables passed in the URL because someone clicked on a page number
**/
$judul = "";
$penulis = "";
if(isset($_POST['judul'])) {
	$judul = $_POST['judul'];
} else if(isset($_GET['judul'])) {
	$judul = $_GET['judul'];
}
if(isset($_POST['penulis'])) {
	$penulis = $_POST['penulis'];
} else if(isset($_GET['penulis'])) {
	$penulis = $_GET['penulis'];
}
//$kategori = ($_POST['kategori']) ? $_POST['kategori'] : $_GET['kategori'];
//$bulan_terbit = ($_POST['bulan_terbit']) ? $_POST['bulan_terbit'] : $_GET['bulan_terbit']

$sql = "SELECT * FROM jurnal_terpublish WHERE 1=1";

if($judul)
    $sql .= " AND judul LIKE'%". mysql_real_escape_string($judul) ."%'";
if($penulis)
    $sql .= " AND penulis LIKE'%". mysql_real_escape_string($penulis). "%'";

//this return the total number of records returned by our query
$total_records = mysql_num_rows(mysql_query($sql));

//now we limit our query to the number of results we want per page
$sql .= " LIMIT $start, " . NUMBER_PER_PAGE;

/**
* Next we display our pagination at the top of our search results
* and we include the search words filled into our form so we can pass
* this information to the page numbers. That way as they click from page
* to page the query will pull up the correct results
**/
pagination($page, $total_records, "judul=$judul&penulis=$penulis");
$loop = mysql_query($sql)
	or die ('cannot run the query because: ' . mysql_error());
while ($record = mysql_fetch_assoc($loop))
	echo "<br/>{$record['id']}) " . stripslashes($record['judul']) . " - {$record['kategori']}";

echo "<center>" . number_format($total_records) . " search results found</center>";

pagination($page, $total_records, "judul=$judul&penulis=$penulis");
?>
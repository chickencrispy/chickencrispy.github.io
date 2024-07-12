<pre>
<?php


$packageId = $_REQUEST['package_id'] ?? "1";
print $packageId."\n";


require "./backend/mysql_connector.php";
//require "./mysql_connector.php";

//*********PACKAGE INFO*****************
function getPackageInfo($con, $packageId) {

  $query = "SELECT pl.*, c.* FROM 02_package_list pl JOIN 02_category c ON pl.category_id = c.category_id WHERE pl.package_id = ?;";
  $stmt = mysqli_prepare($con, $query);

      mysqli_stmt_bind_param($stmt, "s", $packageId);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($result);
      mysqli_stmt_close($stmt);
      return $row;
   
}

$packageInfo = getPackageInfo($con, $packageId);
//print_r($packageInfo);


//**********MEDICAL CLEARANCE************************
function getMedicalClearanceInfo($con, $packageId) {
  $query="
      SELECT mc.*, c.*, pl.*
      FROM 02_medical_clearance mc
      JOIN 02_category c ON mc.category_id = c.category_id
      JOIN 02_package_list pl ON pl.category_id = c.category_id
      WHERE pl.package_id = ?
  ";

  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, 'i', $packageId);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }

  mysqli_stmt_close($stmt);
  return $rows;
}

$info_mc = getMedicalClearanceInfo($con, $packageId); // Perbaiki nama fungsi
foreach ($info_mc as $row) {
  //echo $row['medical_text'] . "\n";
}


//*********MEDICAL ASSESMENT*****************
function getMedicalAssesmentCategoryPackageInfo($con, $packageId) {
  $query = "
      SELECT ma.*, c.*, pl.*
      FROM 02_medical_assesment ma
      JOIN 02_category c ON ma.category_id = c.category_id
      JOIN 02_package_list pl ON pl.category_id = c.category_id
      WHERE pl.package_id = ?
  ";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $packageId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    mysqli_stmt_close($stmt);
    return $rows;
}

$info_ma = getMedicalAssesmentCategoryPackageInfo($con, $packageId);
foreach ($info_ma as $row) {
  //echo $row['assesment_text'] . "\n";
}


//**********CAPTAIN LIST*************
function getCaptainPackage($con, $packageId) {

  // Query pertama untuk mendapatkan category_id dari 02_package_list
  $query_1 = "SELECT * FROM 02_package_list WHERE package_id = ?;";

  $stmt_1 = mysqli_prepare($con, $query_1);
  mysqli_stmt_bind_param($stmt_1, 'i', $packageId);
  mysqli_stmt_execute($stmt_1);
  $result_1 = mysqli_stmt_get_result($stmt_1);
  $row_1 = mysqli_fetch_assoc($result_1);

  mysqli_stmt_close($stmt_1);

  // Jika tidak ada hasil dari query pertama
  if (!$row_1) {
    return [];
  }

  $category_id = $row_1['category_id'];

  // Query kedua untuk mendapatkan data dari 02_captain
  $query_2 = "SELECT * FROM 02_captain WHERE captain_type LIKE CONCAT('%', ?, '%');";

  $stmt_2 = mysqli_prepare($con, $query_2);
  mysqli_stmt_bind_param($stmt_2, 's', $category_id);
  mysqli_stmt_execute($stmt_2);
  $result_2 = mysqli_stmt_get_result($stmt_2);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result_2)) {
      $rows[] = $row;
  }

  mysqli_stmt_close($stmt_2);
  return $rows;
}

$info_cp = getCaptainPackage($con, $packageId);
foreach ($info_cp as $row) {
  //echo $row['captain_name'] . "\n";
}

?>
</pre>
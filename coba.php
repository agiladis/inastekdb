
<?php
/*
$assoc_data = array(); // Create an empty array to hold the associative data
if (($csv_file = fopen("/Applications/XAMPP/xamppfiles/htdocs/inastek/ini-data-tabel.csv", "r")) !== FALSE) {
  $header = fgetcsv($csv_file, 1000, ";"); // Read the header row
  while (($row = fgetcsv($csv_file, 1000, ";")) !== FALSE) {
    $assoc_row = array_combine($header, $row); // Combine the header row with the current row
    $assoc_data[] = $assoc_row; // Add the associative row to the array
    $column_count = count($row);
  }
  fclose($csv_file);
}
*/

// open the file for reading
$file = fopen('ini-data-tabel.csv', 'r');

$data = array();
// read the first row of the CSV file
$header = fgetcsv($file);
while(($row = fgetcsv($file))!==false){
  $data_row = array_combine($header, $row);
  $data[] = $data_row;
}
// close the file
// $row = fgetcsv($file);
// $row = explode(";", $row[0]);

// $data = array_merge($header, $row);
fclose($file);

// output the header as an array
print_r($data);
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['office'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['startdate'] . "</td>";
    echo "</tr>\n";
}
?>



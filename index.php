<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// untuk meload data xml (buku.xml) dengan cara SimpleXML 
$books = new SimpleXMLElement('datadiri.xml', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table border=1>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
<th>Agama</th>
<th>Tgllahir</th>
<th>Progdi</th>
</tr>
 
";
 
// melakukan looping penampilan data buku
foreach($books as $data)
{
        echo "
<tr>
<td>{$data['nim']}</td>
<td>{$data->nama}</td>
<td>{$data->alamat}</td>
<td>{$data->agama}</td>
<td>{$data->tgllahir}</td>
<td>{$data->progdi}</td>
</tr>
 
";
}
echo '</table>';
?>
 
</body>
</html>
<?php 

	require_once 'tcpdf/tcpdf.php';

	function fetch_data()
	{
		$output = '';
		$conn = mysqli_connect("localhost", "root", "", "accountdb");
		$sql = "SELECT ID, username, address, email, mobile FROM manager";		
		$result = $conn->query($sql);
		while($row = mysqli_fetch_array($result))
		{
			$output = '<tr>
							<td>'.$row["ID"].'</td>
							<td>'.$row["username"].'</td>
							<td>'.$row["address"].'</td>
							<td>'.$row["email"].'</td>
							<td>'.$row["mobile"].'</td>
					   </tr>';
					   
		}
		return $output;
	}
	
	if(isset($_POST["pdf"]))
	{
		require_once('tcpdf/tcpdf.php');
		$obj_pdf = new tcpdf('p', PDF_UNIT, PDF_PAGE_FORMAT, /*vtrue,*/ 'UTF-8', false); /*TCPDF*/
		$obj_pdf -> SetCreator(PDF_CREATOR);
		$obj_pdf -> SetTitle("Generate HTML Table Data To PDF");
		$obj_pdf -> SetHeaderData('','',PDF_HEADER_TITLE, PDF_HEADER_STRING);
		$obj_pdf -> SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '',PDF_FONT_SIZE_MAIN));
		$obj_pdf -> SetFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
		// $obj_pdf -> SetDefaultMonospaceFont('helvectica');
		$obj_pdf -> SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf -> SetMargins(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
		$obj_pdf -> SetPrintHeader(false);
		$obj_pdf -> SetPrintFooter(false);
		$obj_pdf -> SetAutoPageBreak(TRUE,10);
		// $obj_pdf -> SetFont('helvectica','',11);
		$obj_pdf -> AddPage();
		$content = '';
		$content = '
			<h4 align = "center"> Generate Manager Table Data to PDF"</h4> </br>
			<table border = "1" cellspacing = "0" cellpadding = "3">
				<tr>
					<th width = "5%"> ID </th>
					<th width = "15%"> username </th>
					<th width = "30%"> address </th>
					<th width = "20%"> email </th>
					<th width = "10%"> mobile </th>
				</tr>';
				
				$content .= fetch_data();
				$content .= '</table>';
				$obj_pdf -> writeHTML($content);
				$obj_pdf -> Output('file.pdf', 'I');
	}
	?>
				
<?php 

	require_once 'tcpdf/tcpdf.php';

	function fetch_data()
	{
		$output = '';
		$conn = mysqli_connect("localhost", "root", "", "accountdb");
		$sql = "SELECT no, email, subject FROM feedback";		
		$result = $conn->query($sql);
		while($row = mysqli_fetch_array($result))
		{
			$output = '<tr>
							<td>'.$row["no"].'</td>
                            <td>'.$row["email"].'</td>
							<td>'.$row["subject"].'</td>
					   </tr>';
					   
		}
		return $output;
	}
	
	if(isset($_POST["pdf"]))
	{
		require_once('tcpdf/tcpdf.php');
		$obj_pdf = new tcpdf('p', PDF_UNIT, PDF_PAGE_FORMAT, /*vtrue,*/ 'UTF-8', false); /*TCPDF*/
		$obj_pdf -> SetCreator(PDF_CREATOR);
		$obj_pdf -> SetTitle("Generate feedback table data to PDF");
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
			<h4 align = "center"> FEEDBACK </h4> </br>
			<table border = "1" cellspacing = "0" cellpadding = "3">
				<tr>
					<th width = "5%"> No </th>
					<th width = "30%"> Email </th>
					<th width = "65%"> Message </th>
				</tr>';
				
				$content .= fetch_data();
				$content .= '</table>';
				$obj_pdf -> writeHTML($content);
				$obj_pdf -> Output('messages.pdf', 'I');
	}
	?>
				
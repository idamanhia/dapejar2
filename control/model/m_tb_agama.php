<?php 
/**
 * 
 */
class tb_agama
{
	
	function read_tb_agama($where){
		$conn = db();
		$query = mysqli_query($conn," $where " ) ;
		while ($row = mysqli_fetch_assoc($query)) {
			$tableData[] = $row;
		}
		// mysqli_close($conn);
		if (!empty($tableData)) {
			return $tableData;
		}else{
			return false;
		}
	}
	function read_tb_agama_no_loop($where){
		$conn = db();
		$query = mysqli_query($conn," $where " );
		$row = mysqli_fetch_assoc($query);
		// mysqli_close($conn);
		return $row;
	}

	function read_tb_agama_boll($where){
		$conn = db();
		$query = mysqli_query($conn," $where " );
		if ($query) {
			return true;
		}else{
			return false;
		}
		// mysqli_close($conn);
	
	}
}
?>
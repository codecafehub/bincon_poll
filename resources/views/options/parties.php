<?php 
		$parties = App\Models\Party::get();

		if(count($parties) > 0){
			foreach($parties as $data){
				echo'<option value="'.$data->partyname.'">'.$data->partyname.'</option>';
			}
		}else{
			echo '<option value="">No party Avalialable Now</option>';
		}
?>
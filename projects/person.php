<?
class person
{
	public $data;
	public $type;
	
	
	public function dataAccept($arr)
	{
		$this->data = $arr;
	}
	public function startAction()
	{
		$array = $this->data;
		
		if($array['type'] == 'add')
		{
			return $this->addPerson();
		}
		else if($array['type'] == 'edit')
		{
			return $this->editPerson();
		}
		else if($array['type'] == 'del')
		{
			return $this->delPerson();
		}
		else if($array['type'] == 'get')
		{
			return $this->getPerson();
		}
		else
		{
			die("არასწორი მონაცემები");
		}
	}
	public function printData()
	{
		var_dump($this->data);
	}
	
	public function addPerson()
	{
		$personData = $this->data;
		
		$name = mysql_escape_string(htmlspecialchars(strip_tags($personData['name'])));
		$surname = mysql_escape_string(htmlspecialchars(strip_tags($personData['surname'])));
		$age = intval($personData['age']);
		$sex = intval($personData['sex']);
		
		if($age and $sex)
		{	
			$db = new DbAct();
			$sql = "INSERT INTO person(`name`,`surname`,`age`,`sex_id`) VALUES('$name','$surname','$age','$sex')";
			$query = $db->run_query($sql);
			if($query)
			{
				return '{"success":1,"comment":"მომხმარებელი წარმატებულად დამატებულია"}';
			}
			else
			{
				return '{"success":0,"comment":"შეცდომაა!! სცადეთ მოგვიანებით"}';
			}
		}
		else
		{
			return '{"success":0,"comment":"არასწორი ციფრითი მონაცემი"}';
		}
	}
	public function delPerson()
	{
		$personData = $this->data;
		
		$del_id = intval($personData['del_id']);
		if($del_id)
		{
			$db = new DbAct();
			$sql = "DELETE FROM person WHERE id='$del_id'";
			$query = $db->run_query($sql);
			if($query)
			{
				return '{"success":1,"comment":"მომხმარებელი წარმატებულად წაშლილია"}';
			}
			else
			{
				return '{"success":0,"comment":"შეცდომაა!! სცადეთ მოგვიანებით"}';
			}
		}
		else
		{
			return '{"success":0,"comment":"არასწორი ციფრითი მონაცემი"}';
		}
	}
	public function editPerson()
	{
		$personData = $this->data;
		
		$name = mysql_escape_string(htmlspecialchars(strip_tags($personData['name'])));
		$surname = mysql_escape_string(htmlspecialchars(strip_tags($personData['surname'])));
		$age = intval($personData['age']);
		$sex = intval($personData['sex']);
		$person_id = intval($personData['person_id']);
		if($age and $sex and $person_id)
		{	
			$db = new DbAct();
			$sql = "UPDATE person SET `surname`='$surname',`name`='$name',`age`='$age',`sex_id`='$sex' WHERE id='$person_id'";
			$query = $db->run_query($sql);
			if($query)
			{
				return '{"success":1,"comment":"მომხმარებლის მონაცემები წარმატებულად რედაქტირებულია"}';
			}
			else
			{
				return '{"success":0,"comment":"შეცდომაა!! სცადეთ მოგვიანებით"}';
			}
		}
		else
		{
			return '{"success":0,"comment":"არასწორი ციფრითი მონაცემი"}';
		}
	}
	public function getPerson()
	{
		$personData = $this->data;
		
		$person_id = intval($personData['person_id']);
		if($person_id)
		{
			$db = new DbAct();
			$sql = "SELECT * FROM person WHERE id='$person_id'";
			$query = $db->run_query($sql);
			if($query)
			{	
				$personRow = mysql_fetch_array($query);
				return '{"success":1,"name":"'.$personRow[name].'","surname":"'.$personRow[surname].'","age":"'.$personRow[age].'","sex":"'.$personRow[sex_id].'"}';
			}
			else
			{
				return '{"success":0,"comment":"შეცდომაა!! სცადეთ მოგვიანებით"}';
			}
		}
		else
		{
			return '{"success":0,"comment":"არასწორი ციფრითი მონაცემი"}';
		}
	}
}

?>
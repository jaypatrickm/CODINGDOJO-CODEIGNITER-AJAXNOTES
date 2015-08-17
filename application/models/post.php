<?php
class Post extends CI_Model
{
	function get_all_notes()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}
	/*
	function get_course_by_id($course_id)
	{
		return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id)->row_array();
	}*/
	function create($note)
	{
		$query = "INSERT INTO notes (title, description, created_at, updated_at) VALUES (?,?, NOW(), NOW())";
		$values = array($note['title'], "");
		return $this->db->query($query, $values);
	}

	function update($id, $description)
	{
		$this->db->query("UPDATE notes SET description = ? WHERE id= ?", array($description['description'], $id));
	}

	function delete($id)
	{
		$this->db->query("DELETE FROM NOTES WHERE ID =? " , $id);
	}
}
?>
<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');
class Calculator_model extends CI_Model {
	
	public $slides;

	public function __construct()
	{
		parent::__construct();
		// Build out "superobject" 
		$this->get_slides();
		foreach ($this->slides as $slide)
		{
			$fields = $this->get_fields($slide['id']);
			foreach ($fields as $field)
			{
				$this->slides[$slide['position']]['fields'][$field['position']] = $field;
			}
		}
	}

	public function get_slides()
	{
		$query = $this->db->query('SELECT id, title, handle, position FROM slides WHERE active = 1 ORDER BY position');
		foreach ($query->result() as $row)
		{
				$this->slides[$row->position] = array(
					'position' => $row->position,
					'title' => $row->title,
					'handle' => $row->handle,
					'id' => $row->id,
					'fields' => array()
				);
			
		}
	}

	public function get_fields($slide_id)
	{
		$results = array();
		$query = $this->db->query('SELECT fields.id, fields.title, fields.handle, fields.parent_handle, fields.position, fields.tab_order, fields.default_val, weights.value as \'weight\', fields.required, fields.function FROM fields LEFT JOIN weights ON (fields.weight = weights.id) WHERE slide = \'' . $slide_id . '\' AND fields.active = 1 ORDER BY position');
		foreach ($query->result() as $field)
		{
			$results[$field->position]['id'] = $field->id;
			$results[$field->position]['title'] = $field->title;
			$results[$field->position]['position'] = $field->position;
			$results[$field->position]['tab_order'] = $field->tab_order;
			$results[$field->position]['default_val'] = $field->default_val;
			$results[$field->position]['weight'] = $field->weight;
			$results[$field->position]['required'] = $field->required;
			$results[$field->position]['function'] = $field->function;
			$results[$field->position]['handle'] = $field->handle;
			$results[$field->position]['parent_handle'] = $field->parent_handle;
		}
		//return $query->result();
		return $results;
	}
}

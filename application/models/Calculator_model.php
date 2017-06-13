<?php	if (!defined('BASEPATH')) exit('No direct script access allowed');
class Calculator_model extends CI_Model {

	public $slides;
	public $slides_mod;

	public function __construct()
	{
		parent::__construct();
		// Build out "superobject"
		$this->get_slides();
		foreach ($this->slides as $slide)
		{
			$fields = $this->get_fields($slide['handle']);
			foreach ($fields as $field)
			{
				$this->slides[$slide['position']]['fields'][$field['position']] = $field;
			}
		}
		foreach ($this->slides_mod as $slide)
		{
			$fields = $this->get_fields_mod($slide['handle']);
			foreach ($fields as $field)
			{
				$this->slides_mod[$slide['handle']]['fields'][$field['handle']] = $field;
			}
		}
	}

	public function get_slides()
	{
		$query = $this->db->query("SELECT id, title, handle, position, sum_raw, sum_calc, add_to_total, add_to_eps_total FROM slides WHERE active = 1 AND products REGEXP '" . $this->router->fetch_class() . "' ORDER BY position");
		foreach ( $query->result() as $row )
		{
			$this->slides[ $row->position ] = array(
				'position' => $row->position,
				'sum_raw' => $row->sum_raw,
				'sum_calc' => $row->sum_calc,
				'add_to_total' => $row->add_to_total,
				'add_to_eps_total' => $row->add_to_eps_total,
				'title' => $row->title,
				'handle' => $row->handle,
				//'id' => $row->id,
				'fields' => array() ) ;
			$this->slides_mod[ $row->handle ] = $this->slides[ $row->position ];
		}
	}

	public function get_fields($slide_name)
	{
		$results = array();
		$query = $this->db->query('SELECT fields.id, fields.title, fields.handle, fields.parent_handle, fields.position, fields.global, fields.tab_order, fields.default_val, weights.value as \'weight\', fields.required, fields.function FROM fields LEFT JOIN weights ON (fields.weight = weights.id) WHERE parent_handle = \'' . $slide_name . '\' AND fields.active = 1 ORDER BY position');
		foreach ( $query->result() as $field )
		{
			//$results[$field->position]['id'] = $field->id;
			$results[$field->position]['title'] = $field->title;
			$results[$field->position]['position'] = $field->position;
			$results[$field->position]['global'] = $field->global;
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

	public function get_fields_mod($slide_name)
	{
		$results = array();
		$query = $this->db->query('SELECT fields.id, fields.title, fields.handle, fields.parent_handle, fields.position, fields.global, fields.tab_order, fields.default_val, weights.value as \'weight\', fields.required, fields.function FROM fields LEFT JOIN weights ON (fields.weight = weights.id) WHERE parent_handle = \'' . $slide_name . '\' AND fields.active = 1 ORDER BY position');
		foreach ( $query->result() as $field )
		{
			//$results[$field->position]['id'] = $field->id;
			$results[$field->handle]['title'] = $field->title;
			$results[$field->handle]['position'] = $field->position;
			$results[$field->handle]['global'] = $field->global;
			$results[$field->handle]['tab_order'] = $field->tab_order;
			$results[$field->handle]['default_val'] = $field->default_val;
			$results[$field->handle]['weight'] = $field->weight;
			$results[$field->handle]['required'] = $field->required;
			//$results[$field->handle]['function'] = $field->function;
			$results[$field->handle]['function'] = $field->default_val;
			$results[$field->handle]['handle'] = $field->handle;
			$results[$field->handle]['parent_handle'] = $field->parent_handle;
		}
		//return $query->result();
		return $results;
	}
}

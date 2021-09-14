<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	public $validarPersonal = [
		'ci' => 'required|min_length[7]|max_length[9]|is_natural_no_zero',
		'expedido' => 'required',
		'nombre' => 'required|min_length[3]|max_length[40]|alpha_space',
		'paterno' => 'required|min_length[3]|max_length[40]|alpha_space',
		'materno' => 'max_length[40]',
		'fecha_nacimiento' => 'required|valid_date',
		'genero' => 'required',
		'estado_civil' => 'required',
		'domicilio' => 'min_length[5]|max_length[150]',
		'correo' => 'required|valid_email',
		'celular' => 'required|min_length[8]|max_length[8]|is_natural_no_zero',
		'lugar_nacimiento' => 'min_length[5]|max_length[90]'
	];
	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}

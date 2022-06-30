<?php

namespace SimonMarcelLinden\DatabaseSettings\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Option extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return [
			'id' => $this->id,
			'name' => $this->name,
			'data' => $this->data,
			'type' => $this->type,
			'label' => $this->label,
			'value' => $this->value,
			'rules'  => $this->rules,
			'message' => $this->message,
		];
	}
}

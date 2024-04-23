<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'student_id' => $this->student_id,
            'student_name' => $this->name,
            'studnet_email' => $this->email,
            'student_birthday' => $this->date_of_birth,
            'student_type' => $this->student_type,
            'student_card_number' => $this->card_number,
        ];
    }
}

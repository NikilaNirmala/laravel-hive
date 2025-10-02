<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
    'user_id' => $this->id,
    'username' => $this->name,
    'user_type' => $this->user_type,
    'status' => $this->status === 1 ? 'active' : 'blocked',
    'profile_photo_url' => $this->profile_photo_url
];
    }
}
